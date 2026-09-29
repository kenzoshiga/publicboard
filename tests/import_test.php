<?php
// ひな形の変換ツールの検査(php tests/import_test.php)
declare(strict_types=1);
require __DIR__ . '/../tools/hinagata_lib.php';

$failures = 0;
function check(bool $ok, string $msg): void
{
    global $failures;
    if (!$ok) {
        $failures++;
        fwrite(STDERR, "NG: $msg\n");
    }
}

$txt = implode("\r\n", [
    "申請例01\t所有権移転　売買",
    "事例\tＡが土地をＢに売却した。土地の課税標準の額は、金1000万円である。",
    "登記の目的\t所有権移転",
    "登記原因\t令和○年6月28日売買",
    "申請人\t権利者　東京都新宿区甲町一丁目1番1号",
    "\tＢ",
    "\t義務者　Ａ",
    "添付情報\t登記原因証明情報",
    "\t登記識別情報",
    "課税価格\t金1000万円",
    "登録免許税\t金20万円",
    "申請例02\t所有権保存（区分建物）",
    "事例\t建物の課税標準の額は、金1000万円である。",
    "登記の目的\t所有権保存",
    "所有者\tＢ",
    "添付情報\t登記原因証明情報",
    "住所証明情報\t（Ｂの住民票の写し等）",
    "上記以外の申請事項等\t令和○年6月28日　法第74条第2項申請",
    "課税価格\t建物　　金1000万円",
    "\t敷地権　金1000万円",
    "登録免許税\t建物　　金4万円",
    "\t敷地権　金20万円",
    "\t合計　　金24万円",
    "申請例03\t（参考）抵当権抹消",
    "\t参考の説明文。",
    "登記の目的\t1番抵当権抹消",
    "権利者\t持分2分の1　Ｂ",
    "義務者\tＡ",
    "添付情報\t　登記原因証明情報",
    "登録免許税\t金1000円",
    "",
]);
[$cases, $warnings] = touki_import_hinagata(mb_convert_encoding($txt, 'SJIS-win', 'UTF-8'), 't');
[$a, $b, $c] = $cases;

check(count($cases) === 3, '3件に分かれる(Shift_JIS も読める)');
check($a['id'] === 't-01' && $a['title'] === '所有権移転　売買', 'id と表題');
check($a['fields']['applicant'] === "権利者　東京都新宿区甲町一丁目1番1号\nＢ\n義務者　Ａ", '続きの行は申請人に改行で追加');
check($a['attach'] === ['登記原因証明情報', '登記識別情報'], '添付情報は1行1件');
check($a['fields']['matters'] === '(なし)', 'ない項目は(なし)');
check($a['tax']['base'] === '不動産の価額' && $a['tax']['rate'] === '1000分の20' && $a['tax']['answer'] === 200000, '税率を金額から判定');
check($a['tax']['answerText'] === '金20万円', '税額はひな形の表記のまま');
check($a['tax']['example'] === '土地の課税標準の額は、金1000万円である', '条件は事例の課税標準の文');

check($b['fields']['cause'] === '(なし)' && $b['sourceApplicantLabel'] === '所有者', '登記原因なし・所有者欄');
check($b['attach'] === ['登記原因証明情報', '住所証明情報'] && $b['attachNotes']['住所証明情報'] === '（Ｂの住民票の写し等）', '添付の補足');
check($b['tax']['rate'] === '建物1000分の4・敷地権1000分の20' && $b['tax']['answer'] === 240000, '建物と敷地権で税率が分かれる');
check($b['fields']['price'] === "建物　　金1000万円\n敷地権　金1000万円", '課税価格は複数行のまま');

check($c['scene'] === '参考の説明文。', '項目名のない行は事例');
check($c['fields']['applicant'] === "権利者　持分2分の1　Ｂ\n義務者　Ａ", '権利者・義務者の行は申請人にまとめる');
check($c['attach'] === ['登記原因証明情報'], '添付の前後の空白を除く');
check($c['tax']['base'] === '不動産の個数' && $c['tax']['answer'] === 1000, '課税価格なしは定額');
check(count($warnings) === 1, '注意は添付の補足の1件だけ');

check(touki_yen('金1億2000万円') === 120000000 && touki_yen('移転した持分の価格　　金500万円') === 5000000, '金額の読み取り');

if ($failures > 0) {
    fwrite(STDERR, "$failures 件失敗\n");
    exit(1);
}
echo "import_test.php: OK\n";
