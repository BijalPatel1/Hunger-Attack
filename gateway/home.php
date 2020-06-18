<?php
include 'header.php';
if(!isset($_SESSION['cust']))
{
  header('Location:login.php');
}
?>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(image/bg1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<br><br><br><br><br><br><br><br><br>
              <h1 class="mb-4">Enjoy the best and varieties of Fast Foods</h1>
              
              
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(image/bg2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<br><br><br><br><br><br><br><br><br>
              <h1 class="mb-4">Appetizers and Main Course.</h1>
              
              
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(image/bg3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<br><br><br><br><br><br><br><br><br>
              <h1 class="mb-4">Varieties of Dilicious Deserts. </h1>

              
            </div>

          </div>
        </div>
      </div>
    </section>

    
    <br>
    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(image/about.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Discover</span>
	          <h2 class="mb-4">Our Story</h2>
	        </div>
	        <div>
	  				<p>Launched in Mumbai this year, Hunger Attack provides different varieties of food as per the customer choice. We are present in Mumbai only recently but we will expand in future to many other cities in India and gobally. We are enabling our vision of better food for more people. We not only connect people to food in every context but work closely with restaurants to enable a sustainable ecosystem.</p>
	  			</div>
  			</div>
    	</div>
    </section>

    <br>
      <center><h2 class="mb-4">The Fondest Memories Are Made Around The Table</h2></center>
    <br>
    
    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" 
						style="background-image: url(image/gallery1.jpg);">
							
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" 
						style="background-image: url(image/gallery5.jpg);">
							
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" 
						style="background-image: url(image/gallery4.jpg);">
							
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" 
						style="background-image: url(image/gallery3.jpg);">
							
						</a>
					</div>
        </div>
    	</div>
    </section>

		
    
<br>    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <!-- Chat Bot -->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?62HPce7J63MjbePzLE4SrpdYowe8YmK2";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>

<?php
include 'footer.php';

?>