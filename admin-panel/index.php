<?php 
include_once("includes/db_connect.php");
include_once("includes/mfunction.php");
$con    = new Connection();
$chk 	= new Mfunction();

if (isset($_POST['btnLogin'])) {
	$user_name = $_POST['user_name'];
	$password  = $_POST['password'];
    $privilig = $_POST['p'];

    $ret = $chk->loginAdmin($user_name,$password,$privilig);

    if($ret==1){
   echo	"<script>
    	 window.location = 'dashboard.php';
		 </script>";
    }
    else $x=1;

}



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Panel Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Creative Sign In form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="assets/css/loginstyle.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-agile">
		<h1>Welcome to Admin login</h1>
		<div class="w3ls-signup">
			<div class="w3ls-signup-left">
				<img src="assets/images/logo.png" alt="" />
				<h2>Enter the Correct Details to login</h2>
			</div>
			<div class="w3ls-signup-right">
				<div class="login-agileits-top"> 	
					<form action="" method="post"> 
					<input type="hidden" name="p" value="1" > 
						<p>User Name </p>
						<input type="text" autofocus="true" class="name" name="user_name" required>
						<p>Password</p>
						<input type="password" class="password" name="password" required>  
						<?php if(isset($x)){ echo "<p style='color:white;background:red;'>Invalid Login</p>"; } ?>
						<label class="anim">
							<input type="checkbox" class="checkbox">
							<span> Remember me ?</span> 
						</label>   
						<input type="submit" name="btnLogin" value="Sign In"> 
					</form> 	
<!-- 					<div class="wthree-social">
						<h5>or</h5>
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-vk"></i></a></li>
							</ul>
						</div>
					</div> -->
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		<!-- copyright -->
	<!-- 	<div class="copyright">
			<p> © 2017 Creative Sign In Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div> -->
		<!-- //copyright -->  
	</div>	
	<!-- //main --> 
</body>
</html>