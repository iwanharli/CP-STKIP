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

    $query = $koneksi->query("SELECT * FROM berita WHERE idBerita='$id'") or die (mysql_error());
    $data = mysqli_fetch_array($query);
?>
    <div class="card-body p-0">
        <table class="table table-striped">
            <tr>
                <th colspan=2 style="text-align: center;"> 
                    <img width=50% height=50% src="../img/blog/coverBerita/<?= $data['cover_berita'] ?>"> 
                </th>
            </tr>
            <tr>
                <th style="width: 150px">Judul</th>
                <td><?= $data['judul_berita'] ?></td>
            </tr>
            <tr>
                <th style="width: 150px">Penulis</th>
                <td><?= $data['penulis_berita'] ?></td>
            </tr>
            <tr>
                <th style="width: 150px">Tanggal</th>
                <td><?= date("d-m-Y", strtotime($data['tanggal_berita'])); ?></td>
            </tr>
            <tr>
                <th style="width: 150px">Isi Berita</th>
                <td><?= $data['isi_berita'] ?></td>
            </tr>
            <tr>
                <th style="width: 150px">Kategori</th>
                <td><?= $data['kategori_berita'] ?></td>
            </tr>
            <tr>
                <th style="width: 150px">Tags</th>
                <td><?= $data['tags_berita'] ?></td>
            </tr>
        </table>
    </div>
    <!-- /.card-body -->