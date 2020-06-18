<?php 
function money($number)
{
	return '₹'.number_format($number,2);
}

//getting IP address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

	//login cust function
	function login_cust($cust_id)
	{
		$_SESSION['$cust']=$cust_id;
		//echo "<script>window.open('checkout.php','_self')</script>";

		echo "<script>window.open('menu.php','_self')</script>";
	}

	function is_logged_in()
	{
		if((isset($_SESSION['Suser']) && $_SESSION['Suser'] > 0) || (isset($_SESSION['Scust']) && $_SESSION['Scust'] > 0))
		{
			return true;
		}
		return false;
	}
	function login_error_redirect($url='http://localhost/Hunger Attack/login.php')
	{
		$_SESSION['error_flash']= 'You must be logged in to access that page';
		header('Location: '.$url);
	}
	

// creating the cart
function cart()
{
	if(isset($_GET['add_cart']))
	{
		global $db;
		$ip = getIp();
			$pro_id =$_GET['add_cart'];
			$check_pro = $db->query("SELECT * FROM cart WHERE cart_ip='$ip' AND item_id = '$pro_id'");
			$results = mysqli_fetch_assoc($check_pro);
			if(mysqli_num_rows($results) > 0) 
			{
					echo "";
				}
				
			else{
				$insert_pro = "INSERT INTO cart (item_id, cart_ip) VALUES ('$pro_id','$ip')";
				$results = $db->query($insert_pro);
				echo "<script>window.open('menu.php','_self')</script>";
			}
	} 
}


//getting the total item
function total_items()
{
	if(isset($_GET['id']))
	{
		 global $db;
		 $ip = getIp();
		 $get_items = "SELECT * FROM cart WHERE cart_ip='$ip'";
		 $run_items = $db->query($get_items);
		 $count_items = mysqli_num_rows($run_items);
	}
	else {
		global $db;
		$ip = getIp();
		 $get_items = "SELECT * FROM cart WHERE cart_ip='$ip'";
		 $run_items = $db->query($get_items);
		 $count_items = mysqli_num_rows($run_items);
	}
	echo $count_items;
}

//getting the total price 
function total_price()
{
	$total = 0;
	global $db;
	$ip = getIp();
	$sel_price = "SELECT * FROM cart WHERE cart_ip = '$ip'";
	$results = $db->query($sel_price);
	while ($p_price = mysqli_fetch_array($results))
	{
		$pro_id = $p_price['item_id'];
		$pro_price = "SELECT * FROM menu WHERE item_id = '$pro_id'";
		$run_pro_price = $db->query($pro_price);
		while($pp_price = mysqli_fetch_array($run_pro_price))
		{
			$product_price = array($pp_price['price']);
			$values = array_sum($product_price);
			$total += $values;
		}
	}
	echo money($total);
}

?>