<?php

$registrationHistory = [
    [
        'id' => 'REG-26001',
        'name' => 'Nadia Putri',
        'course' => 'Web Dasar',
        'method' => 'Kelas Online',
        'status' => 'Diproses',
    ],
    [
        'id' => 'REG-26002',
        'name' => 'Budi Santoso',
        'course' => 'PHP Dasar',
        'method' => 'Kelas Tatap Muka',
        'status' => 'Terkonfirmasi',
    ],
    [
        'id' => 'REG-26003',
        'name' => 'Dewi Lestari',
        'course' => 'Laravel Fundamental',
        'method' => 'Kelas Hybrid',
        'status' => 'Menunggu Pembayaran',
    ],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#120c0a">
  <title>Riwayat Dummy | KursusKu</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/polish.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">
  <style>
    body, input, select, textarea, button {
      font-family: "Plus Jakarta Sans", "Segoe UI", system-ui, -apple-system, Arial, sans-serif;
    }
    h1, h2, h3, .brand {
      font-family: "Sora", "Plus Jakarta Sans", "Segoe UI", system-ui, sans-serif;
    }
    body {
      -webkit-font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }
  </style>
</head>
<body>
<header class="site-header">
  <nav class="site-nav container" aria-label="Navigasi utama">
    <a class="brand" href="index.php">KursusKu</a>
    <a href="index.php">Beranda</a>
    <a href="registration.php">Daftar</a>
    <a class="is-active" href="history-dummy.php" aria-current="page">History</a>
    <a href="loop-lab.php">Loop Lab</a>
  </nav>
</header>
<main class="container">
  <section class="page-intro">
    <p class="eyebrow">Data Contoh</p>
    <h1>Riwayat Pendaftaran</h1>
    <p>Daftar di bawah ini hanya data dummy, bukan hasil dari pendaftaran yang dikirim.</p>
  </section>

  <section class="summary-card history-card">
    <div class="table-scroll">
      <table class="history-table">
        <thead>
          <tr>
            <th>ID Pendaftaran</th>
            <th>Nama Peserta</th>
            <th>Kursus</th>
            <th>Metode Belajar</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($registrationHistory as $registration): ?>
            <tr>
              <td><?= e($registration['id']) ?></td>
              <td><?= e($registration['name']) ?></td>
              <td><?= e($registration['course']) ?></td>
              <td><?= e($registration['method']) ?></td>
              <td>
                <span class="history-status <?= $registration['status'] === 'Terkonfirmasi' ? 'history-status-confirmed' : '' ?>">
                  <?= e($registration['status']) ?>
                </span>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <a class="btn-link" href="registration.php">Kembali ke Form Pendaftaran</a>
  </section>
</main>
</body>
</html>