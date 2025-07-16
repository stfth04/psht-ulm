<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id     = (int) $_POST['id'];
    $profil   = $_POST['profil'];
    $visi    = $_POST['visi'];
    $misi  = $_POST['misi'];

    $sql = "UPDATE tentang_kami 
            SET profil='$profil', visi='$visi', misi='$misi' 
            WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: manage.php?status=edit_sukses');
        exit;
    } else {
        die("Gagal mengupdate data: " . mysqli_error($koneksi));
    }
} else {
    die("Akses dilarang.");
}
