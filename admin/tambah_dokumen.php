<?php
include 'sidebar.php';
?>

<div class="container mt-4">
    <h3>Tambah Dokumentasi dan Struktur Organisasi</h3>
    <form action="proses_gambar.php" method="POST" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="dokumentasi[]" class="form-label">Upload Dokumentasi Event (boleh lebih dari satu)</label>
            <input type="file" class="form-control" name="dokumentasi[]" multiple accept="image/*">
            <input type="hidden" name="aksi" value="dokumentasi">
        </div>

        <div class="mb-4">
            <label for="struktur" class="form-label">Upload Struktur Organisasi (hanya 1 gambar)</label>
            <input type="file" class="form-control" name="struktur" accept="image/*">
            <input type="hidden" name="aksi_struktur" value="struktur">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="manage_dokumen.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
