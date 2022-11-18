<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Berita</title>
  <!-- Favicon -->   
  <link href="../../img/logo.ico" rel="shortcut icon"/>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/0161564ad7.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../_assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color:#b52a2a;">

<?php
error_reporting(0);
require "../../koneksi.php";
$aksi   = $_GET['aksi'];
$id     = $_GET['id'];

// BERITA
if ($aksi == "restore_berita") {
    $id = $_POST['id'];

    $sql =  $koneksi->query("UPDATE berita SET status_berita='0' WHERE idBerita='$id'") or die(mysqli_error($koneksi));
}

if ($aksi == "hapus_berita") {
    $id = $_POST['id'];

    $sql =  $koneksi->query("DELETE FROM berita WHERE idBerita='$id'") or die(mysqli_error($koneksi));
}


// PENGUMUMAN
if ($aksi == "restore_pengumuman") {
    $id = $_POST['id'];

    $sql =  $koneksi->query("UPDATE pengumuman SET status_pengumuman='0' WHERE idPengumuman='$id'") or die(mysqli_error($koneksi));
}

if ($aksi == "hapus_pengumuman") {
    $id = $_POST['id'];

    $sql =  $koneksi->query("DELETE FROM pengumuman WHERE idPengumuman='$id'") or die(mysqli_error($koneksi));
}

?>

</body>