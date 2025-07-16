<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "organisasi";

$koneksi = mysqli_connect($host, $user, $pass, $database);
if (!$koneksi) {
  die("Connection Failed:" . mysqli_connect_error());
}
?>