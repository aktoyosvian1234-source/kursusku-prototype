<?php
$ServerTime = date('Y-m-d H:i:s');
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Waktu Server | KursusKu</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      min-height: 100vh;
      display: grid;
      place-items: center;
      font-family: "Plus Jakarta Sans", "Segoe UI", system-ui, -apple-system, Arial, sans-serif;
      color: #f3f4f6;
      background: #120c0a;
    }
    .server-time {
      padding: 24px 32px;
      border: 1px solid rgba(255, 255, 255, 0.09);
      border-radius: 20px;
      background: #0d1b1f;
      text-align: center;
    }
    .server-time span {
      display: block;
      margin-bottom: 6px;
      color: #38bdf8;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
    }
    .server-time strong {
      font-size: 24px;
      color: #5eead4;
    }
  </style>
</head>
<body>
  <div class="server-time">
    <span>Waktu Server</span>
    <strong><?= htmlspecialchars($ServerTime) ?></strong>
  </div>
</body>
</html>