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
require "../../koneksi.php";

if (isset($_POST['upload'])) {
    $judul      = $_POST['judulPengumuman'];
    $isi        = $_POST['isiPengumuman'];
    $status     = $_POST['statusPengumuman'];

    $tanggal    = $_POST['tanggalPengumuman'];
    $newDate    = date("Y/m/d", strtotime($tanggal));

    $ekstensi_diperbolehkan     = array('pdf');
    $nama                       = $_FILES['filePengumuman']['name'];
    $x                          = explode('.', $nama);
    $ekstensi                   = strtolower(end($x));
    $ukuran                     = $_FILES['filePengumuman']['size'];
    $file_tmp                   = $_FILES['filePengumuman']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 15000000) {
            move_uploaded_file($file_tmp, 'file_pengumuman/' . $nama);

            $koneksi->query("INSERT INTO pengumuman VALUES(NULL, '$judul', '$isi', '$newDate', '$nama', '$status')") or die(mysqli_error($koneksi));
            header("refresh:0;url=../pengumuman-view-post.php");
        }
    } else {
        echo "<center>
            <h1 style='padding-top:15%; padding-bottom:15%;'>
                <i class='fa fa-file-pdf-o' aria-hidden='true'></i><p>
                <font color='white'><b>SELAIN FORMAT (PDF) TIDAK DIPERBOLEHKAN!</b></font>  <p><p>
                <button onclick='history.back()' class='btn btn-info btn-block btn-flat'>
                <i class='fa fa-arrow-left'></i>&nbsp;&nbsp Klik Disini Untuk Kembali 
                </button>
            </h1>
        </center>";
    }

    die;
}

?>

</body>