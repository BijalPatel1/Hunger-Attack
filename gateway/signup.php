<?php

require_once 'init.php';

if (isset($_POST['submit1'])) 
{
	if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['passw']) && isset($_POST['cpass']))
	{
		$f_name = $_POST['fname'];
		$l_name = $_POST['lname'];
		$email1 = $_POST['email'];
		$password = $_POST['passw'];
		$cpassw = $_POST['cpass'];

		if($cpassw == $password)
		{
			$sql = "insert into customer (cust_fname, cust_lname, cust_email, cust_pass) values ('$f_name','$l_name','$email1','$password')";
			$db -> query($sql);
			header("Location:home.php");

		}
	}
}

?>