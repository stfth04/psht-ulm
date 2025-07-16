<?php
include 'koneksi.php';

// Folder penyimpanan gambar
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Proses upload dokumentasi event (banyak gambar)
if (isset($_POST['aksi']) && $_POST['aksi'] === 'dokumentasi') {
    if (isset($_FILES['dokumentasi'])) {
        foreach ($_FILES['dokumentasi']['tmp_name'] as $key => $tmp_name) {
            $fileName = basename($_FILES['dokumentasi']['name'][$key]);
            $targetPath = $uploadDir . time() . '_' . $fileName;

            if (move_uploaded_file($tmp_name, $targetPath)) {
                $sql = "INSERT INTO galeri_organisasi (gambar, kategori) VALUES ('$targetPath', 'dokumentasi')";
                mysqli_query($koneksi, $sql);
            }
        }
    }
}

// Proses upload atau ganti gambar struktur organisasi (hanya 1 gambar)
if (isset($_POST['aksi_struktur']) && $_POST['aksi_struktur'] === 'struktur') {
    if (!empty($_FILES['struktur']['tmp_name'])) {
        $fileName = basename($_FILES['struktur']['name']);
        $targetPath = $uploadDir . time() . '_' . $fileName;

        if (move_uploaded_file($_FILES['struktur']['tmp_name'], $targetPath)) {
            // Hapus gambar struktur lama
            $cek = mysqli_query($koneksi, "SELECT * FROM galeri_organisasi WHERE kategori='struktur' LIMIT 1");
            if ($old = mysqli_fetch_assoc($cek)) {
                if (file_exists($old['gambar'])) {
                    unlink($old['gambar']);
                }
                // Update struktur lama
                mysqli_query($koneksi, "UPDATE galeri_organisasi SET gambar='$targetPath' WHERE id={$old['id']}");
            } else {
                // Insert baru
                mysqli_query($koneksi, "INSERT INTO galeri_organisasi (gambar, kategori) VALUES ('$targetPath', 'struktur')");
            }
        }
    }
}

header('Location: manage_dokumen.php');
exit;
