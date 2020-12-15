<!DOCTYPE html>

<head>

<title>Kerala tourism</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->

<link rel="stylesheet" href="css/main-color.css" id="colors">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="scripts/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container ">

	<!-- Header -->
	<div id="header">
		<div class="container ">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<div class="right-side">
				<div class="header-widget">
					<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>
					<a href="registration.php" class="button border with-icon">Registration <i class="sl sl-icon-plus"></i></a>
				</div>
			</div>
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Sign In</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">
					<form method="post" action="code_login.php" class="login">
						<p class="form-row form-row-wide">
							<label for="username">Username:
								<i class="im im-icon-Male"></i>
								<input type="text" class="user" name="username" placeholder="username" required="">
							</label>
						</p>
						<p class="form-row form-row-wide">
							<label for="password">Password:
								<i class="im im-icon-Lock-2"></i>
								<input type="password" name="password" class="lock" placeholder="Password"required="">
							</label>
							<span class="lost_password">
								<a href="#" >Lost Your Password?</a>
							</span>
						</p>
						<div class="form-row">
							<input type="submit" class="button border margin-top-5" name="login" value="Login" />
							<div class="checkboxes margin-top-10">
								<input id="remember-me" type="checkbox" name="check">
								<label for="remember-me">Remember Me</label>
							</div>
						</div>
						
					</form>
				</div>
			</div>
			<!-- Sign In Popup / End -->

		</div>
	</div>
	<!-- Header / End -->

<?php 
include('connection.php');
?>
</header>