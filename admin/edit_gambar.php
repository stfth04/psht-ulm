<?php
include 'koneksi.php';
include 'sidebar.php'; // Jika pakai sidebar di layout admin

if (isset($_GET['id']) && isset($_GET['kategori'])) {
    $id = (int) $_GET['id'];
    $kategori = $_GET['kategori'];

    $sql = "SELECT * FROM galeri_organisasi WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($query);

    if (!$data) {
        echo "<div class='alert alert-danger'>Data tidak ditemukan.</div>";
        exit;
    }
} else {
    echo "<div class='alert alert-danger'>ID atau kategori tidak valid.</div>";
    exit;
}
?>

<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0">Edit Gambar - <?= ucfirst($kategori) ?></h5>
    </div>
    <div class="card-body">
      <form action="proses_edit_gambar.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="hidden" name="kategori" value="<?= $data['kategori'] ?>">

        <div class="mb-3">
          <label class="form-label">Gambar Saat Ini:</label><br>
          <img src="<?= htmlspecialchars($data['gambar']) ?>" alt="Gambar" width="200" class="img-thumbnail">
        </div>

        <div class="mb-3">
          <label class="form-label">Ganti Gambar:</label>
          <input type="file" name="gambar" class="form-control" required>
        </div>

        <button type="submit" name="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="manage_dokumen.php" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>
