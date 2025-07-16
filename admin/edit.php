<?php
include 'sidebar.php';
include 'koneksi.php';

// Ambil data visi dan misi
$sql = "SELECT * FROM tentang_kami LIMIT 1";
$query = mysqli_query($koneksi, $sql);

// Cek hasil query
if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}

$data = mysqli_fetch_assoc($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h4>Edit Data</h4>
        </div>
        <div class="card-body">
            <form action="proses_edit.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">

                <div class="mb-3">
                    <label for="profil">Profil:</label>
                    <input type="text" class="form-control" name="profil" value="<?= $data['profil'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="visi">Visi:</label>
                    <input type="text" class="form-control" name="visi" value="<?= $data['visi'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="misi">Misi:</label>
                    <input type="text" class="form-control" name="misi" value="<?= $data['misi'] ?>" required>
                </div>
<button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
<a href="manage.php" class="btn btn-secondary">Batal</a>
</body>
</html>
