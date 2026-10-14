<?php

$registrationCourses = require __DIR__ . '/course-data.php';

?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#120c0a">
  <title>Loop Lab | KursusKu</title>
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
    <a href="history-dummy.php">History</a>
    <a class="is-active" href="loop-lab.php" aria-current="page">Loop Lab</a>
  </nav>
</header>
<main class="container">
  <section class="page-intro">
    <p class="eyebrow">Loop Lab</p>
    <h1>Paket dan Fasilitas Tiap Kursus</h1>
    <p>Semua kursus dan fasilitasnya di bawah ini dibuat otomatis dari data kursus memakai perulangan (loop).</p>
  </section>

  <section class="course-lab" aria-label="Daftar paket dan fasilitas kursus">
    <?php foreach ($registrationCourses as $course): ?>
      <article class="lab-course-card">
        <p class="eyebrow"><?= $course['package_total'] ?> Paket Tersedia</p>
        <h2><?= htmlspecialchars($course['name'], ENT_QUOTES, 'UTF-8') ?></h2>
        <h3>Fasilitas Kursus</h3>
        <ul class="facility-list">
          <?php foreach ($course['facilities'] as $facility): ?>
            <li><?= htmlspecialchars($facility, ENT_QUOTES, 'UTF-8') ?></li>
          <?php endforeach; ?>
        </ul>
      </article>
    <?php endforeach; ?>
  </section>

  <div class="page-action">
    <a class="btn-link" href="registration.php">Kembali ke Form Pendaftaran</a>
  </div>
</main>
</body>
</html>