<?php
include 'sidebar.php';
include 'koneksi.php';

// Ambil data 
$sql = "SELECT * FROM tentang_kami LIMIT 1";
$query = mysqli_query($koneksi, $sql);

// Cek hasil query
if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}

$data = mysqli_fetch_assoc($query);


?>

<div class="container mt-4">

    <?php if ($data): ?>
        <h4>Profile</h4>
        <p><?= nl2br(htmlspecialchars($data['profil'])) ?></p>

        <h4>Visi</h4>
        <p><?= nl2br(htmlspecialchars($data['visi'])) ?></p>

        <h4>Misi</h4>
        <p><?= nl2br(htmlspecialchars($data['misi'])) ?></p>

        <a href="edit.php?id=<?= $data['id'] ?>&table=tentang_kami" class="btn btn-warning">Edit Tentang Kami</a>
    <?php else: ?>
        <div class="alert alert-warning">Data visi dan misi belum tersedia.</div>
    <?php endif; ?>
</div>
