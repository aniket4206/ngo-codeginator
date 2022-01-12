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
            .wrapper{
  display: inline-flex;
  background: #F2F2F2;
  height: 100px;
  width: 400px;
  align-items: center;
  justify-content: space-evenly;
  border-radius: 5px;
  padding: 20px 15px;
  /* box-shadow: 5px 5px 30px rgba(0,0,0,0.2); */
}
.wrapper .option{
  background: #fff;
  height: 80%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  margin: 0 15px;
  border-radius: 5px;
  cursor: pointer;
  padding: 0 10px;
  border: 2px solid rgb(253, 253, 253);
  transition: all 0.3s ease;
}
.wrapper .option .dot{
  height: 20px;
  width: 20px;
  background: #ffffff;
  border-radius: 50%;
  position: relative;
}
.wrapper .option .dot::before{
  position: absolute;
  content: "";
  top: 4px;
  left: 4px;
  width: 12px;
  height: 12px;
  background: #0069d9;
  border-radius: 50%;
  opacity: 0;
  transform: scale(1.5);
  transition: all 0.3s ease;
}

#option-1:checked:checked ~ .option-1,
#option-2:checked:checked ~ .option-2,
#option-3:checked:checked ~ .option-3
{
  border-color: #FFA353;
  background: #FFA353;
}
#option-1:checked:checked ~ .option-1 .dot,
#option-2:checked:checked ~ .option-2 .dot
{
  background: #fff;
}
#option-1:checked:checked ~ .option-1 .dot::before,
#option-2:checked:checked ~ .option-2 .dot::before
{
  opacity: 1;
  transform: scale(1);
}
.wrapper .option span{
  font-size: 20px;
  color: black;
}
#option-1:checked:checked ~ .option-1 span,
#option-2:checked:checked ~ .option-2 span,
#option-3:checked:checked ~ .option-3 span
{
  color: #fff;
}
        </style>
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
                    <h2>Donate With Us</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Donate</li>
                    </ol>
                </div>
            </div>
        </div><!-- /Page Header -->
        <section class="contact-section padding">
            <!-- <div id="google_map"> -->
            <!-- <img src="<?= base_url() ?>layout/img/donation.jpg" height="450" width="100%" alt=""/> -->
            </div><!-- /#google_map -->
            <div class="container">
                <div class="row contact-wrap" style="margin-top: 10px;">
                    <div class="col-md-12 xs-padding">
                    <div class="contact-form" >
                                                    <!-- <h2>Donate With US</h2> -->
                            <form method="post" action="<?php echo base_url('donate')?>"><br /><br />
                            <!-- <div class="form-group row">
                                    <div class="col-md-6">
                                    <input class="form-control" value="<?php echo set_value('phone_no'); ?>" name="phone_no" placeholder="Phone Number">
                                    <p style="color: red;"><?php echo form_error('phone_no', "*"); ?></p>                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="form-group colum-row row">
                                    <div class="col-sm-6">
                                    <input class="form-control" value="<?php echo set_value('name'); ?>" name="name" placeholder="Your Name">
                                    <p style="color: red;"><?php echo form_error('name', "*"); ?></p>                                    </div>
                                    <div class="col-sm-6">
                                    <input class="form-control" value="<?php echo set_value('email'); ?>" name="email" placeholder="Your Email" type="email">
                                    <p style="color: red;"><?php echo form_error('email', "*"); ?></p>                                    </div>
                                </div> -->
                             <div class="form-group colum-row row">
                                    <div class="col-sm-6">
                                    <label style="color:black;font-size: 18px;font-weight: bold;">How much would you like to donate?</label>
                                    <input class="form-control" value="<?php echo set_value('amount'); ?>" name="amount" placeholder="Your Amount Here">
                                    <p style="color: red;"><?php echo form_error('amount', "*"); ?></p></div>
                                    <!-- <div class="col-sm-6"> -->
                                    <br/>
                                    <!-- <input class="form-control" value="<?php echo set_value('amount'); ?>" name="amount" placeholder="Your Amount Here">
                                    <input class="form-control" type="radio" name="amount" id="amount" checked>
                                    <label class="for-checkbox-budget" for="amount">
                                        <span data-hover="100">100</span>
                                    </label>
                                    <input class="checkbox-budget" type="radio" name="amount" id="amount-2" checked>
                                    <label class="for-checkbox-budget" for="amount-2">
                                        <span data-hover="500">500</span>
                                    </label>-->
                                    <!-- <input class="checkbox-budget" type="radio" name="amount" id="amount" value="1000">
                                    <label class="for-checkbox-budget" for="amount">
                                        <span data-hover="1000">1000</span>
                                    </label>  -->
                                    
                                    <div class="col-sm-6 wrapper">
                                    
                                    <input type="radio" name="amount" id="option-1" value="100" style="display: none;">
                                    <input type="radio" name="amount" id="option-2" value="500" style="display: none;">
                                    <input type="radio" name="amount" id="option-3" value="1000" style="display: none;">
                                    <label for="option-1" class="option option-1">
                                        <span>100</span>
                                        </label>
                                    <label for="option-2" class="option option-2">
                                        <span>500</span>
                                    </label>
                                    <label for="option-3" class="option option-3">
                                        <span>1000</span>
                                    </label>
                                    
                                </div>
                                </div>
                                
                                <label style="color:black;font-size: 18px;font-weight: bold;">Personal Info.</label>
                                <div class="form-group colum-row row">
                                
                                    <div class="col-sm-6">
                                    <input class="form-control" value="<?php echo set_value('fname'); ?>" name="fname" placeholder="Your First Name">
                                    <p style="color: red;"><?php echo form_error('fname', "*"); ?></p>                                    </div>
                                    <div class="col-sm-6">
                                    <input class="form-control" value="<?php echo set_value('lname'); ?>" name="lname" placeholder="Your Last Name" type="text">
                                    <p style="color: red;"><?php echo form_error('lname', "*"); ?></p>                                    </div>
                                </div>
                                <div class="form-group colum-row row">
                                
                                    <div class="col-sm-6">
                                    <input class="form-control" value="<?php echo set_value('email'); ?>" name="email" placeholder="Your Email">
                                    <p style="color: red;"><?php echo form_error('email', "*"); ?></p>                                    </div>
                                    <div class="col-sm-6">
                                    <input class="form-control" value="<?php echo set_value('phone_no'); ?>" name="phone_no" placeholder="Your Phone">
                                    <p style="color: red;"><?php echo form_error('phone_no', "*"); ?></p>                                    </div>
                                </div>
                               
                                <div class="pay-top sin-payment sin-payment-3">
                                <input id="payment-method-4" class="input-radio" type="radio" value="PayTm" name="paymethodRadio">
                                    <label for="payment-method-4">Pay now &nbsp;&nbsp;&nbsp;<img alt="" src="<?= base_url() ?>layout/img/"></label>
                                    <div class="payment-box payment_method_bacs">
                                        <p>Make your payment now using multiple payments methods available. Ex. Card, UPI, Net Banking, etc.</p>
                                    </div>
                                </div>

                                
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button class="default-btn" type="submit" name="Donation">Donate</button>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                
                            </form>
                        </div>
                    </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 xs-padding">
                        <div class="contact-form">
                            -->
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
                          
                </div>
            </div>
        </section><!-- /Contact Section -->        
      
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