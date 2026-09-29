<?php
// PHP 側の項目定義・初期データの整合性チェック(php tests/data_test.php)
declare(strict_types=1);
require __DIR__ . '/../public/inc/data.php';

$failures = 0;
function check(bool $ok, string $msg): void
{
    global $failures;
    if (!$ok) {
        $failures++;
        fwrite(STDERR, "NG: $msg\n");
    }
}

$config = touki_config();
$cases = touki_seed_cases();

check(count(array_filter($cases, fn($c) => $c['category'] === '不動産')) === 5, '不動産は5件');
check(count(array_filter($cases, fn($c) => $c['category'] === '商業')) === 3, '商業は3件');
check(count(array_unique(array_column($cases, 'id'))) === 8, 'id が重複していない');
check(
    array_column($config['fieldDefs']['商業'], 'label') === ['登記の事由', '登記すべき事項', '登録免許税(課税標準金額を含む)', '添付書面'],
    '商業は4項目'
);

foreach ($cases as $c) {
    $id = $c['id'];
    $cloze = array_column(array_filter($config['fieldDefs'][$c['category']], fn($f) => $f['mode'] === 'cloze'), 'key');
    $keys = array_keys($c['fields']);
    sort($cloze);
    sort($keys);
    check($keys === $cloze, "$id: 記述項目が区分の定義と一致");
    foreach ($c['attach'] as $a) {
        check(in_array($a, $config['pools']['attach'][$c['category']], true), "$id: 添付「{$a}」が候補プールにある");
    }
    if ($c['category'] === '商業') {
        check(in_array($c['tax']['rate'], $config['pools']['coTaxRate'], true), "$id: 税額の定めが候補にある");
        check($c['tax']['base'] === null || is_int($c['tax']['base']), "$id: 課税標準金額は数値か null");
    } else {
        check(in_array($c['tax']['rate'], $config['pools']['reTaxRate'], true), "$id: 税率が候補にある");
        check(in_array($c['tax']['base'], $config['pools']['reTaxBase'], true), "$id: 課税標準が候補にある");
    }
    check(is_int($c['tax']['answer']), "$id: 税額は整数");
}

check(
    array_column($config['fieldDefs']['不動産'], 'label') === ['登記の目的', '登記原因', '登記事項', '申請人', '添付情報', '課税価格', '登録免許税'],
    '不動産は課税価格を含む7項目'
);

$json = touki_bootstrap_json();
check(json_decode($json, true)['seedCases'] === $cases, 'JSON に往復変換できる');
check(!str_contains($json, '</'), 'JSON に </ が含まれない(script 埋め込み安全)');

if ($failures > 0) {
    fwrite(STDERR, "$failures 件失敗\n");
    exit(1);
}
echo "data_test.php: OK\n";
