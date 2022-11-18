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
  <title>Admin | Gallery</title>
	<!-- Favicon -->   
	<link href="../img/logo.ico" rel="shortcut icon"/>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../_assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Font Awesome 5-->
  <script src="https://kit.fontawesome.com/0161564ad7.js" crossorigin="anonymous"></script>
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="../_assets/plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../_assets/dist/css/adminlte.min.css">

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
            <a href="javascript:window.location.href=window.location.href" class="nav-link active">
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Posts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
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
                      <a href="berita-view-post.php" class="nav-link" id="link-small">
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
            <a href="galery.php" class="nav-link">
              <i class="nav-icon fa fa-file-image-o" style="color:#f2e12d;"></i>
              <p>
                Gallery
                <span class="right badge badge-warning">Coming Soon</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-folder" style="color:grey;"></i>
              <p>
                File
                <span class="right badge badge-warning">Coming Soon</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="recycle-bin.php" class="nav-link">
              <i class="far fa fa-trash nav-icon" aria-hidden="true" style="color:#f22d2d;"></i>
              <p>Recycle Bin</p>
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
            <h1 class="m-0">Gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=".">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Daftar Gambar</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php
                            require "../koneksi.php";
                            $query          = $koneksi->query("SELECT * FROM berita");
                            //set counter variable 
                            $i = 1;
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <div class="col-sm-2">
                            <a href="../img/blog/coverBerita/<?= $row['cover_berita']; ?>" data-toggle="lightbox" data-gallery="gallery">
                                <img src="../img/blog/coverBerita/<?= $row['cover_berita']; ?>" class="img-fluid mb-2"/>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                </div>
            </div>
            <!-- ./col -->
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- Bootstrap -->
<script src="../_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../_assets/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="../_assets/dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="../_assets/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../_assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</body>
</html>
