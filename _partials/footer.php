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
                        $query          = $koneksi->query("SELECT * FROM( SELECT * FROM berita WHERE status_berita=1 ORDER BY idBerita DESC LIMIT 2) AS sub ORDER BY idBerita DESC;");

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