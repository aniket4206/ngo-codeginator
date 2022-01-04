<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php include 'header.php'?>       
        <div class="header-height"></div>
        
        <!-- <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Donate With Us</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Donate</li>
                    </ol>
                </div>
            </div>
        </div>/Page Header -->
        <br /> <br />
        <div class="banner-area header-border-top-1 pt-80 pb-35">
            <div class="container">
                <div class="section-title-custome text-center mb-75" data-aos="fade-up" data-aos-delay="200">
                    <h2 style="font-size:3.7rem;color:#710712">😔</h2>
                    <br><br>
                    <h2>Your Transaction is Failed!</h2>
                    <p class="pt-3">Your Transaction <u><?= $OrderId ?></u> has been failed. Please place your Transaction again.</p>
                   
                </div>
            </div>
        </div>    
      <br />

       <!-- Footer started -->
       <?php include 'footer.php'?>
        <!-- Footer ended -->
        
		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>
	

	
        	<!-- jQuery Lib -->
		<script src="<?= base_url() ?>layout/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?= base_url() ?>layout/js/vendor/bootstrap.min.js"></script>
		<!-- Tether JS -->
		<script src="<?= base_url() ?>layout/js/vendor/tether.min.js"></script>
        <!-- Imagesloaded JS -->
        <script src="<?= base_url() ?>layout/js/vendor/imagesloaded.pkgd.min.js"></script>
		<!-- OWL-Carousel JS -->
		<script src="<?= base_url() ?>layout/js/vendor/owl.carousel.min.js"></script>
		<!-- isotope JS -->
		<script src="<?= base_url() ?>layout/js/vendor/jquery.isotope.v3.0.2.js"></script>
		<!-- Smooth Scroll JS -->
		<script src="<?= base_url() ?>layout/js/vendor/smooth-scroll.min.js"></script>
		<!-- venobox JS -->
		<script src="<?= base_url() ?>layout/js/vendor/venobox.min.js"></script>
        <!-- ajaxchimp JS -->
        <script src="<?= base_url() ?>layout/js/vendor/jquery.ajaxchimp.min.js"></script>
        <!-- Counterup JS -->
		<script src="<?= base_url() ?>layout/js/vendor/jquery.counterup.min.js"></script>
        <!-- waypoints js -->
		<script src="<?= base_url() ?>layout/js/vendor/jquery.waypoints.v2.0.3.min.js"></script>
        <!-- Slick Nav JS -->
        <script src="<?= base_url() ?>layout/js/vendor/jquery.slicknav.min.js"></script>
        <!-- Nivo Slider JS -->
        <script src="<?= base_url() ?>layout/js/vendor/jquery.nivo.slider.pack.js"></script>
        <!-- Letter Animation JS -->
		<script src="<?= base_url() ?>layout/js/vendor/letteranimation.min.js"></script>
        <!-- Wow JS -->
		<script src="<?= base_url() ?>layout/js/vendor/wow.min.js"></script>
		<!-- Contact JS -->
		<script src="<?= base_url() ?>layout/js/contact.js"></script>
		<!-- Main JS -->
		<script src="<?= base_url() ?>layout/js/main.js"></script>
    
       
    </body>
</html>