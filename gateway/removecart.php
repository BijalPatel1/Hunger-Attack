<?php
require_once 'init.php';
$ip = getIp();
if(isset($_GET['cid']) && !empty($_GET['cid']))
{
	$delete_id = (int)$_GET['cid'];
	$sql4 = "DELETE FROM cart WHERE item_id = '$delete_id' AND cart_ip = '$ip'";
	$db->query($sql4);
	header('Location: cart.php');
}

?>