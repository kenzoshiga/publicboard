<?php
/**
 * 不動産登記の申請例ひな形(タブ区切りテキスト)を、アプリの申請例データ(JSON)に変換する。
 *
 *   php tools/import_hinagata.php ひな形1.txt hinagata1 > public/inc/seed/hinagata1.json
 *
 * - 「申請例NN<TAB>表題」から次の「申請例NN」の前の行までが1件
 * - 1列目が項目名、2列目が内容。1列目が空の行は直前の項目の続き(改行して追加)
 * - 文字コードは UTF-8 / Shift_JIS(CP932)のどちらでもよい
 * - 登録免許税の課税標準・税率は、課税価格と登録免許税の金額から判定する
 *
 * 読み取れなかった行や判定できなかった点は標準エラーに「注意:」として出す。
 */
declare(strict_types=1);

require __DIR__ . '/hinagata_lib.php';

if (PHP_SAPI !== 'cli' || count($argv) < 3) {
    fwrite(STDERR, "使い方: php tools/import_hinagata.php <ひな形.txt> <idの接頭辞>\n");
    exit(2);
}

[$cases, $warnings] = touki_import_hinagata((string)file_get_contents($argv[1]), $argv[2]);
foreach ($warnings as $w) {
    fwrite(STDERR, "注意: $w\n");
}
echo json_encode($cases, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT), "\n";
fwrite(STDERR, count($cases) . " 件を変換しました\n");
