<?php
session_start();
include 'koneksi.php'; 

if (isset($_SESSION['log']) && $_SESSION['log'] === 'login') {
    header('location: dashboard.php');
    exit();
}

if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($koneksi, $_POST['username']);
    $pass = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    $queryuser = mysqli_query($koneksi, "SELECT * FROM login WHERE username= '$user'");
    $cariuser = mysqli_fetch_assoc($queryuser);
    
    if ($cariuser && password_verify($pass, $cariuser['password'])) {
        $_SESSION['userid'] = $cariuser['id'];
        $_SESSION['username'] = $cariuser['username'];
        $_SESSION['log'] = 'login';
        
        echo '<script>alert("Anda Berhasil Login sebagai ' . $cariuser['username'] . '"); window.location="dashboard.php";</script>';
    } else {
        echo '<script>alert("Data yang anda masukan salah!!"); history.go(-1);</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Admin</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa; /* abu terang */
    }
    .login-box {
      background: #000; /* hitam */
      color: #fff; /* putih */
      padding: 3rem;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }
    .form-control {
      background: transparent;
      border: none;
      border-bottom: 1px solid #fff;
      border-radius: 0;
      color: #fff;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #fff;
    }
    .icon-input {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #fff;
    }
    .form-group {
      position: relative;
    }
    .form-group input {
      padding-left: 40px;
    }
    .btn-custom {
      background: #fff;
      color: #000;
      border: none;
    }
    .btn-custom:hover {
      background: #e9ecef;
      color: #000;
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">
  <div class="login-box text-center">
    <h2 class="mb-4">Login Admin</h2>
    <form method="POST">
      <div class="mb-3 form-group">
        <i class="fas fa-user icon-input"></i>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
      </div>
      <div class="mb-4 form-group">
        <i class="fas fa-lock icon-input"></i>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" name="login" class="btn btn-custom w-100">Sign In</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
