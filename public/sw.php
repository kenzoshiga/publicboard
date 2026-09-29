<?php
declare(strict_types=1);
require __DIR__ . '/inc/version.php';

header('Content-Type: application/javascript; charset=UTF-8');
header('Cache-Control: no-cache');
$assets = array_values(array_filter(touki_asset_files(), static fn($f) => !str_starts_with($f, 'inc/')));
// index.php は "./" として配信する
$assets = array_map(static fn($f) => $f === 'index.php' ? './' : $f, $assets);
?>
// Service Worker(オフライン対応)。同一オリジンはネットワーク優先・失敗時はキャッシュ、Webフォントはキャッシュ優先。
const CACHE = "touki-<?= touki_asset_version() ?>";
const FONT_CACHE = "touki-fonts";
const ASSETS = <?= json_encode($assets, JSON_UNESCAPED_SLASHES) ?>;

self.addEventListener("install", (e) => {
  e.waitUntil(caches.open(CACHE).then((c) => c.addAll(ASSETS)).then(() => self.skipWaiting()));
});

self.addEventListener("activate", (e) => {
  e.waitUntil(
    caches
      .keys()
      .then((keys) => Promise.all(keys.filter((k) => k !== CACHE && k !== FONT_CACHE).map((k) => caches.delete(k))))
      .then(() => self.clients.claim()),
  );
});

self.addEventListener("fetch", (e) => {
  const req = e.request;
  if (req.method !== "GET") return;
  const url = new URL(req.url);
  if (url.origin === "https://fonts.googleapis.com" || url.origin === "https://fonts.gstatic.com") {
    e.respondWith(
      caches.open(FONT_CACHE).then(async (c) => {
        const hit = await c.match(req);
        if (hit) return hit;
        const res = await fetch(req);
        if (res.ok || res.type === "opaque") c.put(req, res.clone());
        return res;
      }),
    );
    return;
  }
  if (url.origin !== self.location.origin) return;
  e.respondWith(
    fetch(req)
      .then((res) => {
        if (res.ok) {
          const copy = res.clone();
          caches.open(CACHE).then((c) => c.put(req.mode === "navigate" ? "./" : req, copy));
        }
        return res;
      })
      .catch(async () => (await caches.match(req.mode === "navigate" ? "./" : req, { ignoreSearch: req.mode === "navigate" })) ?? Response.error()),
  );
});
