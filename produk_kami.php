<?php
include 'header.php';
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami</title>
</head>
<body>
<!-- Header dengan background image & overlay -->
<header class="position-relative text-white">
  <div class="bg-dark position-absolute top-0 start-0 w-100 h-100" style="background: url('assets/img/image.png') center/cover no-repeat; opacity: 0.5;"></div>
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(148, 134, 134, 0.5);"></div>

  <div class="container position-relative d-flex flex-column justify-content-center align-items-center" style="min-height: 300px;">
    <h1 class="fw-bold">Produk Kami UKM PSHT Komisariat</h1>
    <h2 class="fw-bold">Universitas Lambung Mangkurat</h2>
  </div>
</header> 

<!-- BREADCRUMB -->
<nav aria-label="breadcrumb" class="bg-light py-2">
  <div class="container">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Produk Kami UKM PSHT Komisariat</li>
    </ol>
  </div>
</nav>

<!-- ISI PARAGRAF -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="mb-3">Produk Kami UKM PSHT Komisariat</h2>
    <p>Kami percaya bahwa setiap atribut membawa makna.

Dari kaos latihan penuh semangat, hingga pin kecil penuh nilai, setiap produk KONTAC dibuat dengan semangat persaudaraan sejati dan cinta pada budaya silat.

Kami juga menyediakan produk herbal alami, serta jasa desain & bordir untuk event dan kebutuhan latihan warga.</p>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Pakaian Latihan dan Seragam PSHT</li>
    <li class="list-group-item">Merchandise Bertema Persaudaraan</li>
    <li class="list-group-item">Produk Herbal dan Kebugaran</li>
    <li class="list-group-item">Jasa Sablon dan Bordir Atribut PSHT</li>
    </ul>
  </div>
</section>
</body>
</html>
<?php include 'footer.php'; ?>
