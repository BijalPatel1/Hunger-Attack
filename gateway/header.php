<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require_once 'init.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hunger Attack</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="btnstyle.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
        body{
            background-image: url(image/bg_4.jpg);
        }

    </style>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.html">Hunger Attack<small>We take care when you're hungry.</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	           <li class="nav-item <?php echo ($page == "home" ? "active" : "")?>"><a href="home.php" class="nav-link">Home</a></li> 
	          <li class="nav-item <?php echo ($page == "menu" ? "active" : "")?>"><a href="menu.php" class="nav-link">Menu</a></li>	          
	          <li class="nav-item <?php echo ($page == "about" ? "active" : "")?>"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item <?php echo ($page == "services" ? "active" : "");?>"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item <?php echo ($page == "contact" ? "active" : "")?>"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item cart <?php echo ($page == "cart" ? "active" : "")?>"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span>

	        
	          	<span class="bag d-flex justify-content-center align-items-center"><small><?= total_items() ?></small></span>
                </a></li>
                <li class="nav-item">
                <?php
if(!isset($_SESSION['cust'])) //cust_email
    {
        echo "<a href='login.php' class='nav-link'><span class='glyphicon glyphicon-off'> Login</a></span>";
    }
    else
    {
        echo "<a href='logout.php' class='nav-link'><span class='glyphicon glyphicon-off'>Logout</a></span>";
    }
?>
		</li>	
	          
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
