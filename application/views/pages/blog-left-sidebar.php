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
                                <a href="#"><img src="img/logo.png" alt="Brand"></a>
                            </div>
                        </div>
                       <div class="col-sm-8 text-right">
                           <ul id="mainmenu" class="nav navbar-nav nav-menu">
                                <li class="active"> <a href="index.html">Home</a>
                                    <ul>
                                       <li><a href="index.html">Home Default</a></li>
                                       <li><a href="index-2.html">Home Modern</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="causes.html">Causes</a></li>
                                <li><a href="event.html">Event</a></li>
                                <li><a href="#">Pages</a> 
                                    <ul>
                                       <li><a href="gallery.html">Gallery</a></li>
                                       <li><a href="team.html">Volunteers</a></li>
                                       <li><a href="404.html">404 Not Found</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-grid.html">Blog</a> 
                                    <ul>
                                       <li><a href="blog-grid.html">Blog Grid</a></li>
                                       <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                       <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                       <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li> <a href="contact.html">Contact</a></li>
                            </ul>
                            <a href="#" class="default-btn">Donet Now</a>
                       </div>
                    </div>
                </div>
            </div>
        </header><!-- /Header Section -->
        
        <div class="header-height"></div>
        
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>Blog Left Sidebar</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->
        
        <section class="blog-section bg-grey padding">
            <div class="container">
                <div class="row left-sidebar">
                   <div class="col-lg-3 xs-padding">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget mb-50">
                                <h4>Search Posts</h4>
                                <form action="" class="search-form">
                                    <input type="text" class="form-control" placeholder="Type here">
                                    <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="sidebar-widget mb-50">
                                <h4>Categories</h4>
                                <ul class="cat-list">
                                    <li><a href="#">Wed design</a><span>(2)</span></li>
                                    <li><a href="#">Graphics design</a><span>(4)</span></li>
                                    <li><a href="#">Wordpress</a><span>(7)</span></li>
                                    <li><a href="#">Joomla</a><span>(5)</span></li>
                                    <li><a href="#">Marketing</a><span>(3)</span></li>
                                    <li><a href="#">Music</a><span>(2)</span></li>
                                </ul>
                            </div><!-- Categories --> 
                            <div class="sidebar-widget mb-50">
                                <h4>Recent Posts</h4>
                                <ul class="recent-posts">
                                    <li>
                                        <img src="img/rel-post-1.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Standard post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>   
                                        </div>                 
                                    </li>
                                    <li>
                                        <img src="img/rel-post-2.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Post with small image</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>   
                                        </div>                 
                                    </li>
                                    <li>
                                        <img src="img/rel-post-3.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Quote post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>   
                                        </div>                 
                                    </li>
                                    <li>
                                        <img src="img/rel-post-4.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">Standard video post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>   
                                        </div>                 
                                    </li>
                                    <li>
                                        <img src="img/rel-post-5.jpg" alt="blog post">
                                        <div>
                                            <h4><a href="#">gallery post</a></h4>
                                            <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>   
                                        </div>                 
                                    </li>
                                </ul>
                            </div><!-- Recent Posts -->
                            <div class="sidebar-widget mb-50">
                                <h4>Tags</h4>
                                <ul class="tags">
                                    <li><a href="#">Audio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Magazine</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Post</a></li>
                                    <li><a href="#">Quotes</a></li>
                                </ul>
                            </div><!-- Tag -->
                        </div><!-- /Sidebar Wrapper -->
                    </div>
                    <div class="col-md-9 xs-padding">
                        <div class="blog-items row">
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-1.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Standard gallery post</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 1 -->
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-2.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Blog post with couple photos</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 2 -->
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-3.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Standard gallery post</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 3 -->
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-4.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Blog post with couple photos</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 4 -->
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-5.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Standard gallery post</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 5 -->
                            <div class="col-md-6 padding-15">
                                <div class="blog-post">
                                    <img src="img/post-6.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                        <h3><a href="#">Blog post with couple photos</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div><!-- Post 6 -->
                        </div>
                        <ul class="pagination_wrap mt-30">
                            <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                        </ul><!-- Pagination -->
                    </div><!-- Blog Posts -->
                </div>
            </div>
        </section><!-- /Blog Section -->
        
        <section class="widget-section padding">
            <div class="container">
                <div class="widget-wrap row">
                    <div class="col-md-4 xs-padding">
                        <div class="widget-content">
                            <img src="img/logo-light.png" alt="logo">
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