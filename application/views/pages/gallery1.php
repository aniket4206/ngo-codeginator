<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
        <meta name="author" content="DynamicLayers">
       
        <title>Charitify || NGO/Charity/Fundraising Template</title>
        
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>layout/img/favicon.png">

<!-- Font Awesome Icons CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/font-awesome.min.css">
<!-- Themify Icons CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/themify-icons.css">
<!-- Elegant Font Icons CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/elegant-font-icons.css">
<!-- Elegant Line Icons CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/elegant-line-icons.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/bootstrap.min.css">
<!-- Venobox CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/venobox/venobox.css">
<!-- OWL-Carousel CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/owl.carousel.css">
<!-- Slick Nav CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/slicknav.min.css">
<!-- Css Animation CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/css-animation.min.css">
<!-- Nivo Slider CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/nivo-slider.css">
<!-- Main CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/main.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="<?= base_url() ?>layout/css/responsive.css">

<script src="<?= base_url() ?>layout/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div>Preloader -->
        
        <header id="header" class="header-section">
            <div class="top-header">
                <div class="container">
                    <div class="top-content-wrap row">
                        <div class="col-sm-8">
                            <ul class="left-info">
                                <li><a href="#"><i class="ti-email"></i>Info@YourDomain.com</a></li>
                                <li><a href="#"><i class="ti-mobile"></i>+(333) 052 39876</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 d-none d-md-block">
                            <ul class="right-info">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header">
                <div class="container">
                    <div class="bottom-content-wrap row">
                        <div class="col-sm-4">
                            <div class="site-branding">
                                <a href="#"><img src="<?= base_url() ?>layout/img/logo.png" alt="Brand"></a>
                            </div>
                        </div>
                       <div class="col-sm-8 text-right">
                           <ul id="mainmenu" class="nav navbar-nav nav-menu">
                                <li class="active"> <a href="<?= base_url('/') ?>">Home</a>
                                    
                                </li>
                                <li><a href="<?= base_url('about') ?>">About</a></li>
                                <li><a href="<?= base_url('causes') ?>">Causes</a></li>
                                <li><a href="<?= base_url('event') ?>">Event</a></li>
                                <li><a href="<?= base_url('gallery') ?>">Gallery</a> 
                                    <!-- <ul>
                                       <li><a href="gallery.php">Gallery</a></li>
                                       <li><a href="team.php">Volunteers</a></li>
                                       <li><a href="404.php">404 Not Found</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li><a href="blog-grid.php">Blog</a> 
                                    <ul>
                                       <li><a href="blog-grid.php">Blog Grid</a></li>
                                       <li><a href="blog-left-sidebar.php">Blog Left Sidebar</a></li>
                                       <li><a href="blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                       <li><a href="blog-single.php">Blog Single</a></li>
                                    </ul>
                                </li> -->
                                <li> <a href="<?= base_url('contact') ?>">Contact</a></li>
                            </ul>
                            <a href="<?= base_url('donate') ?>" class="default-btn">Donate Now</a>
                       </div>
                    </div>
                </div>
            </div>
        </header><!-- /Header Section -->
        
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
                        <li data-filter=".branding">Branding</li>
                        <li data-filter=".design">Design</li>
                        <li data-filter=".wordpress">Wordpress</li>
                    </ul><!-- /.gallery filter -->
                </div>
                 <div class="gallery-items row">
                    <div class="col-lg-4 col-sm-6 single-item">
                    <?php for ($i = 0; $i < count($dehydrate); $i++) : ?>
                    <?php if ($dehydrate[$i]->active == 'Publish') : ?>
                        <div class="gallery-wrap">
                            <img src="<?= base_url('assets/images/Product-Images/') . $dehydrate[$i]->image ?>" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url() ?>layout/img/gallery-1.jpg"><i class="ti-image"></i></a> 
                            </div>
                        </div>
                        <?php endif; ?>
                      <?php endfor; ?>
                    </div><!-- /Item-1  
                    <div class="col-lg-4 col-sm-6 single-item design">
                    <?php for ($i = 0; $i < count($SprayDriedPro); $i++) : ?>
                        <?php if ($SprayDriedPro[$i]->active == 'Publish') : ?>
                        <div class="gallery-wrap">
                            <img src="<?= base_url('assets/images/Product-Images/') . $SprayDriedPro[$i]->image ?>" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url() ?>layout/img/gallery-2.jpg"><i class="ti-image"></i></a> 
                            </div>
                        </div>
                        <?php endif; ?>
                      <?php endfor; ?>
                    </div>/Item-2 
                    <div class="col-lg-4 col-sm-6 single-item wordpress">
                    <?php for ($i = 0; $i < count($Spices); $i++) : ?>
                     <?php if ($Spices[$i]->active == 'Publish') : ?>
                        <div class="gallery-wrap">
                            <img src="<?= base_url('assets/images/Product-Images/') . $Spices[$i]->image ?>" alt="gallery"><br /><br /><br />
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url() ?>layout/img/gallery-3.jpg"><i class="ti-image"></i></a> 
                            </div>
                        </div>
                        <?php endif; ?>
                      <?php endfor; ?>
                    </div> <!--/Item-3 -->
                    <!-- <div class="col-lg-4 col-sm-6 single-item design branding wordpress">
                        <div class="gallery-wrap">
                            <img src="<?= base_url() ?>layout/img/gallery-4.jpg" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url() ?>layout/img/gallery-4.jpg"><i class="ti-image"></i></a> 
                            </div>
                        </div>
                    </div>/Item-4 -->
                    <!-- <div class="col-lg-4 col-sm-6 single-item branding marketing">
                        <div class="gallery-wrap">
                            <img src="<?= base_url() ?>layout/img/gallery-5.jpg" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url() ?>layout/img/gallery-5.jpg"><i class="ti-image"></i></a> 
                            </div>
                        </div>
                    </div>/Item-5 -->
                    <!-- <div class="col-lg-4 col-sm-6 single-item marketing design">
                        <div class="gallery-wrap">
                            <img src="<?= base_url() ?>layout/img/gallery-6.jpg" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url() ?>layout/img/gallery-6.jpg"><i class="ti-image"></i></a> 
                            </div>
                        </div>
                    </div>/Item-6 -->
                </div>
            </div>
        </section><!-- /Gallery Section -->
        
        <div class="sponsor-section bd-bottom">
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
        </div><!-- ./Sponsor Section -->

        <section class="widget-section padding">
            <div class="container">
                <div class="widget-wrap row">
                    <div class="col-md-4 xs-padding">
                        <div class="widget-content">
                            <img src="<?= base_url() ?>layout/img/logo-light.png" alt="logo">
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor</p>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="widget-content">
                            <h3>Recent Campaigns</h3>
                            <ul class="widget-link">
                                <li><a href="#">First charity activity of this summer. <span>-1 Year Ago</span></a></li>
                                <li><a href="#">Big charity: build school for poor children. <span>-2 Year Ago</span></a></li>
                                <li><a href="#">Clean-water system for rural poor. <span>-2 Year Ago</span></a></li>
                                <li><a href="#">Nepal earthqueak donation campaigns. <span>-3 Year Ago</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="widget-content">
                            <h3>Charitify Location</h3>
                            <ul class="address">
                                <li><i class="ti-email"></i> Info@YourDomain.com</li>
                                <li><i class="ti-mobile"></i> +(333) 052 39876</li>
                                <li><i class="ti-world"></i> Www.YourWebsite.com</li>
                                <li><i class="ti-location-pin"></i> 60 Grand Avenue. Central New Road 0708, USA</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./Widget Section -->
        
        <footer class="footer-section">
			<div class="container">
                <div class="row">
                    <div class="col-md-6 sm-padding">
                        <div class="copyright">&copy; 2021 Charitify Powered by DynamicLayers</div>
                    </div>
                    <div class="col-md-6 sm-padding">
                        <ul class="footer-social">
                            <li><a href="#">Orders</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Report Problem</a></li>
                        </ul>
                    </div>
                </div>
			</div>
		</footer><!-- /Footer Section -->
        
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


<!-- <div class="gallery-items row">
                 <?php for ($i = 0; $i < count($dehydrate); $i++) : ?>
                 <?php if ($dehydrate[$i]->active == 'Publish') : ?>
                    <div class="col-lg-4 col-sm-6 single-item">
                       
                        <div class="gallery-wrap">
                       
                            <img src="<?= base_url('assets/images/Product-Images/') . $dehydrate[$i]->image ?>" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url('assets/images/Product-Images/') . $dehydrate[$i]->image ?>"><i class="ti-image"></i></a> 
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                      <?php endfor; ?>
                    <!-- /Item-1  -->
                    <div class="col-lg-4 col-sm-6 single-item">
                    <?php for ($i = 0; $i < count($SprayDriedPro); $i++) : ?>
                        <?php if ($SprayDriedPro[$i]->active == 'Publish') : ?>
                        <div class="gallery-wrap">
                            <img src="<?= base_url('assets/images/Product-Images/') . $SprayDriedPro[$i]->image ?>" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url('assets/images/Product-Images/') . $SprayDriedPro[$i]->image ?>"><i class="ti-image"></i></a> 
                            </div>
                            <?php endif; ?>
                      <?php endfor; ?>
                        </div>
                    </div><!--Item-2 -->
                    <?php for ($i = 0; $i < count($Spices); $i++) : ?>
                     <?php if ($Spices[$i]->active == 'Publish') : ?>
                    <div class="col-lg-4 col-sm-6 single-item">
                   
                        <div class="gallery-wrap">
                            <img src="<?= base_url('assets/images/Product-Images/') . $Spices[$i]->image ?>" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="<?= base_url('assets/images/Product-Images/') . $Spices[$i]->image ?>"><i class="ti-image"></i></a> 
                            </div>
                        </div>
                       
                    </div> 
                    <?php endif; ?>
                      <?php endfor; ?> -->