<?php
include 'sidebar.php';
include 'koneksi.php';

// Ambil semua dokumentasi
$dokumentasi = mysqli_query($koneksi, "SELECT * FROM galeri_organisasi WHERE kategori = 'dokumentasi' ORDER BY created_at DESC");

// Ambil struktur organisasi (1 gambar)
$struktur = mysqli_query($koneksi, "SELECT * FROM galeri_organisasi WHERE kategori = 'struktur' LIMIT 1");
$dataStruktur = mysqli_fetch_assoc($struktur);
?>

<div class="container mt-4">
  <h3 class="mb-4">Manajemen Dokumentasi Event</h3>

  <a href="tambah_dokumentasi.php" class="btn btn-primary mb-3">Tambah Dokumentasi</a>

  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Gambar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($dokumentasi)) : ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><img src="<?= htmlspecialchars($row['gambar']) ?>" width="150"></td>
          <td>
            <a href="edit_gambar.php?id=<?= $row['id'] ?>&kategori=dokumentasi" class="btn btn-warning btn-sm">Ganti</a>
            <a href="hapus_gambar.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus gambar ini?')" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

  <hr class="my-5">

  <h3 class="mb-4">Struktur Organisasi</h3>

  <?php if ($dataStruktur): ?>
    <img src="<?= htmlspecialchars($dataStruktur['gambar']) ?>" width="300" class="mb-3"><br>
    <a href="edit_gambar.php?id=<?= $dataStruktur['id'] ?>&kategori=struktur" class="btn btn-warning">Ganti Gambar</a>
  <?php else: ?>
    <form action="upload_dokumen.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="kategori" value="struktur">
      <div class="mb-3">
        <label class="form-label">Upload Struktur Organisasi</label>
        <input type="file" name="gambar" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  <?php endif; ?>
</div>
