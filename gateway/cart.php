<?php

include 'header.php';

if(isset($_GET['id']))
{
  $id = $_GET['id'];
}
else { $id='';}
$id=(int)$id;

$sql="SELECT * FROM menu WHERE item_id ='$id'";
$results = $db->query($sql);
$result1 = mysqli_fetch_assoc($results);
$iprice = $result1['price'];
$ip  = getIp();
if($result1)
{
  $sql1 = "INSERT INTO cart (item_id, price, cart_ip) VALUES ('$id','$iprice','$ip')";
  $db->query($sql1);

  header("Location: menu.php");
}

if(isset($_POST['update_cart']))
              {
                // $qty = $_POST['qty'];
                // $update_qty = "UPDATE cart1 SET quant='$qty'";
                // $run_query = $db->query($update_qty);
                // $_SESSION['qty'] = $qty;
                // $total = $total * $qty;
                if(isset($_POST['qty']))
                {
                $qty = $_POST['qty'];
                $ids = $_POST['id'];
                $array = array_combine($qty,$ids);
                foreach($array as $q => $i)
                {
                  $update_qty = "UPDATE cart SET quantity='$q' WHERE item_id ='$i'";
                  $run_query = $db->query($update_qty);
                  header("Location: cart.php");
                }
    }} 

?>

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(image/cart.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Cart</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home</a></span> <span>Cart</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-cart">
			<div class="container">
        <form action="" method="post">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						       
						      </tr>
						    </thead>
						    <tbody>

                   <?php
                   $total=0;
                   $sql1="SELECT * FROM cart WHERE cart_ip = '$ip'";
                    $results2 = $db->query($sql1);
                    while ($p_price = mysqli_fetch_array($results2))
                         {
                              $pro_id = $p_price['item_id'];
                                $pro_price = "SELECT * FROM menu WHERE item_id = '$pro_id'";
                                $run_pro_price = $db->query($pro_price);
                                    while($pp_price = mysqli_fetch_array($run_pro_price))
                                        {
                                                  $product_price = array($pp_price['price']);
                                                    $product_title = $pp_price['item_name'];
                                                      $single_price = $pp_price['price'];
                                                      $prod_desc = $pp_price['item_desc'];
                                                      $product_image = $pp_price['item_img'];
                                                      $quant = $p_price['quantity'];
          //$values = array_sum($product_price);
                                                          $values = $single_price * $quant;
                                                            $total += $values; 
                              ?>
						      <tr class="text-center">
						        <td class="product-remove"><a href="removecart.php?cid=<?=$pro_id ?>"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img">

						      
                <img src="<?= $product_image;?>" style="width: 100px; height: 100px;"></div></td>
              
						        <td class="product-name">
						        	<h3><?= $product_title; ?></h3>
						        	<p><?= $prod_desc; ?></p>
						        </td>
						        
						        <td class="price"><?= money($single_price); ?></td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	     <input type="hidden" name="id[]" value="<?= $pro_id; ?>">
                              <input type="number" class="quantity form-control input-number" min="1" max="5" size="3" name="qty[]" value="<?=$quant;?>"></td>
                            
                        <!-- <input type="text" name="qty[]" class="quantity form-control input-number" value="<?=$quant;?>" min="1" max="5"> -->
					          	</div>

					          </td>
						        
		
						      </tr><!-- END TR-->

                    <?php }} ?>
                    
						    </tbody>
						  </table>

					  </div>
    			</div>
          <button type="submit" name="update_cart" class="btn btn btn-warning py-3 px-4" style="margin-left: 400px;margin-top: 100px; background-color: #c49b63; width:140px;height: 35px;"><p style="color: white;">Update Cart</p></button>

          <p class="text-center" ><button id="hover" class="btn btn-warning py-3 px-4" style="margin-top: 100px;background-color: #c49b63; height: 35px;">
              <a href="checkout.php?totalA=<?=($total);?>" style="color: white;">Proceed to Checkout</a></button></p>
    		</div>
    		

            
    				
    			</div>
    		</div>
			</div>
    </form>
		</section>

    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<?php
include 'footer.php';
?>