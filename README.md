# 登記申請例 暗記帳

司法書士試験の登記申請例(不動産登記・商業登記)を、項目ごとに暗記する学習アプリ。
PHP で画面の枠と項目定義・初期データを配信し、学習画面・採点・保存は素の JavaScript(ビルド不要)で動く。
進捗と申請例はブラウザ内(IndexedDB)に保存し、Service Worker でオフラインでも使える。

## 動かし方

PHP 8.0 以上が必要。`public/` をドキュメントルート(またはその配下のフォルダ)に置けばそのまま動く。

```sh
php -S localhost:8000 -t public   # ローカルで確認(npm run serve でも可)
```

オフライン動作(Service Worker)は HTTPS か localhost でのみ有効になる。

## テスト

```sh
npm install   # テスト用の fake-indexeddb のみ
npm test      # PHP の初期データ検査 + 採点・間隔反復・出題・保存の単体テスト(node --test)
```

## 構成

| パス | 内容 |
| --- | --- |
| `public/index.php` | 画面の枠(ヘッダー・タブ)を出力し、項目定義と初期データを JSON で埋め込む |
| `public/inc/data.php` | 区分ごとの項目定義、復習間隔などの定数、候補プール、商業登記の見本3件 |
| `public/inc/seed/*.json` | 不動産登記の申請例(ひな形1から変換した23件) |
| `public/sw.php` | Service Worker。配信ファイルの更新日時からキャッシュのバージョンを作る |
| `public/js/logic.js` | 間隔反復・採点・出題選択・付箋の対象・バックアップ検証(DOM に依存しない) |
| `public/js/db.js` | IndexedDB 保存 |
| `public/js/app.js` | 4つのタブの画面 |
| `tools/import_hinagata.php` | ひな形(タブ区切りテキスト)を申請例 JSON に変換する(関数は `tools/hinagata_lib.php`) |
| `tests/` | 単体テスト(`*.test.js`)と PHP のデータ検査(`data_test.php`・`import_test.php`) |

不動産登記の申請例は、ひな形のテキスト(1列目に項目名、2列目に内容のタブ区切り。「申請例NN」の行から次の「申請例NN」の前までが1件、1列目が空の行は直前の項目の続き。UTF-8 / Shift_JIS)から変換する。

```sh
php tools/import_hinagata.php ひな形2.txt re-h2 > public/inc/seed/hinagata2.json
```

読み取れなかった行は「注意:」として表示される。登録免許税の課税標準・税率は課税価格と税額から判定する。
`inc/seed/` に置いた JSON はすべて読み込まれ、利用中の端末にも新しい申請例だけが追加される(進捗は消えない)。
商業登記の見本は `public/inc/data.php` を編集する。
利用中の端末では、弱点表タブの「JSONに書き出す」で出力したファイルを編集して「JSONを読み込む」で反映する。
