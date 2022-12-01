<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "_partials/_assets-head.php"; ?>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<?php require "_partials/header.php"; ?>
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
                    $query          = $koneksi->query("SELECT * FROM( SELECT * FROM berita WHERE status_berita=1 ORDER BY idBerita DESC LIMIT 6) AS sub ORDER BY idBerita DESC;");
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
				<h3>Pengumuman</h3>
				<p>Daftar pengumuman terbaru</p>
				<div class="text-right" style="padding-top: 20px;">
					<a href="pengumuman.php">
						<h6 style="color:#f6783a">Kunjungi Pengumuman Kami &nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;</h6>
					</a>
            	</div>
			</div>
			<div class="row">
				<?php
					$query          = $koneksi->query("SELECT * FROM( SELECT * FROM pengumuman ORDER BY idPengumuman DESC LIMIT 2) AS sub ORDER BY tanggal_pengumuman DESC;");
					$i = 1;

					while ($baris   = mysqli_fetch_array($query)) {
				?>

				<div class="col-lg-12 col-sm-6 service-item">
					<div class="service-icon">
						<img src="img/services-icons/1.png" alt="1">
					</div>
					<div class="service-content">
						<h4><a href="pengumuman-single.php?id=<?= $baris['idPengumuman']; ?>" style="word-break: break-all;"><?= $baris['judul_pengumuman']; ?></a></h4>
						<p>(Detail Pengumuman) Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				
				<?php } ?>
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


	<!-- Footer section -->
	<?php require "_partials/footer.php"; ?>
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