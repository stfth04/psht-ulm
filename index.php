<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <style>
    .fade-in {
      opacity: 0;
      animation: fadeIn 2s ease-in-out forwards;
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <header class="fade-in" style="
    background-image: url('assets/img/header.jpg'); 
    background-size: cover;
    background-position: center;
    min-height: 500px;">
    <div class="container h-100 d-flex align-items-end justify-content-center text-white pb-5">
      <div class="text-center">
        <h1>Selamat Datang di UKM PSHT Komisariat</h1>
        <p>Universitas Lambung Mangkurat</p>
      </div>
    </div>
  </header>
</body>
</html>
<?php include 'footer.php'; 
?>
