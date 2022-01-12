<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php include 'header.php'?>
<style>
.pager-header{
    background-image: url(../ngo/layout/img/5.png);
	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center center;
	-webkit-background-size: cover;
	background-size: cover;
    min-height: 300px;
    display: flex;
    align-items: center;
}
.pager-header h2{
    color: #fff;
    font-size: 42px;
}
.pager-header p{
    color: #ddd;
}
</style>
 
<div class="header-height"></div>
        
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Image Gallery</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->
        
        <section class="gallery-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                    <!-- <li class="active" role="presentation" style="padding:10px">
                      <a aria-controls="Description" onclick="filterSelection('local')" role="tab" data-toggle="tab">local
                      Products</a>
                    </li> -->
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".ngo">NGO's</li>
                        <li data-filter=".event">Event</li>
                        <li data-filter=".social">Social</li>
                        <!-- <li data-filter=".marketing">Marketing</li> -->
                    </ul><!-- /.gallery filter -->
                </div>
                 <div class="gallery-items row">
                    
                    <?php for ($i = 0; $i < count($ngo); $i++) : ?>
                     <?php if ($ngo[$i]->active == 'Publish') : ?>
                    <div class="col-lg-4 col-sm-6 single-item ngo">
                        <div class="gallery-wrap">
                            <img src="<?= base_url('assets/images/Product-Images/') . $ngo[$i]->image ?>" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url('assets/images/Product-Images/') . $ngo[$i]->image ?>"><i class="ti-image"></i></a> 
                            </div>
                           
                        </div>
                    </div>
                    <?php endif; ?>
                      <?php endfor; ?><!-- /Item-4 -->
                      <?php for ($i = 0; $i < count($event); $i++) : ?>
                     <?php if ($event[$i]->active == 'Publish') : ?>
                    <div class="col-lg-4 col-sm-6 single-item event">
                        <div class="gallery-wrap">
                            <img src="<?= base_url('assets/images/Product-Images/') . $event[$i]->image ?>" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url('assets/images/Product-Images/') . $event[$i]->image ?>"><i class="ti-image"></i></a> 
                            </div>
                           
                        </div>
                    </div>
                    <?php endif; ?>
                      <?php endfor; ?><!-- /Item-4 -->
                      <?php for ($i = 0; $i < count($social); $i++) : ?>
                     <?php if ($social[$i]->active == 'Publish') : ?>
                    <div class="col-lg-4 col-sm-6 single-item social">
                        <div class="gallery-wrap">
                            <img src="<?= base_url('assets/images/Product-Images/') . $social[$i]->image ?>" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url('assets/images/Product-Images/') . $social[$i]->image ?>"><i class="ti-image"></i></a> 
                            </div>
                           
                        </div>
                    </div>
                    <?php endif; ?>
                      <?php endfor; ?>
                </div>
            </div>
        </section><!-- /Gallery Section -->
      
        


        <section class="gallery-section bg-white bd-bottom padding">
            <div class="container">
                <div class="row">
                    <ul class="gallery-filter align-center mb-30">
                    <!-- <li class="active" role="presentation" style="padding:10px">
                      <a aria-controls="Description" onclick="filterSelection('local')" role="tab" data-toggle="tab">local
                      Products</a>
                    </li> -->
                        <!-- <li class="active" data-filter="*">Videos</li> -->
                  
                        <!-- <li data-filter=".marketing">Marketing</li> -->
                    </ul><!-- /.gallery filter -->
                </div>
                 <div class="gallery-items row">
                    
                    <?php for ($i = 0; $i < count($video); $i++) : ?>
                     <?php if ($video[$i]->active == 'Publish') : ?>
                    <div class="col-lg-4 col-sm-6 single-item ngo social event">
                        <div class="video-wrap">
                            <img src="<?= "https://img.youtube.com/vi/". $video[$i]->video_link ."/mqdefault.jpg" ?>" alt="video">
                            <!-- <img src="https://img.youtube.com/vi/<?php $video[$i]->video_link ?>/mqdefault.jpg" alt="video"> -->

                            <div class="play">
                                <a class="img-popup" data-autoplay="true" data-vbtype="video" href="<?= base_url('https://www.youtube.com/watch?v=') . $video[$i]->video_link ?>"><i class="ti-control-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                      <?php endfor; ?>
                </div>
            </div>
        </section><!-- /Gallery Section -->
      
      

        <!-- <section class="campaigns-section bd-bottom">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-6 xs-padding">
                        <div class="video-wrap">
                            <img src="<?= base_url() ?>layout/img/video.jpg" alt="video">
                            <div class="play">
                                <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="ti-control-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>/Featured Campaigns Section -->
       


        <!-- <div class="sponsor-section bd-bottom">
            <div class="container">
                <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                    <li class="sponsor-item">
                        <img src="<?= base_url() ?>layout/img/sponsor-1.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="<?= base_url() ?>layout/img/sponsor-2.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="<?= base_url() ?>layout/img/sponsor-3.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="<?= base_url() ?>layout/img/sponsor-4.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="<?= base_url() ?>layout/img/sponsor-5.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="<?= base_url() ?>layout/img/sponsor-6.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="<?= base_url() ?>layout/img/sponsor-7.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="<?= base_url() ?>layout/img/sponsor-8.png" alt="sponsor-image">
                    </li>
                </ul>
            </div>
        </div>./Sponsor Section -->

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
