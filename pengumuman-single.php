<?php
include('koneksi.php');
$id       = $_GET['id'];

$pengumuman    = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE idPengumuman='$id'");
$row        = mysqli_fetch_array($pengumuman);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>STKIP MUHAMMADIYAH LUMAJANG</title>
	<meta charset="UTF-8">
	<meta name="description" content="STKIP MUHAMMADIYAH LUMAJANG">
	<meta name="keywords" content="stkip, muhammadiyah, lumajang">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/logo.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	
  	<script src="https://kit.fontawesome.com/0161564ad7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="_assets/_landing-page/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/themify-icons.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/magnific-popup.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/animate.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/owl.carousel.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		@media all and (min-width: 992px) {
			.navbar .nav-item .dropdown-menu{ display: none; }
			/* .navbar .nav-item:hover .nav-link{   } */
			.navbar .nav-item:hover .dropdown-menu{ display: block; background-color: #020031;}
			.nabvar .nav-item .dropdown-menu{ margin-top:0; }
		}
	</style>
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- header section -->
    <header class="header-section">
        <div class="container">
            <!-- logo -->
            <a href="index.php" class="site-logo"><img src="img/logo2.png" width=60% height=140% style="margin-top: -20px;"></a>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-info">
                <div class="hf-item">
                    <i class="fa fa-clock-o"></i>
                    <p><span>Jam Kerja:</span><font size=2px>Senin-Jumat: 08 AM - 06 PM</p></font>
                </div>
                <div class="hf-item">
                    <i class="fa fa-map-marker"></i>
                    <p><span>Alamat:</span><font size=2px>Jl. Brantas No.7, Jogoyudan, Kab. Lumajang</font>
                </div>
            </div>
        </div>
    </header>

    <nav class="nav-section navbar navbar-expand-lg" style="padding:0%;">
        <div class="container">
            <!-- <div class="nav-right">
                <a href=""><i class="fa fa-search"></i></a>
                <a href=""><i class="fa fa-shopping-cart"></i></a>
            </div> -->
            <div class="collapse navbar-collapse" id="main_nav">
            <ul class="main-menu">
                <li><a href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Profil</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a class="dropdown-item" href="visi-misi.php">Visi misi</a></li>
                        <li><a class="dropdown-item" href="struktur-organisasi.php">Struktur Organisasi&emsp;&ensp;</a></li>
                        <li><a class="dropdown-item" href="tujuan.php">Tujuan</a></li>
                    </ul>
                </li>
                <li><a href="pmb.php">Pendaftaran Mahasiswa Baru</a></li>
                <li><a href="prodi-bahasa-dan-sastra.php">Prodi Bahasa & Sastra</a></li>
                <li><a href="https://jurnal.stkipmuhlmj.ac.id/">Jurnal</a></li>
                <li><a href="mahasiswa-dan-alumni.php">Mahasiswa & Alumni</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Informasi</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a class="dropdown-item" href="berita.php">Berita</a></li>
                        <li><a class="dropdown-item" href="pengumuman.php">Pengumuman</a></li>
                    </ul>
                </li>
                
                <!-- End Item With Sub -->
                <li style="display: none;">
                    <a href="auth/login.php" accesskey="c">login</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- Header section end -->


    <!-- Breadcrumb section -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="." class="btn btn-light" style="color: #f6783a; font-weight: bold;"><i class="fa fa-home"></i>&nbsp;Home</a>
            <i class="fa fa-angle-right"></i>
            <a href="javascript:history.back()" style="color: #f6783a;">Pengumuman</a>
            <i class="fa fa-angle-right"></i>
            <span><?= $row['judul_pengumuman'] ?></span>
        </div>
    </div>
    <!-- Breadcrumb section end -->


    <!-- Blog page section  -->
    <section class="blog-page-section spad pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="margin-left: 200px;">
                    <div class="post-item post-details">
                        <div class="post-content">
                            <h3><a href="javascript:void(0)"><?= $row['judul_pengumuman'] ?></a></h3>
                            <div class="post-meta">
                                <span><i class="fa fa-calendar-o"></i> <?= $row['tanggal_pengumuman'] ?></span>
                                <span><i class="fa fa-user"></i> Admin</span>
                            </div>
                            <div style="text-align: justify;">
                                <?= $row['isi_pengumuman'] ?>
                            </div>
                            <p></p>
                            <hr>
                                Unduh File 
                                <a class="detailPDF" href="#" id="<?= $row['idPengumuman'] ?>" data-toggle="modal" data-target="#myModal3"><?= $row['file_pengumuman'] ?></a>
                            <hr>
                            <div class="tag"><i class="fa fa-tag"></i> EDUCATION, MARKETING</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <center>
        <div class="modal fade" id="myModal3">
            <div class="modal-dialog modal-md">
            <div class="modal-content" style="background-color:#fff0; box-shadow: 0 0rem 0rem #00000000; border: 0px solid #00000000;">
                <div class="modal-body" id="isimodal3" style="padding:0px;">
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div></center>
        <!-- /.modal -->
    </section>
    <!-- Blog page section end -->


    <!-- Newsletter section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-7">
                    <div class="section-title mb-md-0">
                    <h3>NEWSLETTER</h3>
                    <p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
                </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <form class="newsletter">
                        <input type="text" placeholder="Enter your email">
                        <button class="site-btn">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section end --> 


    <!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="img/logo2.png" alt="">
						<p>orem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</p>
						<div class="social pt-1">
							<a href=""><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-google-plus-square"></i></a>
							<a href=""><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">USEFUL LINK</h6>
					<div class="dobule-link">
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="">About us</a></li>
							<li><a href="">Services</a></li>
							<li><a href="">Events</a></li>
							<li><a href="">Features</a></li>
						</ul>
						<ul>
							<li><a href="">Policy</a></li>
							<li><a href="">Term</a></li>
							<li><a href="">Help</a></li>
							<li><a href="">FAQs</a></li>
							<li><a href="">Site map</a></li>
						</ul>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">Berita Terbaru</h6>
                    <ul class="recent-post">
                        <?php
                            $query          = $koneksi->query("SELECT * FROM( SELECT * FROM berita ORDER BY idBerita DESC LIMIT 2) AS sub ORDER BY idBerita DESC;");

                            while ($baris   = mysqli_fetch_array($query)) {
                        ?>
                        <li>
                            <p><?= $baris['judul_berita']; ?></p>
                            <span><i class="fa fa-clock-o"></i><?= $baris['tanggal_berita']; ?></span>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">Kontak</h6>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> Jl. Brantas No.7, Jogoyudan, Kec. Lumajang, Kabupaten Lumajang, Jawa Timur 67316</p></li>
						<li><p><i class="fa fa-phone"></i> 0334-881984</p></li>
						<li><p><i class="fa fa-envelope"></i> stkipmuhlmj@gmail.com</p></li>
						<li><p><i class="fa fa-clock-o"></i> Senin - Jumat, 08:00AM - 06:00 PM</p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href=".">STKIPMUHLMJ</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->


    <!-- jQuery -->
    <script src="_assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="_assets/dist/js/adminlte.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!--====== Javascripts & Jquery ======-->
	<script src="_assets/_landing-page/js/jquery-3.2.1.min.js"></script>
	<script src="_assets/_landing-page/js/owl.carousel.min.js"></script>
	<script src="_assets/_landing-page/js/jquery.countdown.js"></script>
	<script src="_assets/_landing-page/js/masonry.pkgd.min.js"></script>
	<script src="_assets/_landing-page/js/magnific-popup.min.js"></script>
	<script src="_assets/_landing-page/js/main.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

      $(".detailPDF").click(function(){
        var id = $(this).attr('id');
        $("#kaki_modal3").hide();
        $("#isimodal3").load("pengumuman-view-pdfDetail.php?id="+id);
      });

    });
  </script>
</body>
</html>