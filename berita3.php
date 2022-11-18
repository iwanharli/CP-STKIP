<?php
    include "koneksi.php";
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
                        <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
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

            </ul>
            </div>
        </div>
    </nav>
    <!-- Header section end -->


    <!-- Breadcrumb section -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="index.php" class="btn btn-light" style="color: #f6783a; font-weight: bold;"><i class="fa fa-home"></i>&nbsp;Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Berita</span>
        </div>
    </div>
    <!-- Breadcrumb section end -->


    <!-- Blog page section  -->
    <section class="blog-page-section spad pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 event-item">
					<a href="javascript:void(0)">
						<div class="event-thumb">
							<img src="img/event/1.jpg" alt="">
							<div class="event-date">
								<span>24 Mar 2018</span>
							</div>
						</div>
						<div class="event-info">
							<h4>The dos and don'ts of writing a personal<br>statement for languages</h4>
							<p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
						</div>
					</a>
				</div>
				<div class="col-md-6 event-item">
					<a href="javascript:void(0)">
						<div class="event-thumb">
							<img src="img/event/2.jpg" alt="">
							<div class="event-date">
								<span>22 Mar 2018</span>
							</div>
						</div>
						<div class="event-info">
							<h4>University interview tips:<br>confidence won't make up for flannel</h4>
							<p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
						</div>
					</a>
				</div>
                <?php
                    $query          = $koneksi->query("SELECT * FROM( SELECT * FROM berita ORDER BY idBerita DESC LIMIT 6) AS sub ORDER BY idBerita DESC;");
                    while ($baris   = mysqli_fetch_array($query)) {
                ?>
                <div class="col-md-2 event-item">
					<a href="berita-single.php?id=<?= $baris['idBerita']; ?>">
						<div class="event-thumb">
							<img src="img/blog/coverBerita/<?= $baris['cover_berita']; ?>" alt="" style="height: 250px;">
							<div class="event-date">
								<span>24 Mar 2018</span>
							</div>
						</div>
						<div class="event-info">
							<h4><?= $baris['judul_berita']; ?></h4>
							<p><i class="fa fa-calendar-o"></i> <?= $baris['tanggal_berita']; ?> 
                            <i class="fa fa-user"></i> <?= $baris['penulis_berita']; ?></p>
						</div>
					</a>
				</div>
                <?php } ?>

                <!-- sidebar -->
                <div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
                    <!-- widget -->
                    <div class="widget">
                        <form class="search-widget">
                            <input type="text" placeholder="Search...">
                            <button><i class="ti-search"></i></button>
                        </form>
                    </div>
                    <!-- widget -->
                    <div class="widget">
                        <h5 class="widget-title">Berita Terbaru</h5>
                        <div class="recent-post-widget">
                            <!-- recent post -->
                            <?php
                                $query          = $koneksi->query("SELECT * FROM( SELECT * FROM berita ORDER BY idBerita DESC LIMIT 6) AS sub ORDER BY idBerita DESC;");

                                while ($baris   = mysqli_fetch_array($query)) {
                            ?>
                            
                            <div class="rp-item">
                                <a href="berita-single.php?id=<?= $baris['idBerita']; ?>">
                                    <div class="rp-thumb set-bg" data-setbg="img/blog/coverBerita/<?= $baris['cover_berita']; ?>"></div>
                                    <div class="rp-content">
                                        <h6> <?= $baris['judul_berita']; ?></h6>
                                        <p><i class="fa fa-clock-o"></i> <?= $baris['tanggal_berita']; ?></p>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- widget -->
                    <div class="widget">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tags">
                            <a href="#">DEVELOPMENT</a>
                            <a href="#">BUSINESS</a>
                            <a href="#">PROJECTS</a>
                            <a href="#">GOOGLE ADWORDS</a>
                            <a href="#">SQL DATABASE</a>
                            <a href="#">MARKETING</a>
                            <a href="#">DESIGN</a>
                        </div>
                    </div>
                    <!-- widget -->
                    <div class="widget">
                        <h4 class="widget-title">Kategori</h4>
                        <ul>
                            <li><a href="">Business</a></li>
                            <li><a href="">Design</a></li>
                            <li><a href="">Management</a></li>
                            <li><a href="">Marketing Plans</a></li>
                            <li><a href="">Construction</a></li>
                            <li><a href="">Honored</a></li>
                            <li><a href="">Program development</a></li>
                            <li><a href="">My SQL database</a></li>
                            <li><a href="">Google Adwords</a></li>
                            <li><a href="">Education</a></li>
                        </ul>
                    </div>
                    <!-- widget -->
                    <!-- <div class="widget">
                        <img src="img/ad.jpg" alt="">
                    </div> -->
                </div>
            </div>
        </div>
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
                <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="javascript:void(0)" target="_blank">STKIPMUHLMJ</a>
            </div>      
        </div>
    </footer>
    <!-- Footer section end-->



    <!--====== Javascripts & Jquery ======-->
	<script src="_assets/_landing-page/js/jquery-3.2.1.min.js"></script>
	<script src="_assets/_landing-page/js/owl.carousel.min.js"></script>
	<script src="_assets/_landing-page/js/jquery.countdown.js"></script>
	<script src="_assets/_landing-page/js/masonry.pkgd.min.js"></script>
	<script src="_assets/_landing-page/js/magnific-popup.min.js"></script>
	<script src="_assets/_landing-page/js/main.js"></script>
    
</body>
</html>