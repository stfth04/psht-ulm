<?php
include 'header.php';
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
</head>
<body>
<!-- Header dengan background image & overlay -->
<header class="position-relative text-white">
  <div class="bg-dark position-absolute top-0 start-0 w-100 h-100" style="background: url('assets/img/visi.jpg') center/cover no-repeat; opacity: 0.5;"></div>
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(148, 134, 134, 0.5);"></div>

  <div class="container position-relative d-flex flex-column justify-content-center align-items-center" style="min-height: 300px;">
    <h1 class="fw-bold">Kontak Kami UKM PSHT Komisariat</h1>
    <h2 class="fw-bold">Universitas Lambung Mangkurat</h2>
  </div>
</header> 

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="bg-light py-2">
  <div class="container">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Kontak Kami</li>
    </ol>
  </div>
</nav>


<!-- Konten Utama -->
<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Kontak Kami UKM PSHT</h2>

      <!-- Info Kontak -->
      <div class="bg-white shadow-sm rounded p-4">
        <p><strong>Alamat:</strong> Jl.Lambung Mangkurat</p>
        <p><strong>WhatsApp:</strong> 0895340731588</p>
        <p><strong>Email:</strong> stfth12@gmail.com</p>
        <p><strong>Instagram:</strong> <a href="https://instagram.com/kontac_psht" target="_blank" class="text-decoration-none">@kontac_psht</a></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php include 'footer.php'; ?>
