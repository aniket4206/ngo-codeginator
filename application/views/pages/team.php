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
        
		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>layout/img/favicon1.png">

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
        
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div><!-- Preloader -->
        
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
                    <h2>Our Volunteers</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Voluenteers</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->
        
        <section class="about-section bd-bottom shape circle padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-4 xs-padding">
                        <div class="profile-wrap">
                            <img class="profile" src="img/profile.jpg" alt="profile">
                            <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            <img src="img/sign.png" alt="sign">
                        </div>
                    </div>
                    <div class="col-md-8 xs-padding">
                        <div class="about-wrap row">
                            <div class="col-md-6 xs-padding">
                                <img src="img/history.jpg" alt="about-thumb">
                                <h3>Our History</h3>
                                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor.</p>
                                <a href="#" class="default-btn">Read More</a>
                            </div>
                            <div class="col-md-6 xs-padding">
                                <img src="img/mission.jpg" alt="about-thumb">
                                <h3>Our Mission</h3>
                                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor.</p>
                                <a href="#" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Causes Section -->
        
        <section class="team-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="team-wrapper row">
                    <div class="col-lg-12 sm-padding">
                        <div class="team-wrap row">
                            <div class="col-md-3 xs-padding">
                                <div class="team-details">
                                   <img src="img/team-1.jpg" alt="team">
                                    <div class="hover">
                                        <h3>Jonathan Smith <span>Communicator</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-1 -->
                            <div class="col-md-3 xs-padding">
                                <div class="team-details">
                                   <img src="img/team-2.jpg" alt="team">
                                    <div class="hover">
                                        <h3>Angelina Rose <span>Certified Reader</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-2 -->
                            <div class="col-md-3 xs-padding">
                                <div class="team-details">
                                    <img src="img/team-3.jpg" alt="team">
                                    <div class="hover">
                                        <h3>Taylor Swift <span>Event Creator</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-3 -->
                            <div class="col-md-3 xs-padding">
                                <div class="team-details">
                                   <img src="img/team-4.jpg" alt="team">
                                    <div class="hover">
                                        <h3>Michel Brown <span>Internet Specialist</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-4 -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->
        
        <section id="counter" class="counter-section">
		    <div class="container">
                <ul class="row counters">
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-money"></i>
                            <h3 class="counter">85389</h3>
                            <h4 class="text-white">Money Donated</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-face-smile"></i>
                            <h3 class="counter">10693</h3>
                            <h4 class="text-white">Volunteer Around The World</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-user"></i>
                            <h3 class="counter">50177</h3>
                            <h4 class="text-white">People Impacted</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-comments"></i>
                            <h3 class="counter">669</h3>
                            <h4 class="text-white">Positive Feedbacks</h4>
                        </div>
                    </li>
                </ul>
		    </div>
		</section><!-- Counter Section -->
        
        <div class="sponsor-section bd-bottom">
            <div class="container">
                <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                    <li class="sponsor-item">
                        <img src="img/sponsor-1.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-2.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-3.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-4.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-5.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-6.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-7.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-8.png" alt="sponsor-image">
                    </li>
                </ul>
            </div>
        </div><!-- ./Sponsor Section -->

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