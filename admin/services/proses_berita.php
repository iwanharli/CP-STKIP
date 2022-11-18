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


if (isset($_POST['tambah_berita'])) {

    $judul      = $_POST['judulBerita'];
    $isi        = $_POST['isiBerita'];
    $status     = $_POST['statusBerita'];
    $penulis    = $_POST['penulisBerita'];
    $kategori   = $_POST['kategoriBerita'];
    $tags       = $_POST['tagsBerita'];
    
    $tanggal    = $_POST['tanggalBerita'];
    $newDate    = date("Y/m/d", strtotime($tanggal));

    $ekstensi_diperbolehkan     = array('jpg', 'png', 'jpeg');
    $nama                       = $_FILES['coverBerita']['name'];
    $x                          = explode('.', $nama);
    $ekstensi                   = strtolower(end($x));
    $ukuran                     = $_FILES['coverBerita']['size'];
    $file_tmp                   = $_FILES['coverBerita']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 3000000) {
            move_uploaded_file($file_tmp, '../../img/blog/coverBerita/' . $nama);

            $koneksi->query("INSERT INTO berita VALUES(NULL, '$judul', '$newDate', '$penulis', '$kategori', '$tags', '$isi', '$status', '$nama', '0')") or die(mysqli_error($koneksi));
            header("refresh:0;url=../berita-view-post.php");

        }else{
            echo "<center><h1 style='background-color:#b52a2a; font-color:white; padding-top:20%; padding-bottom:20%;'>UKURAN FILE TERLALU BESAR! <p>Maksimal (3 MB)
            <p>Compress disini : <a href='https://compressjpeg.com/id/'> COMPRESS GAMBAR </a>
            </h1></center>
            ";
            header("refresh:5;url=../berita-add-post.php");
        }

    } else {
        echo "<center><h1 style='background-color:#b52a2a; font-color:white; padding-top:20%; padding-bottom:20%;'>EKSTENSI SELAIN (JPG,PNG,JPEG) TIDAK DIPERBOLEHKAN!</h1></center>";
        header("refresh:3;url=../berita-add-post.php");
    }

    die;
}

if ($aksi == "edit_berita") {
    $edit_jb          = $_POST['judulBerita'];
    $edit_ib          = $_POST['isiBerita'];
    $edit_sb          = $_POST['statusBerita'];
    $edit_pb          = $_POST['penulisBerita'];
    $edit_kb          = $_POST['kategoriBerita'];
    $edit_tb          = $_POST['tagsBerita'];

    $tanggal    = $_POST['tanggalBerita'];
    $newDate    = date("Y/m/d", strtotime($tanggal));
    
    define('KB', 1024);
    define('MB', 1048576);
    define('GB', 1073741824);
    define('TB', 1099511627776);

    $ekstensi_diperbolehkan     = array('jpg', 'png', 'jpeg');
    $nama                       = $_FILES['coverBerita']['name'];
    $x                          = explode('.', $nama);
    $ekstensi                   = strtolower(end($x));
    $ukuran                     = $_FILES['coverBerita']['size'];
    $file_tmp                   = $_FILES['coverBerita']['tmp_name'];

    
    if(isset($nama) && empty($nama)){

        $koneksi->query("UPDATE berita SET judul_berita='$edit_jb', tanggal_berita='$newDate', penulis_berita='$edit_pb', kategori_berita='$edit_kb', tags_berita='$edit_tb', isi_berita='$edit_ib', status_berita='$edit_sb' WHERE idBerita='$id'") or die(mysqli_error($koneksi));
        header("refresh:0;url=../berita-view-post.php");
        
    } else {
        
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 3000000) {
                move_uploaded_file($file_tmp, '../../img/blog/coverBerita/' . $nama);

                $koneksi->query("UPDATE berita SET judul_berita='$edit_jb', tanggal_berita='$newDate', penulis_berita='$edit_pb', kategori_berita='$edit_kb', tags_berita='$edit_tb', isi_berita='$edit_ib', status_berita='$edit_sb', cover_berita='$nama', id_komentar='0' WHERE idBerita='$id'") or die(mysqli_error($koneksi));
                header("refresh:0;url=../berita-view-post.php");
            
            }else{
    
                echo "<center>
                <h1 style='padding-top:15%; padding-bottom:15%;'>
                    <a href='https://compressjpeg.com/id/' class='btn-sm btn-warning btn-flat'> COMPRESS GAMBAR </a><p>
                    <font color='white'><b>UKURAN FILE MAKSIMAL (3 MB)</b></font>  <p><p>
                    <button onclick='history.back()' class='btn btn-info btn-block btn-flat'>
                    <i class='fa fa-arrow-left'></i>&nbsp;&nbsp Klik Disini Untuk Kembali 
                    </button>
                </h1>
                </center>";
            }
    
        }else{
            echo "<center>
            <h1 style='padding-top:15%; padding-bottom:15%;'>
                <i class='fa fa-file-image-o' aria-hidden='true'></i><p>
                <font color='white'><b>EKSTENSI SELAIN (JPG,PNG,JPEG) TIDAK DIPERBOLEHKAN!</b></font>  <p><p>
                <button onclick='history.back()' class='btn btn-info btn-block btn-flat'>
                <i class='fa fa-arrow-left'></i>&nbsp;&nbsp Klik Disini Untuk Kembali 
                </button>
            </h1>
            </center>";
        }
        
    }

}

if ($aksi == "bin_berita") {
    $id = $_POST['id'];

    $sql =  $koneksi->query("UPDATE berita SET status_berita='2' WHERE idBerita='$id'") or die(mysqli_error($koneksi));
}

?>

</body>