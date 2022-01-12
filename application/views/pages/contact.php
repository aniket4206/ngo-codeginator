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
                    <h2>Contact With Us</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->
        
        <section class="contact-section padding">
            <div id="google_map"></div><!-- /#google_map -->
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-md-6 xs-padding">
                        <div class="contact-info">
                        <br/><br/><br/>
                            <h3>Let's connect! </h3>
                            <p>If you feel that you can make a difference in lives, we welcome you to join us! 
</p>
                            <!-- <p>.</p> -->
                            <ul>
                                <li><i class="ti-location-pin"></i> 315 West 33rd Street New York</li>
                                <li><i class="ti-mobile"></i> +1 212 425 8617, +1 212 425 8533</li>
                                <li><i class="ti-email"></i> Youremail@companyname.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="contact-form">
                            <br/><br/><br/>
                            <h3>Drop us a message to reach out to you! </h3><br/>
                            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                            <!-- <form method="post" action="<?php echo base_url('') . 'contact' ?>"><br /><br />
                            <div class="col-md-6">
                                <div class="form-group colum-row row">
                                <input class="form-control" value="<?php echo set_value('name'); ?>" name="name" placeholder="Your Name">
                                <p style="color: red;"><?php echo form_error('name', "*"); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group colum-row row">
                                <input class="form-control" value="<?php echo set_value('email'); ?>" name="email" placeholder="Your Email" type="email">
                                <p style="color: red;"><?php echo form_error('email', "*"); ?></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group organic-form xs-radius">
                                <input class="form-control" value="<?php echo set_value('phone_no'); ?>" name="phone_no" placeholder="Phone Number">
                                <p style="color: red;"><?php echo form_error('phone_no', "*"); ?></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group organic-form xs-radius">
                                <textarea class="form-control" name="massage" placeholder="Your Message" rows="6"><?php echo set_value('massage'); ?></textarea>
                                <p style="color: red;"><?php echo form_error('massage', "*"); ?></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group organic-form xs-radius">
                                <button class="btn btn-brand pill font-bold" type="submit" name="submit">SEND EMAIL</button>
                                </div>
                            </div>
                            </form> -->
                            <form method="post" action="<?php echo base_url('') . 'contact' ?>">
                                <div class="form-group colum-row row">
                                    <div class="col-sm-6">
                                    <input class="form-control" value="<?php echo set_value('name'); ?>" name="name" placeholder="Your Name">
                                    <p style="color: red;"><?php echo form_error('name', "*"); ?></p>                                    </div>
                                    <div class="col-sm-6">
                                    <input class="form-control" value="<?php echo set_value('email'); ?>" name="email" placeholder="Your Email" type="email">
                                    <p style="color: red;"><?php echo form_error('email', "*"); ?></p>                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                    <input class="form-control" value="<?php echo set_value('phone_no'); ?>" name="phone_no" placeholder="Phone Number">
                                    <p style="color: red;"><?php echo form_error('phone_no', "*"); ?></p>                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                    <textarea cols="30" rows="5" class="form-control message" name="massage"  cols="30" rows="5" placeholder="Your Message" rows="6"><?php echo set_value('massage'); ?></textarea>
                                    <p style="color: red;"><?php echo form_error('massage', "*"); ?></p>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button class="default-btn" type="submit" name="submit">Send Message</button>
                                    </div>
                                </div>
                                <br/><br/><br/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->

         <!-- Footer started -->
         <?php include 'footer.php'?>
        <!-- Footer ended -->
        
		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>
	

		<!-- Google Map JS -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGm_weV-pxqGWuW567g78KhUd7n0p97RY"></script>
	
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
    
        <script>

        (function($){ "use strict";

        /*=========================================================================
            Google Map Settings
        =========================================================================*/
                         
            google.maps.event.addDomListener(window, 'load', init);

            function init() {

                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(19.073263681594828, 72.85792565813568), 
                    scrollwheel: false,
                    navigationControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    draggable: false,
                    styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
                };

                var mapElement = document.getElementById('google_map');

                var map = new google.maps.Map(mapElement, mapOptions);

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(19.073263681594828, 72.85792565813568),
                    map: map,
                    title: 'Location!'
                });
            }

        })(jQuery);

        </script>

    </body>
</html>