<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Hunger Attack/init.php';
session_start();

if(!isset($_SESSION['cust']))
{
	session_start();
	$_SESSION = array();
}else
{
	//unset($_SESSION['$cust']);
	//echo "<script>window.open('login.php','_self')</script>";
	session_destroy();
	$_SESSION = array();
}
header('Location: login.php');
?>