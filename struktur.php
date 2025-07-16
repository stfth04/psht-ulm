<?php
include 'header.php';
include 'koneksi.php';

// Ambil gambar struktur dari database
$sql = "SELECT * FROM galeri_organisasi WHERE kategori = 'struktur' LIMIT 1";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Struktur Organisasi</title>
</head>
<body>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="bg-light py-2">
  <div class="container">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
    </ol>
  </div>
</nav>

<!-- Struktur Organisasi -->
<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Struktur Organisasi UKM PSHT</h2>
    <?php if ($data): ?>
      <div class="text-center">
        <img src="admin/<?= htmlspecialchars($data['gambar']) ?>" class="img-fluid rounded shadow-sm" alt="Struktur Organisasi">
      </div>
    <?php else: ?>
      <div class="alert alert-warning">Belum ada data struktur organisasi yang tersedia.</div>
    <?php endif; ?>
  </div>
</section>

</body>
</html>

<?php include 'footer.php'; ?>
