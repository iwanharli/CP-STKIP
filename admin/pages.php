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
  <title>Admin | Pages</title>
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

  <style>
    #link-small{
      margin-left: 15px;
      width: 93.5%;
    }

    #aPages{
      color: red;
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
        <a href="pages.php" class="nav-link active">
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
            <h1 class="m-0">Pages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=".">Home</a></li>
              <li class="breadcrumb-item active">Pages</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background-color: #183153; color: #fff;">
                <h3 class="card-title">Heading Menu</h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body p-0">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <td class="border-0">Home</td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>
                        Profil
                        <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                      </td>
                    </tr>
                      <tr class="expandable-body">
                        <td>
                          <div class="p-0">
                            <table class="table table-hover">
                              <tbody>
                                <tr>
                                  <td>
                                    <a href="sejarah-update.php" id="aPages">Sejarah</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="visiMisi-update.php" id="aPages">Visi Misi</a>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="strukturOrganisasi-update.php" id="aPages">Struktur Organisasi</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="tujuan-update.php" id="aPages">Tujuan</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>
                    <tr>
                      <td class="border-1">Pendaftaran Mahasiswa Baru</td>
                    </tr>
                    <tr>
                      <td class="border-1">Prodi Bahasa & Sastra</td>
                    </tr>
                    <tr>
                      <td class="border-1">Jurnal</td>
                    </tr>
                    <tr>
                      <td class="border-1">Mahasiswa & Alumni</td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>
                        Informasi
                        <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                      </td>
                    </tr>
                      <tr class="expandable-body">
                        <td>
                          <div class="p-0">
                            <table class="table table-hover">
                              <tbody>
                                <tr>
                                  <td>Berita</td>
                                </tr>
                                <tr>
                                  <td>Pengumuman</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
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
<!-- Bootstrap 4 -->
<script src="../_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../_assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../_assets/dist/js/demo.js"></script> -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
