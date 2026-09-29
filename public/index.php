<?php
declare(strict_types=1);
require __DIR__ . '/inc/data.php';

header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
$tabs = [
    'cloze' => '穴埋め',
    'attach' => '添付情報・書面',
    'tax' => '登録免許税',
    'weak' => '弱点表',
];
$h = static fn(string $s): string => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="theme-color" content="#e6ece8" media="(prefers-color-scheme: light)">
  <meta name="theme-color" content="#16201c" media="(prefers-color-scheme: dark)">
  <meta name="description" content="司法書士試験の登記申請例を項目ごとに暗記する学習アプリ">
  <link rel="icon" href="icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="manifest" href="manifest.webmanifest">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=BIZ+UDPMincho:wght@400;700&display=swap">
  <link rel="stylesheet" href="css/style.css">
  <title>登記申請例 暗記帳</title>
</head>
<body>
  <header class="app-header">
    <h1 class="app-title">登記申請例 暗記帳</h1>
    <nav class="tabs" role="tablist" aria-label="学習モード">
<?php foreach ($tabs as $id => $label): ?>
      <button type="button" class="tab" role="tab" id="tab-<?= $h($id) ?>" data-tab="<?= $h($id) ?>" aria-controls="panel" aria-selected="<?= $id === 'cloze' ? 'true' : 'false' ?>" tabindex="<?= $id === 'cloze' ? '0' : '-1' ?>"><?= $h($label) ?></button>
<?php endforeach; ?>
    </nav>
  </header>
  <main id="panel" class="main" role="tabpanel" aria-labelledby="tab-cloze">
    <noscript><p class="error">このアプリを使うには JavaScript を有効にしてください。</p></noscript>
  </main>
  <script id="bootstrap" type="application/json"><?= touki_bootstrap_json() ?></script>
  <script type="module" src="js/app.js"></script>
</body>
</html>
