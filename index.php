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
			<a href="." class="site-logo"><img src="img/logo2.png" width=60% height=140% style="margin-top: -20px;"></a>
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
			<div class="collapse navbar-collapse" id="main_nav">
			<ul class="main-menu">
				<li class="active"><a href="index.php">Home</a></li>
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

                <!-- End Item With Sub -->
	            <li style="display: none;">
	                <a href="auth/login.php" accesskey="c">login</a>
	            </li>
			</ul>
			</div>
		</div>
	</nav>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle">Award Winning UNIVERSITY</div>
								<h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
								<p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
								<div class="site-btn">
									<a href="#berita" style="color: white;" onMouseOver="this.style.color='black'">GET STARTED</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle">Award Winning UNIVERSITY</div>
								<h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
								<p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
								<div class="site-btn">
									<a href="#berita" style="color: white;" onMouseOver="this.style.color='black'">GET STARTED</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle">Award Winning UNIVERSITY</div>
								<h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
								<p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
								<div class="site-btn">
									<a href="#berita" style="color: white;" onMouseOver="this.style.color='black'">GET STARTED</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Counter section  -->
	<section class="counter-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6">
					<div class="big-icon">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="counter-content">
						<h2>NEXT EVENT: Sales & Marketing Alignment</h2>
						<p><i class="fa fa-calendar-o"></i>07:00 PM - 09:00 PM</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="counter">
						<div class="counter-item"><h4>20</h4>Days</div>
						<div class="counter-item"><h4>08</h4>Hrs</div>
						<div class="counter-item"><h4>40</h4>Mins</div>
						<div class="counter-item"><h4>56</h4>secs</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Counter section end -->

	<!-- Blog section -->
	<section class="blog-section spad" style="background-color: #e5e5e5;" id="berita">
		<div class="container">
			<div class="section-title text-center">
				<h3>Berita</h3>
				<p>Kabar terkini terkait STKIP Lumajang</p>
				<div class="text-right" style="padding-top: 20px;">
                <a href="berita.php">
                	<h6 style="color:#f6783a">Kunjungi Berita Kami &nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;</h6>
                </a>
            </div>
			</div>
			<div class="row">
				<!-- course item -->
				<?php
                    $query          = $koneksi->query("SELECT * FROM( SELECT * FROM berita ORDER BY idBerita DESC LIMIT 6) AS sub ORDER BY idBerita DESC;");
                    while ($baris   = mysqli_fetch_array($query)) {
                ?>

				<div class="col-lg-4 col-md-6 course-item" style="margin-top: -20px">
					<a href="berita-single.php?id=<?= $baris['idBerita']; ?>">
						<div class="course-thumb" style="margin-bottom: 7%;">
							<img src="img/blog/coverBerita/<?= $baris['cover_berita']; ?>" width=360px height=217px>
							<div class="course-cat">
								<span><?= $baris['kategori_berita']; ?></span>
							</div>
						</div>
						<div class="course-info">
							<div class="date"><i class="fa fa-clock-o"></i> <?= $baris['tanggal_berita']; ?>&emsp;<i class="fa fa-user"></i> <?= $baris['penulis_berita']; ?></span></div>
							<h5><?= $baris['judul_berita']; ?></h5>
						</div>
					</a>
				</div>

				<?php } ?>
			</div>
		</div>
	</section>
	<!-- Blog section end-->

	<!-- Fact section -->
	<section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-crown"></i>
					</div>
					<div class="fact-text">
						<h2>50</h2>
						<p>YEARS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-briefcase"></i>
					</div>
					<div class="fact-text">
						<h2>80</h2>
						<p>TEACHERS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-user"></i>
					</div>
					<div class="fact-text">
						<h2>500</h2>
						<p>STUDENTS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-pencil-alt"></i>
					</div>
					<div class="fact-text">
						<h2>800+</h2>
						<p>LESSONS</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end-->

	<!-- Event section -->
	<section class="event-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Kegiatan</h3>
				<p>Kumpulan kegiatan STKIP Lumajang</p>
			</div>
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
			</div>
		</div>
	</section>
	<!-- Event section end -->

	<!-- Gallery section -->
	<div class="gallery-section">
		<div class="gallery">
			<div class="grid-sizer"></div>
			<div class="gallery-item gi-big set-bg" data-setbg="img/gallery/1.jpg">
				<a class="img-popup" href="img/gallery/1.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/2.jpg">
				<a class="img-popup" href="img/gallery/2.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
				<a class="img-popup" href="img/gallery/3.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="img/gallery/5.jpg">
				<a class="img-popup" href="img/gallery/5.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-big set-bg" data-setbg="img/gallery/8.jpg">
				<a class="img-popup" href="img/gallery/8.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="img/gallery/4.jpg">
				<a class="img-popup" href="img/gallery/4.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/6.jpg">
				<a class="img-popup" href="img/gallery/6.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/gallery/7.jpg">
				<a class="img-popup" href="img/gallery/7.jpg"><i class="ti-plus"></i></a>
			</div>
		</div>
	</div>
	<!-- Gallery section -->

	<!-- Services section -->
	<section class="service-section spad">
		<div class="container services">
			<div class="section-title text-center">
				<h3>OUR SERVICES</h3>
				<p>We provides the opportunity to prepare for life</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/1.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Art Studio</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/2.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Great Facility</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/3.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Activity Hub</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/4.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Fully Qualified</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/5.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Flexible Schedule</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/6.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Chemistry Lab</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->

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
				<div class="col-md-7 col-lg-5">sss
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



	<!--====== Javascripts & Jquery ======-->
	<script src="_assets/_landing-page/js/jquery-3.2.1.min.js"></script>
	<script src="_assets/_landing-page/js/owl.carousel.min.js"></script>
	<script src="_assets/_landing-page/js/jquery.countdown.js"></script>
	<script src="_assets/_landing-page/js/masonry.pkgd.min.js"></script>
	<script src="_assets/_landing-page/js/magnific-popup.min.js"></script>
	<script src="_assets/_landing-page/js/main.js"></script>
	
</body>
</html>