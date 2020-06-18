<?php
require_once 'init.php';

session_start();
$_SESSION['cust']="";
if(isset($_POST['submit']))
{
	if(isset($_POST['name']) && (isset($_POST['password'])))
	{
		$name = $_POST['name'];
		$pass = $_POST['password'];

		$sql = "SELECT * FROM customer WHERE cust_email='".$name."' AND cust_pass = '".$pass."'";
		$result = $db->query($sql);

		if(mysqli_num_rows($result) == 1)
		{
			$_SESSION['cust'] = $name;
			header("Location: home.php");
		}
		else
		{
			echo "Log in failed";
		}
	}
	else
	{
		echo "Enter all the fields";
	}

}

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<title>Login Page</title>

</head>
<body >
	<div>
		
		<img src="image/login2.jpg" width="50%">

		<span class="sp-form">
			
		 <div class="form">

		  <ul class="tab-group">
		    <li class="tab active"><a href="#login">Log In</a></li>
		    <li class="tab"><a href="#signup">Sign Up</a></li>
		  </ul>

		  <div class="tab-content">
		    <div id="login">
		      <h1>Welcome Back!</h1>
				<form action="login.php" method="post" >

			        <div class="field-wrap">
			          <label>
			              Email Address<span class="req">*</span>
			          </label>
			          <input type="email" placeholder="Enter Email Address" name="name" required autocomplete="off" />
			        </div>

			        <div class="field-wrap">
			          <label>
			              Password<span class="req">*</span>
			          </label>
			          <input type="password" name="password" placeholder="Enter Password" required autocomplete="off" />
			        </div>

			        <button class="button button-block" /><input type="submit" name="submit" value="Log In" style="border: none;"></button>
				</form>
			</div>



			<div id="signup">
		      <h1>Sign Up for Free</h1>
				<form action="signup.php" method="post">
					<div class="top-row">
			          <div class="field-wrap">
			            <label>
			                First Name<span class="req">*</span>
			            </label>
			            <input type="text" placeholder="Enter First Name" name="fname" pattern="[A-Za-z]{3,30}" title="3 to 30 characters, numbers not allowed" required autocomplete="off" />
			          </div>

			          <div class="field-wrap">
			            <label>
			                Last Name<span class="req">*</span>
			            </label>
			            <input type="text" placeholder="Enter Last Name" name="lname" pattern="[A-Za-z]{3,30}" title="3 to 30 characters, numbers not allowed" required autocomplete="off" />
			          </div>
		        	</div>

			        <div class="field-wrap">
			          <label>
			              Email Address<span class="req">*</span>
			          </label>
			          <input type="email" placeholder="Enter Email Address" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="example: abc@gmail.com" required autocomplete="off" />
			        </div>

			        <div class="field-wrap">
			          <label>
			              Password<span class="req">*</span>
			          </label>
			          <input type="password" placeholder="Enter Password" name="passw" pattern="([a-zA-Z0-9\s]){5,16}" title="Password length Six to 10 characters" required autocomplete="off" id="password" />
			        </div>

			        <div class="field-wrap">
			          <label>
			              Confirm Password<span class="req">*</span>
			          </label>
			          <input type="password" placeholder="Repeat Password" name="cpass" required autocomplete="off" id="confirm_password" />
			        </div>

		        	<input type="submit" name="submit1" value="Sign Up" class="button button-block" /></button>
		        </form>
			</div>

		  </div>
		  <!-- tab-content -->

		</div>
		<!-- /form -->
		    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		    <script src="js/login.js"></script>

	</span>
	</div>
</body>
</html>