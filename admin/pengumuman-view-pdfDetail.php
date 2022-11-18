<?php
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:../auth/login.php");
} 

require "../koneksi.php";

$id = $_GET['id'];

$query = $koneksi->query("SELECT * FROM pengumuman WHERE idPengumuman='$id'") or die (mysql_error());
$data = mysqli_fetch_array($query);
  
?>


<!DOCTYPE html>
<html>
<head>
    <title>Pdf Read</title>
    <style>
          .pdfobject { height: 588px; width:600px; border: 1px solid #666;}
   </style>
   <script src="../_assets/plugins/PDFObject/pdfobject.min.js"></script>
</head>
<body>

<!-- Main content -->
<section class="content" style="padding-bottom: 30px;">
    <object data="services/file_pengumuman/<?= $data['file_pengumuman'] ?>" type="application/pdf" class="pdfobject">
        <iframe src="https://docs.google.com/viewer?url=services/file_pengumuman/<?= $data['file_pengumuman'] ?>&embedded=true"></iframe>
    </object>
</section>

</body>
</html>