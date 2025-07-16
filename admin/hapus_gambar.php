<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    // Ambil data gambar berdasarkan ID
    $sql = "SELECT * FROM galeri_organisasi WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        $gambar_path = 'uploads/' . basename($data['gambar']);

        // Hapus file dari folder uploads jika ada
        if (file_exists($gambar_path)) {
            unlink($gambar_path);
        }

        // Hapus data dari database
        $delete = mysqli_query($koneksi, "DELETE FROM galeri_organisasi WHERE id = $id");

        if ($delete) {
            header("Location: manage_dokumen.php?status=sukses");
            exit;
        } else {
            echo "Gagal menghapus data dari database.";
        }
    } else {
        echo "Data gambar tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
