<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:../auth/login.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Berita</title>
  <!-- Favicon -->   
  <link href="../img/logo.ico" rel="shortcut icon"/>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Font Awesome 5-->
  <script src="https://kit.fontawesome.com/0161564ad7.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../_assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../_assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../_assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../_assets/plugins/summernote/summernote-bs4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../_assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../_assets/plugins/toastr/toastr.min.css">

  <style>
    #link-small{
      margin-left: 15px;
      width: 93.5%;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../_assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../auth/logout.php" class="nav-link btn btn-block bg-gradient-danger">
          Log out <i class="fa fa-sign-out" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../img/logo-st.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">CORE</li>
      <li class="nav-item menu-open">
        <a href="index.php" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <span class="right badge badge-warning">Coming Soon</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="registered-users.php" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Users
            <span class="right badge badge-warning">Coming Soon</span>
          </p>
        </a>
      </li>

      <li class="nav-header">MANAGEMENT</li>

      <li class="nav-item">
        <a href="pages.php" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>Pages</p>
        </a>
      </li>
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Posts
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
				  <li class="nav-item menu-open">
				    <a href="#" class="nav-link active">
				      	<i class="far fa-circle nav-icon"></i>
				      	<p>Menu Berita</p>
				    	<i class="fas fa-angle-left right"></i>
				    </a>
	            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="berita-add-post.php" class="nav-link" id="link-small">
                    <i class="far fa fa-plus nav-icon" aria-hidden="true" style="color:#13cc13;"></i>
                    <p>Add Post</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="berita-view-post.php" class="nav-link active" id="link-small">
                    <i class="far fa fa-eye nav-icon" aria-hidden="true" style="color:#dddb1e;"></i>
                    <p>View Post</p>
                  </a>
                </li>
	            </ul>
				  </li>
				</ul>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
				    <a href="javascript:void();" class="nav-link">
				      	<i class="far fa-circle nav-icon"></i>
				      	<p>Menu Pengumuman</p>
				    	<i class="fas fa-angle-left right"></i>
				    </a>
              <ul class="nav nav-treeview">
    						<li class="nav-item">
    							<a href="pengumuman-add-post.php" class="nav-link" id="link-small">
                    <i class="far fa fa-plus nav-icon" aria-hidden="true" style="color:#13cc13;"></i>
    							  <p>Add Post</p>
    							</a>
    						</li>
    						<li class="nav-item">
    							<a href="pengumuman-view-post.php" class="nav-link" id="link-small">
                    <i class="far fa fa-eye nav-icon" aria-hidden="true" style="color:#dddb1e;"></i>
    							  <p>View Post</p>
    							</a>
    						</li>
              </ul>
				  </li>
				</ul>
      </li>

      <li class="nav-header">DATABASE</li>

      <li class="nav-item">
        <a href="recycle-bin.php" class="nav-link">
          <i class="far fa fa-trash nav-icon" aria-hidden="true" style="color:#f22d2d;"></i>
          <p>Recycle Bin</p>
        </a>
      </li>
      <li class="nav-item">
      <a href="pages/gallery.html" class="nav-link">
        <i class="nav-icon far fa-image"></i>
        <p>
          Gallery
          <span class="right badge badge-warning">Coming Soon</span>
        </p>
      </a>
      </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">View Post / Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=".">Home</a></li>
              <li class="breadcrumb-item active">Berita</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header" style="background-color: #183153; color: #fff;">
          <h3 class="card-title">Daftar Berita</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 15%">
                          Cover
                      </th>
                      <th style="width: 35%">
                          Judul
                      </th>
                      <th>
                          Kategori
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php
                  require "../koneksi.php";
                  $query          = $koneksi->query("SELECT * FROM berita WHERE NOT status_berita=2 ORDER BY idBerita DESC");
                  //set counter variable 
                  $i = 1;
                  while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                      <td>
                          <?= $i++; ?>
                      </td>
                      <td>
                        <img height=70 width=150 src="../img/blog/coverBerita/<?= $row['cover_berita'];?>" >
                      </td>
                      <td> 
                          <button type="button" class="btn btn-primary btn-xs detailBerita" data-toggle="modal" data-target="#myModal2" id="<?= $row['idBerita'] ?>">
                            <i class="fas fa-search"></i>
                          </button> &nbsp;&nbsp;
                          <a>
                              <?= $row['judul_berita']; ?>
                          </a>
                          <br/>
                          <small>
                              Created <?= date("d-m-Y", strtotime($row['tanggal_berita'])); ?>
                          </small>
                      </td>
                      <td class="project_progress">
                        <a>
                            <?= $row['kategori_berita']; ?>
                        </a>
                        <br/>
                        <small>
                            <i class="fas fa-tags"></i> <?= $row['tags_berita']; ?>
                        </small>
                      </td>
                      <td class="project-state">
                          <?php
                            if($row['status_berita']==1){
                              echo "<span class='badge badge-success'>Posted</span>";
                            }else{
                              echo "<span class='badge badge-warning'>Draft</span>";
                            }
                          ?>
                      </td>
                      <td class="project-actions text-right">

                          <?php
                            echo "
                                  <a href=berita-update.php?id=" . $row['idBerita'] . " class='ubah btn btn-info btn-sm' id=" . $row['idBerita'] . ">
                                      <i class='fas fa-pencil-alt'></i>
                                      Edit
                                  </a>
                                  <a href='berita-view-post.php' class='hapus btn btn-danger btn-sm' id=" . $row['idBerita'] . " data-toggle='tooltip' title='Hapus'>
                                      <i class='fas fa-trash'></i>
                                      Delete
                                  </a>
                                  ";
                          ?>

                      </td>
                  </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Berita</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="isimodal2">
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://stkipmuhlmj.ac.id">STKIPMUHLMJ</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../_assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../_assets/dist/js/demo.js"></script> -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- SweetAlert2 -->
<script src="../_assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $(".detailBerita").click(function(){
        var id = $(this).attr('id');
        $("#kaki_modal2").hide();
        $("#isimodal2").load("berita-view-postDetail.php?id="+id);
    });

    $(".hapus").click(function() {
        var id = $(this).attr('id');
        if (confirm("Anda yakin ingin menghapus ?")) {
          $.ajax({
            type: 'POST',
            url: 'services/proses_berita.php?aksi=bin_berita',
            data: {id: id},
            success : function(){
              alert("Data Berhasil Dihapus");
                $('#berita').click();
            }
          });
        }
    });
    
  });

  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });
</script>
</body>
</html>

