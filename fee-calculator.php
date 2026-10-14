<?php

$courseName = 'Laravel Fundamental';
$fee = 350000;
$participantCount = 2;
$discountPercent = 10;
$adminFee = 25000;
$isActive = true;


$subtotal = $fee * $participantCount;

$discount = intdiv(
    $subtotal * $discountPercent,
    100
);

$total = $subtotal - $discount + $adminFee;

?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#120c0a">

    <title>Kalkulator Biaya | KursusKu</title>

    <link rel="stylesheet" href="assets/css/fee-calculator.css">
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

    <main class="calculator-container">

        <div class="calculator-card">

            <a href="index.php" class="back-link">
                Kembali ke Beranda
            </a>

            <div class="header">

                <span class="badge">
                    KursusKu Calculator
                </span>

                <h1>
                    Kalkulator Biaya Kursus
                </h1>

                <p>
                    Lihat estimasi total biaya kursus berdasarkan
                    jumlah peserta, diskon, dan biaya admin.
                </p>

            </div>


            <!-- INFORMASI KURSUS -->

            <div class="course-info">

                <div>
                    <span class="label">
                        Nama Kursus
                    </span>

                    <strong>
                        <?= htmlspecialchars($courseName) ?>
                    </strong>
                </div>

                <div>
                    <span class="label">
                        Status Kursus
                    </span>

                    <strong class="status">
                        <?= $isActive ? 'Aktif' : 'Tidak Aktif' ?>
                    </strong>
                </div>

            </div>


            <!-- RINCIAN BIAYA -->

            <div class="table-wrapper">

                <table>

                    <thead>
                        <tr>
                            <th>Komponen</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Biaya per peserta</td>

                            <td>
                                Rp <?= number_format($fee, 0, ',', '.') ?>
                            </td>
                        </tr>


                        <tr>
                            <td>Jumlah peserta</td>

                            <td>
                                <?= $participantCount ?> orang
                            </td>
                        </tr>


                        <tr>
                            <td>Subtotal</td>

                            <td>
                                Rp <?= number_format($subtotal, 0, ',', '.') ?>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                Potongan diskon
                                (<?= $discountPercent ?>%)
                            </td>

                            <td class="discount">
                                - Rp <?= number_format($discount, 0, ',', '.') ?>
                            </td>
                        </tr>


                        <tr>
                            <td>Biaya admin</td>

                            <td>
                                Rp <?= number_format($adminFee, 0, ',', '.') ?>
                            </td>
                        </tr>


                        <tr class="total-row">

                            <td>
                                Total Pembayaran
                            </td>

                            <td>
                                Rp <?= number_format($total, 0, ',', '.') ?>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>


            <!-- RUMUS -->

            <div class="formula">

                <h2>Rumus yang Digunakan</h2>

                <p>
                    Subtotal = Biaya × Jumlah Peserta
                </p>

                <p>
                    Diskon = Subtotal × Persentase Diskon ÷ 100
                </p>

                <p>
                    Total = Subtotal - Diskon + Biaya Admin
                </p>

            </div>

            <section class="test-matrix">
    <h2>Test Matrix</h2>
    <p>
        Setiap skenario diuji dengan membandingkan hasil yang diharapkan
        dengan hasil perhitungan program.
    </p>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Biaya/Peserta</th>
                    <th>Peserta</th>
                    <th>Diskon</th>
                    <th>Admin</th>
                    <th>Expected</th>
                    <th>Actual</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rp 350.000</td>
                    <td>1</td>
                    <td>0%</td>
                    <td>Rp 25.000</td>
                    <td>Rp 375.000</td>
                    <td>Rp 375.000</td>
                    <td class="pass">PASS</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Rp 350.000</td>
                    <td>1</td>
                    <td>10%</td>
                    <td>Rp 25.000</td>
                    <td>Rp 340.000</td>
                    <td>Rp 340.000</td>
                    <td class="pass">PASS</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Rp 350.000</td>
                    <td>2</td>
                    <td>25%</td>
                    <td>Rp 25.000</td>
                    <td>Rp 550.000</td>
                    <td>Rp 550.000</td>
                    <td class="pass">PASS</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Rp 0</td>
                    <td>1</td>
                    <td>10%</td>
                    <td>Rp 0</td>
                    <td>Rp 0</td>
                    <td>Rp 0</td>
                    <td class="pass">PASS</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Rp 2.500.000</td>
                    <td>3</td>
                    <td>10%</td>
                    <td>Rp 50.000</td>
                    <td>Rp 6.800.000</td>
                    <td>Rp 6.800.000</td>
                    <td class="pass">PASS</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

            <div class="footer-note">

                <p>
                    Kalkulator ini memakai nilai tetap (hard-code)
                    sesuai latihan Pertemuan 3.
                </p>

            </div>

        </div>

    </main>

</body>

</html>