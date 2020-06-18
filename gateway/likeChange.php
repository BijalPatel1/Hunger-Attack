<?php
require_once 'init.php';
if(isset($_GET['id']))
{
  $id = $_GET['id'];
}
else { $id='';}
$id=(int)$id;

$sql="SELECT * FROM menu WHERE item_id ='$id'";
$results = $db->query($sql);
$result1 = mysqli_fetch_assoc($results);

$imgsrc = $result1['like_count'];

if($imgsrc == 1)
{
	$sql2 = "Update menu set like_count = 0 where item_id = $id";
	$r = $db->query($sql2);
}
else
{
	$sql3 = "Update menu set like_count = 1 where item_id = $id";
	$r1 = $db->query($sql3);
}
 header("Location: menu.php");


?>