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
          .pdfobject { height: 700px; width:600px; border: 1px solid #666;}
   </style>
   <script src="../_assets/plugins/PDFObject/pdfobject.min.js"></script>
</head>
<body>

<!-- Main content -->
<section class="content" style="padding-bottom: 30px;">
    
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary" style="overflow-x:auto;">
                <div class="card-header">
                    <h3 class="card-title">DETAIL PENGUMUMAN</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Judul</th>
                            <td><?= $data['judul_pengumuman'] ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td><?= date("d-m-Y", strtotime($data['tanggal_pengumuman'])); ?></td>
                        </tr>
                        <tr>
                            <th>Isi</th>
                            <td align="justify"><?= $data['isi_pengumuman'] ?></td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>

</body>
</html>