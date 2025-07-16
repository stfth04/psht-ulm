<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['log']) || $_SESSION['log'] !== 'login') {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome (optional) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- Menu Tengah -->
      <div class="mx-auto">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row gap-4">
          <li class="nav-item">
            <a class="nav-link fw-bold" href="manage.php">Manage Event</a>
          </li>
        </ul>
      </div>

      <div class="mx-auto">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row gap-4">
          <li class="nav-item">
            <a class="nav-link fw-bold" href="manage_dokumen.php">Manage Dokumen</a>
          </li>
        </ul>
      </div>


      <!-- Profil & Logout -->
      <div class="d-flex align-items-center text-white">
        <span class="me-3">Hi, <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Admin'; ?>!</span>
        <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
      </div>

    </div>
  </nav>
</body>
</html>
