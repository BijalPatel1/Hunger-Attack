<?php
$page = 'contact';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include 'header.php';

?>
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(image/contactus.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Contact Us</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home</a></span> <span>Contact</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Contact Information</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Address:</span><a href="#"> Andheri, Mumbai,  Maharshtra - 400056</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Phone:</span> <a href="tel://1234567920">+ 1234 5678 90</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email:</span> <a href="mailto:info@hungerattack.com">info@hungerattack.com</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Website:</span> <a href="#">Hungerattack.com</a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Feedback</h2>
              </div>
            
                <div class="col-md-12 mb-3">
                <p><span>Thank You For Your Feedback!</span></p>
              </div>

              </div>
            </form>

          </div>
        </div>
      </div>

      <br><br>
      <center><a href="https://www.google.com/maps/place/Mangal+Jyot+Building/@19.1129176,72.8355718,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c9c5a77d2575:0x24d157c8f2487b4d!8m2!3d19.1129125!4d72.8377605"><img src="image/maps.png" width="1000" height="370"></a></center>
    </section>

    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<?php

include 'footer.php';
?>