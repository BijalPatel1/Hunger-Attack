<?php
$page = 'about';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include 'header.php';
?>
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(image/aboutus.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">About Us</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home</a></span> <span>About</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url(image/bg-1.jpg);"  data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
	    <div class="container">
	      <div class="row justify-content-center mb-5">
	        <div class="col-md-7 heading-section text-center ftco-animate">
	        	<span class="subheading">Testimony</span>
	          <h2 class="mb-4">Customers Says</h2>
	          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters">
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony">
	             <blockquote>
	                <p>&ldquo;One of the best food odering website as it provides food delivery with no extra charges.&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                </div>
	                <div class="name align-self-center">Bijal Patel</div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony overlay">
	             <blockquote>
	                <p>&ldquo;Food quality and quantity is amazing and also fast delivery.&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                </div>
	                <div class="name align-self-center">Diksha Sharmar</div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony">
	             <blockquote>
	                <p>&ldquo;Easy to oder from this website and also the website is very catchy is different food dishes.&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                </div>
	                <div class="name align-self-center">Hiren Mistry</div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony overlay">
	             <blockquote>
	                <p>&ldquo;Good website, if you're hungry like hell then this website gives you the fastest service and the food is delivery as it is.&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                </div>
	                <div class="name align-self-center">Yuvraj Parmar</div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	        	<?php
					$ab = "select * from feedback where feed_id = 18";
					$res = $db->query($ab);
					$res1 = mysqli_fetch_assoc($res);
					if($res1) {
	        	?>
	          <div class="testimony">
	            <blockquote>
	              <p>"<?=$res1['message'];?>&ldquo;</p>
	            </blockquote>
	            <div class="author d-flex mt-4">
	              <div class="image mr-3 align-self-center">
	              </div>
	              <div class="name align-self-center"><?=$res1['name'];?></div>
	            </div>
	          </div>
	        </div>
	        <?php
}
	        ?>
	      </div>
	    </div>
	  </section>

    
    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(image/bg-2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="3">0</strong>
		              	<span>Hunger Attack Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="1">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="167">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="50">0</strong>
		              	<span>Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<?php
include 'footer.php';
?>