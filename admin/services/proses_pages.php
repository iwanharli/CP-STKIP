<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Pages</title>
  <!-- Favicon -->   
  <link href="../../img/logo-st.png" rel="shortcut icon"/>

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
$aksi   = $_GET['aksi'];
$id     = $_GET['id'];


if ($aksi == "edit_pages") {
    // $edit_nm          = $_POST['namaMenu'];
    $edit_id    = $_POST['isiMenuDetail'];

    $tanggal    = $_POST['tanggalDetail'];
    $newDate    = date("Y/m/d", strtotime($tanggal));
    
    define('KB', 1024);
    define('MB', 1048576);
    define('GB', 1073741824);
    define('TB', 1099511627776);

    $ekstensi_diperbolehkan     = array('jpg', 'png', 'jpeg');
    $nama                       = $_FILES['gambarDetail']['name'];
    $x                          = explode('.', $nama);
    $ekstensi                   = strtolower(end($x));
    $ukuran                     = $_FILES['gambarDetail']['size'];
    $file_tmp                   = $_FILES['gambarDetail']['tmp_name'];

    
    if(isset($nama) && empty($nama)){

        $koneksi->query("UPDATE menu_detail md JOIN menu m ON md.idMenuDetail = m.id_menuDetail SET md.isi_detail='$edit_id', md.tanggal_detail='$newDate' WHERE m.idMenu='$id'") or die(mysqli_error($koneksi));
        header("refresh:0;url=../pages.php");
        
    } else {
        
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 3000000) {
                move_uploaded_file($file_tmp, '../../img/blog/coverPages/' . $nama);

                $koneksi->query("UPDATE menu_detail md JOIN menu m ON md.idMenuDetail = m.id_menuDetail SET md.isi_detail='$edit_id', md.gambar_detail='$nama', md.tanggal_detail='$newDate' WHERE m.idMenu='$id'") or die(mysqli_error($koneksi));
                header("refresh:0;url=../pages.php");
            
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

?>





</body>