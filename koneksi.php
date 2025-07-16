<?php
$koneksi = mysqli_connect("localhost", "root", "", "organisasi");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
