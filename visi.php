<?php
include 'header.php';
include 'koneksi.php';

$sql = "SELECT * FROM tentang_kami LIMIT 1";
$query = mysqli_query($koneksi, $sql);

if ($query && mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);
} else {
    $data = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<!-- Header dengan background image & overlay -->
<header class="position-relative text-white">
  <div class="bg-dark position-absolute top-0 start-0 w-100 h-100" style="background: url('assets/img/visi.jpg') center/cover no-repeat; opacity: 0.5;"></div>
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(148, 134, 134, 0.5);"></div>

  <div class="container position-relative d-flex flex-column justify-content-center align-items-center" style="min-height: 300px;">
    <h1 class="fw-bold">Visi dan Misi UKM PSHT Komisariat</h1>
    <h2 class="fw-bold">Universitas Lambung Mangkurat</h2>
  </div>
</header> 

<!-- BREADCRUMB -->
<nav aria-label="breadcrumb" class="bg-light py-2">
  <div class="container">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Visi dan Misi UKM PSHT Komisariat</li>
    </ol>
  </div>
</nav>

<!-- ISI PARAGRAF -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="mb-3">Visi dan Misi UKM PSHT Komisariat</h2>

    <?php if ($data): ?>
      <h4>Visi:</h4>
      <p><?= nl2br(htmlspecialchars($data['visi'])) ?></p>

      <h4>Misi:</h4>
      <p><?= nl2br(htmlspecialchars($data['misi'])) ?></p>
    <?php else: ?>
      <p><em>Data visi dan misi belum tersedia.</em></p>
    <?php endif; ?>
  </div>
</section>
</body>
</html>
<?php include 'footer.php'; ?>
