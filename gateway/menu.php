<?php
session_start();
require_once 'init.php';
include 'header.php';
if(!isset($_SESSION['cust']))
{
    header('Location : login.php');
}
else
{
$page = 'menu';
include 'header.php';
$sql="SELECT * FROM menu Where menu_categ = 1";
$results = $db->query($sql);

?>


    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(image/menu.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home</a></span> <span class="mr-2">Menu</span>
                    <span class="mr-2"><a href=" bestseller.php">Best-Seller</a></span>
                    <span class="mr-2"><a href="pop.php">Favourite-Dishes</a></span>
                    </p>
            </div>

          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Starter</h3>
        		<?php
			while($product = mysqli_fetch_assoc($results)) : 
			?> 
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img">
        				<img src="<?= $product['item_img'];?>" style="border-radius: 50%; width: 60px; height: 60px;">
        			</div>
        			        			
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?= $product ['item_name']; ?></span></h3>
	        				<span class="price"><?= money($product ['price']); ?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?= $product ['item_desc']; ?></p>
	        			</div>
	        			<button type="button" id="hover" class="btn btn-warning btn-lg float-right" style="background-color: #c49b63; height: 35px;"><a href="cart.php?id=<?=$product['item_id']?>"><p style="color: white;">Add Item</p></a></button>
                       <?php 
                        if($product['like_count'] == 1)
                        {
                            ?>
                        <a href="likeChange.php?id=<?=$product['item_id'];?>"><img src="image/like-red.png" width="20px" height="20px"></a>';
                        <?php 
                    }
                        else
                        {
                        ?> <a href="likeChange.php?id=<?= $product['item_id'];?>"><img src="image/heart.png" width="20px" height="20px"></a>';
                        <?php }
                       ?>
                       

        			</div>
        		</div>

        		<?php endwhile; ?>
        		
        	</div>

        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Main Course</h3>
        		<?php
							$sql1="SELECT * FROM menu Where menu_categ = 2";
							$results1 = $db->query($sql1);
							while($product1 = mysqli_fetch_assoc($results1)) : 
        			?>
        		<div class="pricing-entry d-flex ftco-animate">
        			
        			<div class="img">
        				<img src="<?= $product1['item_img'];?>" style="border-radius: 50%; width: 60px; height: 60px;">
        			</div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?= $product1['item_name'];?></span></h3>
	        				<span class="price"><?=money($product1['price']);?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?= $product1['item_desc'];?></p>
	        			</div>
	        			<button type="button" id="hover" class="btn btn-warning btn-lg float-right" style="background-color: #c49b63; height: 35px;"><a href="cart.php?id=<?=$product1['item_id']?>"><p style="color: white;">Add Item</p></a></button>
                       <?php 
                        if($product1['like_count'] == 1)
                        {
                            ?>
                        <a href="likeChange.php?id=<?=$product1['item_id'];?>"><img src="image/like-red.png" width="20px" height="20px"></a>';
                        <?php 
                    }
                        else
                        {
                        ?> <a href="likeChange.php?id=<?= $product1['item_id'];?>"><img src="image/heart.png" width="20px" height="20px"></a>';
                        <?php }
                       ?>
	        		</div>
	        		
        		</div> 
        		<?php endwhile; ?>
        	</div>
        		
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
        		<?php
							$sql2="SELECT * FROM menu Where menu_categ = 3";
							$results2 = $db->query($sql2);
							while($product2 = mysqli_fetch_assoc($results2)) : 
        			?>
        		<div class="pricing-entry d-flex ftco-animate">
        			
        			<div class="img">
        				<img src="<?= $product2['item_img'];?>" style="border-radius: 50%; width: 60px; height: 60px;">
        			</div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?= $product2['item_name'];?></span></h3>
	        				<span class="price"><?= money($product2['price']);?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?= $product2['item_desc'];?></p>
	        			</div>
	        			<button type="button" id="hover" class="btn btn-warning btn-lg float-right" style="background-color: #c49b63; height: 35px;"><a href="cart.php?id=<?=$product2['item_id']?>"><p style="color: white;">Add Item</p></a></button>
                       <?php 
                        if($product2['like_count'] == 1)
                        {
                            ?>
                        <a href="likeChange.php?id=<?=$product2['item_id'];?>"><img src="image/like-red.png" width="20px" height="20px"></a>';
                        <?php 
                    }
                        else if($product2['like_count'] == 0)
                        {
                        ?> <a href="likeChange.php?id=<?= $product2['item_id'];?>"><img src="image/heart.png" width="20px" height="20px"></a>';
                        <?php }
                       ?>
        			</div>
        		</div>
        			<?php endwhile; ?>
        		</div>
        		
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Milkshakes</h3>
        		<?php
							$sql3="SELECT * FROM menu Where menu_categ = 4";
							$results3 = $db->query($sql3);
							while($product3 = mysqli_fetch_assoc($results3)) : 
        			?>
        		<div class="pricing-entry d-flex ftco-animate">
        			
        			<div class="img">
        				<img src="<?= $product3['item_img'];?>" style="border-radius: 50%; width: 60px; height: 60px;">
        			</div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?= $product3['item_name'];?></span></h3>
	        				<span class="price"><?= money($product3['price']);?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?= $product3['item_desc'];?></p>
	        			</div>
	        			<button type="button" id="hover" class="btn btn-warning btn-lg float-right" style="background-color: #c49b63; height: 35px;"><a href="cart.php?id=<?=$product3['item_id']?>"><p style="color: white;">Add Item</p></a></button>
                       <?php 
                        if($product3['like_count'] == 1)
                        {
                            ?>
                        <a href="likeChange.php?id=<?=$product3['item_id'];?>"><img src="image/like-red.png" width="20px" height="20px"></a>';
                        <?php 
                    }
                        else
                        {
                        ?> <a href="likeChange.php?id=<?= $product3['item_id'];?>"><img src="image/heart.png" width="20px" height="20px"></a>';
                        <?php }
                       ?>
	        		</div>
	        	</div>
	        		<?php endwhile; ?>
        		</div>
        		        	</div>
        </div>
    	</div>
    </section>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php
}
include 'footer.php';
  ?>

  