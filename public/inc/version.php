<?php
/** 配信ファイルの更新日時からバージョン文字列を作る(Service Worker のキャッシュ更新に使う) */
function touki_asset_files(): array
{
    $seeds = array_map(static fn($f) => 'inc/seed/' . basename($f), glob(__DIR__ . '/seed/*.json') ?: []);
    return [
        ...$seeds,
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
