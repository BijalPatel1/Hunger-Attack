<?php
include 'header.php';

$sql1="SELECT * FROM menu Where like_count = 1";
$results1 = $db->query($sql1);
?>

<div class="menu1" style="margin-top: 120px; margin-left: 30px; margin-right: 30px">
	<?php
while($product = mysqli_fetch_assoc($results1)) : 
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
	        			<button type="button" id="hover" class="btn btn-warning btn-lg float-right" style="background-color: #c49b63; height: 35px;"><a href="gateway/cart.php?id=<?=$product['item_id']?>"><p style="color: white;">Add Item</p></a></button>
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
<?php

include 'footer.php';
?>