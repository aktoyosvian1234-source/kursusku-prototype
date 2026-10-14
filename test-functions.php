<?php

require_once __DIR__ . '/helpers.php';

$tests = [
    ['Rupiah', rupiah(250000), 'Rp 250.000'],
    ['Penuh', statusKursus(25, 25), 'Penuh'],
    ['Tersedia', statusKursus(30, 29), 'Tersedia'],
    ['Sisa kosong', sisaKursi(20, 0), 20],
    ['Sisa penuh', sisaKursi(25, 25), 0],
    ['Tanggal', formatTanggal('2026-09-15'), '15-09-2026'],
];

?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hasil Tes Helper | KursusKu</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 40px 20px;
      font-family: "Plus Jakarta Sans", "Segoe UI", system-ui, -apple-system, Arial, sans-serif;
      line-height: 1.7;
      color: #f3f4f6;
      background: #120c0a;
    }
    .test-output {
      max-width: 720px;
      margin: auto;
      padding: 24px 28px;
      border: 1px solid rgba(255, 255, 255, 0.09);
      border-radius: 20px;
      background: #0d1b1f;
    }
    .test-output h1 {
      margin: 0 0 16px;
      font-size: 22px;
    }
    .test-row {
      padding: 8px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.07);
    }
    .test-row:last-child {
      border-bottom: 0;
    }
    .pass { color: #4ade80; font-weight: 700; }
    .fail { color: #fb7185; font-weight: 700; }
  </style>
</head>
<body>
<div class="test-output">
  <h1>Hasil Tes Helper</h1>
<?php
foreach ($tests as [$name, $actual, $expected]) {
    $passed = $actual === $expected;

    echo '  <div class="test-row">';
    echo htmlspecialchars($name) . ': ';
    echo '<span class="' . ($passed ? 'pass' : 'fail') . '">' . ($passed ? 'PASS' : 'FAIL') . '</span>';
    echo ' | actual=' . htmlspecialchars((string) $actual);
    echo ' | expected=' . htmlspecialchars((string) $expected);
    echo "</div>\n";
}
?>
</div>
</body>
</html>