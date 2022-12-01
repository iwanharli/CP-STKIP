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

    <!-- Stylesheets Landing Page-->
  	<script src="https://kit.fontawesome.com/0161564ad7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="_assets/_landing-page/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/themify-icons.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/magnific-popup.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/animate.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/owl.carousel.css"/>
	<link rel="stylesheet" href="_assets/_landing-page/css/style.css"/>


	<!-- Stylesheets Berita -->
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <!-- <link rel="stylesheet" href="_assets/_landing-page-berita/css/bootstrap.css" /> -->
    <link rel="stylesheet" href="_assets/_landing-page-berita/css/flaticon.css" />
    <link rel="stylesheet" href="_assets/_landing-page-berita/css/themify-icons.css" />
    <link rel="stylesheet" href="_assets/_landing-page-berita/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="_assets/_landing-page-berita/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="_assets/_landing-page-berita/css/style.css" />


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

        #padding-link{
            padding-top:18px; padding-bottom:17px;
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
                <div class="hf-item" style="margin-left: 72px;">
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

    <nav class="nav-section navbar navbar-expand-lg" style="padding:0%; height: 59.5px;">
        <div class="container">
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="main-menu">
                    <li><a href="index.php" id="padding-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" id="padding-link">Profil</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="visi-misi.php">Visi misi</a></li>
                            <li><a class="dropdown-item" href="struktur-organisasi.php">Struktur Organisasi&emsp;&ensp;</a></li>
                            <li><a class="dropdown-item" href="tujuan.php">Tujuan</a></li>
                        </ul>
                    </li>
                    <li><a href="pmb.php" id="padding-link">Pendaftaran Mahasiswa Baru</a></li>
                    <li><a href="prodi-bahasa-dan-sastra.php" id="padding-link">Prodi Bahasa & Sastra</a></li>
                    <li><a href="https://jurnal.stkipmuhlmj.ac.id/" id="padding-link">Jurnal</a></li>
                    <li><a href="mahasiswa-dan-alumni.php" id="padding-link">Mahasiswa & Alumni</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" id="padding-link" style="">Informasi</a>
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
            <a href="index.php" class="btn btn-light" style="color: #f6783a; font-weight: bold;"><i class="fa fa-home"></i>&nbsp;Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Berita</span>
        </div>
    </div>
    <!-- Breadcrumb section end -->


    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                    <?php
                        $query          = $koneksi->query("SELECT * FROM( SELECT * FROM berita WHERE status_berita=1 ORDER BY idBerita DESC LIMIT 4) AS sub ORDER BY idBerita DESC;");
                        while ($baris   = mysqli_fetch_array($query)) {
                    ?>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#"><?= $baris['penulis_berita']; ?><i class="ti-user"></i></a></li>
                                        <li><a href="#"><?= $baris['tanggal_berita']; ?><i class="ti-calendar"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="ti-comment"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/coverBerita/<?= $baris['cover_berita']; ?>" alt="">
                                    <div class="blog_details">
                                        <a href="berita-single.php?id=<?= $baris['idBerita']; ?>">
                                            <h2><?= $baris['judul_berita']; ?></h2>
                                        </a>
                                        <p align="justify">MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="berita-single.php?id=<?= $baris['idBerita']; ?>" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php } ?>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-left"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item active"><a href="#" class="page-link">01</a></li>
                                <li class="page-item"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-right"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <?php
                                $query          = $koneksi->query("SELECT * FROM( SELECT * FROM berita ORDER BY idBerita DESC LIMIT 6) AS sub ORDER BY idBerita DESC;");

                                while ($baris   = mysqli_fetch_array($query)) {
                            ?>
                            <div class="media post_item">
                                <img src="img/blog/coverBerita/<?= $baris['cover_berita']; ?>" alt="post" style="max-width: 45%;">
                                <div class="media-body">
                                    <a href="berita-single.php?id=<?= $baris['idBerita']; ?>">
                                        <h3><?= $baris['judul_berita']; ?></h3>
                                    </a>
                                    <p><?= $baris['tanggal_berita']; ?></p>
                                </div>
                            </div>
                            <?php } ?>
                            
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Fashion</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Art</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Adventure</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="_assets/_landing-page-berita/js/jquery-3.2.1.min.js"></script>
    <script src="_assets/_landing-page-berita/js/popper.js"></script>
    <script src="_assets/_landing-page-berita/js/bootstrap.min.js"></script>
    <script src="_assets/_landing-page-berita/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="_assets/_landing-page-berita/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="_assets/_landing-page-berita/js/owl-carousel-thumb.min.js"></script>
    <script src="_assets/_landing-page-berita/js/jquery.ajaxchimp.min.js"></script>
    <script src="_assets/_landing-page-berita/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="_assets/_landing-page-berita/js/gmaps.min.js"></script>
    <script src="_assets/_landing-page-berita/js/theme.js"></script>
    
</body>
</html>