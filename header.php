<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- jQuery library -->
    <script src="assets/js/jquery.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
      <!-- Logo dan Judul -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="assets/img/logo.png" alt="PMI Logo" height="80" class="me-2">
        <div class="d-flex flex-column lh-1">
          <strong>UKM PSHT Komisariat</strong>
          <span>Universitas Lambung Mangkurat</span>
        </div>
      </a>

      <!-- Toggle button untuk mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tentang Kami</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile.php">Profil</a></li>
              <li><a class="dropdown-item" href="visi.php">Visi dan Misi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Informasi</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="dokumentasi.php">Dokumentasi Event</a></li>
              <li><a class="dropdown-item" href="struktur.php">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Admin</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="admin/login.php">Login Admin</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

