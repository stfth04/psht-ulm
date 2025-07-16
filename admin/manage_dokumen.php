<?php
include 'sidebar.php';
include 'koneksi.php';

// Ambil data dokumentasi event
$dokumentasi_query = mysqli_query($koneksi, "SELECT * FROM galeri_organisasi WHERE kategori = 'dokumentasi' ORDER BY id DESC");

// Ambil data struktur organisasi (hanya 1 data)
$struktur_query = mysqli_query($koneksi, "SELECT * FROM galeri_organisasi WHERE kategori = 'struktur' LIMIT 1");
$struktur = mysqli_fetch_assoc($struktur_query);
?>

<div class="container mt-5">
    <h3 class="mb-4">Manajemen Dokumentasi Event</h3>

    <a href="tambah_dokumen.php" class="btn btn-primary mb-3">+ Tambah Gambar</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($dokumentasi_query)) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td>
                    <img src="uploads/<?= htmlspecialchars(basename($row['gambar'])) ?>" width="150" class="img-thumbnail">
                </td>
                <td><?= htmlspecialchars($row['kategori']) ?></td>
                <td>
                    <a href="edit_gambar.php?id=<?= $row['id'] ?>&kategori=dokumentasi" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus_gambar.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    <hr class="my-5">

    <h3 class="mb-4">Struktur Organisasi</h3>

    <?php if ($struktur): ?>
        <img src="uploads/<?= htmlspecialchars(basename($struktur['gambar'])) ?>" class="img-fluid mb-3" style="max-width: 400px;">
        <div>
            <a href="edit_gambar.php?id=<?= $struktur['id'] ?>&kategori=struktur" class="btn btn-warning">Ganti Gambar Struktur</a>
        </div>
    <?php else: ?>
        <div class="alert alert-warning">Belum ada gambar struktur organisasi.</div>
    <?php endif; ?>
</div>
