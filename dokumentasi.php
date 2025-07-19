<?php
include 'header.php';
include 'koneksi.php';

// Ambil data gambar dari kategori 'dokumentasi'
$sql = "SELECT * FROM galeri_organisasi WHERE kategori = 'dokumentasi' ORDER BY created_at DESC";
$query = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dokumentasi Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- BREADCRUMB -->
<nav aria-label="breadcrumb" class="bg-light py-2">
  <div class="container">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dokumentasi Event UKM PSHT Komisariat</li>
    </ol>
  </div>
</nav>

<!-- FOTO EVENT -->
<!-- FOTO EVENT -->
<section class="py-5">
  <div class="container">
    <h2 class="mb-4 fw-bold">Dokumentasi Kegiatan UKM PSHT</h2>
    <div class="row g-4">
      <?php if (mysqli_num_rows($query) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
          <div class="col-md-4 col-sm-6">
            <div class="card border-0 shadow-sm h-100">
              <img src="admin/<?= htmlspecialchars($row['gambar']) ?>" class="card-img-top rounded" alt="Dokumentasi" style="height: 250px; object-fit: cover;">

            </div>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p class="text-center">Belum ada dokumentasi yang diunggah.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
