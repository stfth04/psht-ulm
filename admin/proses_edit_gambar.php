<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) $_POST['id'];
    $kategori = $_POST['kategori'];

    // Cek jika file baru diupload
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {
        $gambar_name = time() . '_' . basename($_FILES['gambar']['name']);
        $target_dir = 'uploads/';
        $target_file = $target_dir . $gambar_name;

        // Full path absolut untuk move_uploaded_file
        $absolute_path = __DIR__ . '/' . $target_file;

        // Coba pindahkan file ke uploads/
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $absolute_path)) {
            // Update path di database dengan RELATIF terhadap folder `admin/`
            $sql = "UPDATE galeri_organisasi SET gambar = '$target_file' WHERE id = $id";
            $query = mysqli_query($koneksi, $sql);

            if ($query) {
                header("Location: manage_dokumen.php?status=sukses");
                exit;
            } else {
                echo "Gagal update database: " . mysqli_error($koneksi);
            }
        } else {
            echo "Gagal upload file ke $absolute_path";
        }
    } else {
        echo "Tidak ada file gambar yang diupload.";
    }
} else {
    echo "Akses ditolak!";
}
?>
