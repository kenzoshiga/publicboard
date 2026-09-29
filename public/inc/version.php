<?php
/** 配信ファイルの更新日時からバージョン文字列を作る(Service Worker のキャッシュ更新に使う) */
function touki_asset_files(): array
{
    return [
        'index.php', 'inc/data.php', 'css/style.css', 'js/app.js', 'js/logic.js', 'js/db.js',
        'manifest.webmanifest', 'icon.svg', 'icon-192.png', 'icon-512.png', 'apple-touch-icon.png',
    ];
}

function touki_asset_version(): string
{
    $root = dirname(__DIR__);
    $parts = [];
    foreach (touki_asset_files() as $f) {
        $parts[] = $f . ':' . (is_file("$root/$f") ? filemtime("$root/$f") . ':' . filesize("$root/$f") : '0');
    }
    return substr(sha1(implode('|', $parts)), 0, 12);
}
