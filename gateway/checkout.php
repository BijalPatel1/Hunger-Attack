<?php

include 'header.php';
if(isset($_GET['totalA']))
{
$amount=$_GET['totalA'];
}
$amount=(int)$amount;

$sql1="SELECT * FROM cart";
$results2 = $db->query($sql1);
?>

<div class="row">
	<div class="col-6">

    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate cart-total" style="margin-left: 90px;">
            <form action="#" class="contact-form">
            	<h2 class="h4" style="margin-top: 20px;">Delivery Details</h2>
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Name">
	                </div>
                </div>
                
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Enter Address"></textarea>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </section>

	</div>

	<div class="col-6">
  	<br><br>
	<form method="post" action="payTm/PaytmKit/pgRedirect.php">
		
					<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					
				<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
				
					<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
				
					<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					
					<input type="hidden" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $amount;?>">
					
					<div class="row justify-content-center" style="margin-top: 100px;">
          <div class="col cart-wrap ftco-animate">
            <div class="cart-total mb-3">
              <h3 style="margin-left: 14px">Cart Total</h3>
              <table cellpadding="17">
              	 <thead>
              		<tr>
					    <th>Product</th>
					    <th><center>Quantity</center></th>
					    <th><center>Price(per item)</center></th>
					  </tr>
					  </thead>
					  	<tbody>
              <?php
              	while ($p_price = mysqli_fetch_array($results2))
                    {
                    	$c_id = $p_price['item_id'];
                    	$q = $p_price['quantity'];
                    	$p = $p_price['price'];
                    	$sql2 = "select * from menu where item_id = '$c_id'";
                    	$r = $db->query($sql2);
                            while($res = mysqli_fetch_array($r))
                             {
                             	$n = $res['item_name'];

              ?>
              
              	
					  <tr>
					    <td><?=$n;?></center></td>
					    <td><center><?=$q;?></center></td>
					    <td><center><?=$p;?></center></td>
					  </tr>
					</tbody>
						<?php
		}}?>
              	</table>
				
			
		
              <hr>
              <p class="d-flex total-price">
                <span>Total</span>
                <span><?=$amount;?></span>
              </p>
            </div>


            <p class="text-center">
<input value="CheckOut" type="submit" onclick="" id="hover" class="btn btn-warning py-3 px-4" style="color: white;background-color: #c49b63; height: 50px;">
             </p>

					
				
	</form>
  </div>
 
</div>

<?php
include 'footer.php';
?>