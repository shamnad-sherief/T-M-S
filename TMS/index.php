<?php include('header.php'); ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Banner
================================================== -->
<div class="main-search-container dark-overlay">
	
	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>
						Our Best
						<span class="typed-words"></span>
					</h2>
					<h4>Expolore top-rated attractions, activities and more</h4>
				</div>
			</div>
		</div>

	</div>
	<!-- Video -->
	<div class="video-container">
		<video poster="img/main-search-video-poster.jpg" loop autoplay muted>
			<source src="img/main-search-video1.mp4" type="video/mp4">
		</video>
	</div>

</div>


<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					Packages
					<span>All Special tour packages</span>
				</h3>
			</div>
		</div>
	</div>

	<!-- Carousel / Start -->
	<div class="simple-fw-slick-carousel dots-nav">
			<?php 

			$exe=mysqli_query($con,"select * from tbl_package where status != 'deleted'");
			foreach ($exe as $rowval) { 
			?>
		<!-- Listing Item -->
		<div class="fw-carousel-item">
			<a href="#sign-in-dialog" class="listing-item-container compact popup-with-zoom-anim">
				<div class="listing-item">
					<img src='maps/<?php echo $rowval['path'];?>' alt="">


					<div class="listing-item-content">
						<div class="numerical-rating" data-rating="3.5"></div>
						<h3><?php echo $rowval['pac_nam'];?></h3>
						<span>Place:<?php echo $rowval['places'];?>, Days: <?php echo $rowval['no_days'];?></span>
					</div>
					<span class="like-icon"></span>
				</div>
			</a>
		</div>
		<!-- Listing Item / End -->
<?php } ?>
		

		

	</div>
	<!-- Carousel / End -->


</section>
<!-- Fullwidth Section / End -->


<!-- Container -->
<div class="container">
	<div class="row" >

		<div class="col-md-12">
			<h3 class="headline centered margin-bottom-35 margin-top-70">Popular Place <span>Browse listings in popular places</span></h3>
		</div>
		<?php 

			$exe1=mysqli_query($con,"SELECT * FROM tbl_district where status != 'deleted'");
			foreach ($exe1 as $rowval1) { 
			?>
		<div class="col-md-4">

			<!-- Image Box -->
			<a href="" class="img-box" data-background-image="pics/<?php echo $rowval1['pic'];?>">
				<div class="img-box-content visible">
					<h4><?php echo $rowval1['dis_name'];?> </h4>
				</div>
			</a>

		</div>	
			<?php } ?>
		
		

	</div>
</div>
<!-- Container / End -->
<div class="address-box-container">
		<div class="address-container" data-background-image="images/our-office.jpg"   >
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-center" >
						<div style="background-color: #0095da45;padding: 5px; margin: 10px; border-radius: 5px;">
						<h3 style="color:white;">Feedback</h3>
						<form method="post" action="code_feedbck.php" class=" ">	
							<p class="form-row form-row-wide col-sm-12">
								<label for="username2" style="color:white;">
									<input type="email" class="input-text" name="mail" placeholder="Enter Email-id" required="">
								</label>
							</p>
								
							<p class="form-row form-row-wide col-sm-12">
								<label for="email2" style="color:white;">
									<textarea name="msg" placeholder="Enter your feed back" required=""></textarea>
								</label>
							</p>

							<input type="submit" class="button border fw margin-top-10" name="register" value="Submit" />
	
							</form>
						</div>
					</div>
					<div class="col-sm-6 text-center">
						<div style="background-color: #7fc2415e; padding: 5px; margin: 10px; border-radius: 5px;">
						<h3 style="color:white;">Complaints</h3>
						<form method="post"  action="code_compli.php" class=" ">	
							<p class="form-row form-row-wide col-sm-12">
								<label for="username2" style="color:white;">
									<input name="mail"  type="email" placeholder="Enter Email-id" required="">
								</label>
							</p>
								
							<p class="form-row form-row-wide col-sm-6">
								<label for="email2" style="color:white;">
									<textarea name="comp" placeholder="Enter your complaint" required=""></textarea>
								</label>
							</p>
							<p class="form-row form-row-wide col-sm-6">
								<label for="email2" style="color:white;">
									<textarea name="sug" placeholder="Enter your suggestions" required=""></textarea>
								</label>
							</p>
							<input type="submit" class="button border fw margin-top-10" name="register" value="Submit" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
if(isset($_GET['msg'])){
if($_GET['msg']=='5'){
echo '<script>swal("Success!","'.$_GET['conte'].' Submitted","success");</script>';
}
elseif($_GET['msg']=='404'){
echo '<script>swal("Sorry!","Invalid Username or Password","error");</script>';
}
}
?>
<?php include('footer.php'); ?>