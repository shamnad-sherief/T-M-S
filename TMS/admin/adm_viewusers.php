<?php include('adm_header.php'); ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<?php include('adm_sidebar.php'); ?>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>View Users</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> View All the Users</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<ul>
					<?php 
						$c=0;
						$query = "SELECT * FROM tbl_registration where u_id!='$fa'";
                        $exe=mysqli_query($con,$query);
						 while($rowval=mysqli_fetch_array($exe))
    					  { 
						      $c=$c+1;
							   ?>
						<li class="pending-booking" style="list-style: decimal; border-bottom:1px solid #ccc;">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-img"><img src="../img/<?php if($rowval['gender']=='male'){ echo 'avatar.png';}else{ echo 'avatar1.png'; } ?>" alt=""></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><?php echo $rowval['name'];?> <span class="booking-status pending">User id:<?php echo $rowval['u_id'];?></span><span class="booking-status unpaid"><?php echo $rowval['dob']; ?></span></h3>

										<div class="inner-booking-list">
											<h5>Address:</h5>
											<ul class="booking-list">
												<li class="highlighted"><?php echo $rowval['address']; ?></li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Gender:</h5>
											<ul class="booking-list">
												<li class="highlighted"><?php echo $rowval['gender']; ?></li>
											</ul>
										</div>		
														

										<div class="inner-booking-list">
											<ul class="booking-list">
												<li><a href="#" class="__cf_email__"><?php echo $rowval['mail']; ?></a></li>
												<li><?php echo $rowval['ph']; ?></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<?php } ?>
					</ul>		
						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>