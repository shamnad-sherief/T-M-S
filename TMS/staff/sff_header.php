<!DOCTYPE html>

<head>

<title>Admin||Kerala tourism</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/main-color.css" id="colors">

<script type="text/javascript" src="../scripts/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
</head>

<body>
<?php 
include('../connection.php');
$fa=$_GET['fac']; ?>
<script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
	  </script>
<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="sff_home.php?fac=<?php echo urlencode($fa);?>"><img src="../img/logo.png" alt=""></a>
					<a href="sff_home.php?fac=<?php echo urlencode($fa);?>" class="dashboard-logo"><img src="../img/logo.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name" style="overflow: unset;"><span><img src="../img/avatar.png" alt=""></span>My Account</div>
						<ul>
							<li><a href="../logout.php"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->
<?php 
if(isset($_GET['msg'])){
if($_GET['msg']=='5'){
echo '<script>swal("Success!","'.$_GET['conte'].' Submitted","success");</script>';
}
elseif($_GET['msg']=='52'){
echo '<script>swal("Success!","'.$_GET['conte'].'","success");</script>';
}
}
?>
</header>