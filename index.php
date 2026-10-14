<?php 
$siteName = 'KursusKu UIN';
$tagline = 'Belajar, daftar, dan kelola kursus dalam satu tempat.';
$year = date('Y'); 

require_once __DIR__ . '/helpers.php';

$courses = [
    [
        'code' => 'WEB-01',
        'name' => 'Web Dasar',
        'fee' => 200000,
        'quota' => 30,
        'registered' => 12,
        'start_date' => '2026-09-21',
    ],
    [
        'code' => 'PHP-01',
        'name' => 'PHP Dasar',
        'fee' => 250000,
        'quota' => 30,
        'registered' => 18,
        'start_date' => '2026-09-22',
    ],
    [
        'code' => 'PHP-02',
        'name' => 'PHP Lanjutan',
        'fee' => 300000,
        'quota' => 25,
        'registered' => 24,
        'start_date' => '2026-09-24',
    ],
    [
        'code' => 'LAR-01',
        'name' => 'Laravel Fundamental',
        'fee' => 350000,
        'quota' => 25,
        'registered' => 25,
        'start_date' => '2026-09-28',
    ],
    [
        'code' => 'DB-01',
        'name' => 'MySQL Dasar',
        'fee' => 275000,
        'quota' => 20,
        'registered' => 0,
        'start_date' => '2026-10-01',
    ],
    [
        'code' => 'UI-01',
        'name' => 'UI Web Dasar',
        'fee' => 225000,
        'quota' => 35,
        'registered' => 9,
        'start_date' => '2026-10-03',
    ],
];?>

<!doctype html>
<html lang="id">
  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#120c0a">
  <title><?= htmlspecialchars($siteName) ?></title>
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

<body class="home-page">
  <header class="site-header">
    <nav class="site-nav container" aria-label="Navigasi utama">
      <a class="brand" href="index.php"><?= htmlspecialchars($siteName) ?></a>
      <a href="#keunggulan">Keunggulan</a>
      <a href="#katalog">Katalog</a>
      <a href="#alur">Cara Daftar</a>
      <a href="registration.php">Daftar Kursus</a>
      <a href="#kontak">Kontak</a>
    </nav>
  </header>

  <main>
    <section id="hero">
      <p class="eyebrow">Platform Belajar Teknologi</p>
      <h1><?= htmlspecialchars($tagline) ?></h1>
      <p>Pilih kursus teknologi yang sesuai kebutuhan dan tingkatkan keterampilan Anda dari dasar hingga praktik.</p>
      <div class="hero-buttons">
        <a href="#katalog" class="btn-primary">Jelajahi Kursus</a>
        <a href="fee-calculator.php" class="calculator-link">Hitung Estimasi Biaya <span aria-hidden="true">→</span></a>
      </div>
      <div class="hero-highlights" aria-label="Keunggulan singkat KursusKu">
        <div><strong>6</strong><span>Kursus pilihan</span></div>
        <div><strong>3</strong><span>Metode belajar</span></div>
        <div><strong>100%</strong><span>Fokus praktik</span></div>
      </div>
    </section>
    <section id="keunggulan">
      <h2>Kenapa Memilih KursusKu?</h2>
      <article>
        <h3>Materi Terarah</h3>
        <p> Materi disusun bertahap, mulai dari konsep dasar sampai praktik langsung. </p>
      </article>
      <article>
        <h3>Belajar Lewat Proyek</h3>
        <p> Di setiap tahap, Anda menghasilkan bagian nyata dari sebuah aplikasi. </p>
      </article>
      <article>
        <h3>Pendampingan Praktik</h3>
        <p> Belajar lewat demonstrasi, latihan, dan evaluasi bersama pengajar. </p>
      </article>
    </section> 
    <section id="katalog">
    <h2>Katalog Kursus</h2>

    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Kursus</th>
                <th>Biaya</th>
                <th>Tanggal Mulai</th>
                <th>Sisa Kursi</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($courses as $course): ?>
                <tr>
                    <td><?= htmlspecialchars($course['code']) ?></td>

                    <td>
                        <?= htmlspecialchars(trim($course['name'])) ?>
                    </td>

                    <td>
                        <?= rupiah($course['fee']) ?>
                    </td>

                    <td>
                        <?= formatTanggal($course['start_date']) ?>
                    </td>

                    <td>
                        <?= sisaKursi($course['quota'], $course['registered']) ?>
                    </td>

                    <td>
    <?php
    $status = statusKursus(
        $course['quota'],
        $course['registered']
    );

    $class = $status === 'Penuh'
        ? 'badge-full'
        : 'badge-available';
    ?>

    <span class="<?= $class ?>">
        <?= $status ?>
    </span>
</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section> 
    <section id="alur">
      <h2>Cara Mendaftar</h2>
      <ol>
        <li>Pilih kursus yang Anda minati.</li>
        <li>Lengkapi form pendaftaran.</li>
        <li>Periksa kembali data yang diisi.</li>
        <li> Kirim pendaftaran, lalu tunggu konfirmasi. </li>
      </ol>
    </section>
    <section id="media">
      <h2>Kenali Program Kami</h2> <img src="assets/images/hero-kursus.jpg" alt="Mahasiswa sedang mengikuti kegiatan kursus komputer" width="640">
      <h3>Video Singkat</h3> <video controls width="640">
        <source src="assets/video/intro-kursus.mp4" type="video/mp4"> Browser Anda tidak mendukung video HTML5.
      </video>
      <p> <a href="https://www.php.net/" target="_blank" rel="noopener"> Dokumentasi PHP </a> </p>
    </section>
    <section id="kontak">
      <h2>Kontak</h2>
      <p> Email: aktoyosvian1234@gmail.com </p>
      <p> Alamat: UIN Sjech M Djamil Djambek </p>
    </section>
  </main>
  <footer> <small> &copy; <?= $year ?> <?= htmlspecialchars($siteName) ?> </small> </footer>
</body>

</html>