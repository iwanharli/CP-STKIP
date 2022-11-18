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

    if (isset($_POST['tambah_pengumuman'])) {
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

    if ($aksi == "edit_pengumuman") {
        $edit_jp    = $_POST['judulPengumuman'];
        $edit_ip    = $_POST['isiPengumuman'];
        $edit_sp    = $_POST['statusPengumuman'];
    
        $tanggal    = $_POST['tanggalPengumuman'];
        $newDate    = date("Y/m/d", strtotime($tanggal));
        
        define('KB', 1024);
        define('MB', 1048576);
        define('GB', 1073741824);
        define('TB', 1099511627776);
    
        $ekstensi_diperbolehkan     = array('pdf');
        $nama                       = $_FILES['filePengumuman']['name'];
        $x                          = explode('.', $nama);
        $ekstensi                   = strtolower(end($x));
        $ukuran                     = $_FILES['filePengumuman']['size'];
        $file_tmp                   = $_FILES['filePengumuman']['tmp_name'];

        if(isset($nama) && empty($nama)){

            $koneksi->query("UPDATE pengumuman SET judul_pengumuman='$edit_jp', isi_pengumuman='$edit_ip', tanggal_pengumuman='$newDate', status_pengumuman='$edit_sp' WHERE idPengumuman='$id'") or die(mysqli_error($koneksi));
            header("refresh:0;url=../pengumuman-view-post.php");
            
        } else {
            
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                if ($ukuran < 15000000) {
                    move_uploaded_file($file_tmp, 'file_pengumuman/' . $nama);
                    
                    $koneksi->query("UPDATE pengumuman SET judul_pengumuman='$edit_jp', isi_pengumuman='$edit_ip', tanggal_pengumuman='$newDate', file_pengumuman='$nama', status_pengumuman='$edit_sp' WHERE idPengumuman='$id'") or die(mysqli_error($koneksi));
                    header("refresh:0;url=../pengumuman-view-post.php");
                
                }else{
        
                    echo "<center>
                    <h1 style='padding-top:15%; padding-bottom:15%;'>
                        <font color='white'><b>UKURAN FILE MAKSIMAL (15 MB)</b></font>  <p><p>
                        <button onclick='history.back()' class='btn btn-info btn-block btn-flat'>
                        <i class='fa fa-arrow-left'></i>&nbsp;&nbsp Klik Disini Untuk Kembali 
                        </button>
                    </h1>
                    </center>";
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
            
        }
    }

    if ($aksi == "bin_pengumuman") {
        $id = $_POST['id'];
    
        $sql =  $koneksi->query("UPDATE pengumuman SET status_pengumuman='2' WHERE idPengumuman='$id'") or die(mysqli_error($koneksi));
    }

?>

</body>