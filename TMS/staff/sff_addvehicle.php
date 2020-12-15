<?php include('sff_header.php'); ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<?php include('sff_sidebar.php'); ?>
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
							<li> Add vehicle</li>
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
							<h3><i class="sl sl-icon-doc"></i> Add vehicle details !</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
								<form action="code_addvehicle.php" method="post" name="form1" enctype="multipart/form-data">
								<?php 
								$p_id=1;
								$query = "SELECT veh_id FROM tbl_vehicle";
								$exe=mysqli_query($con,$query);
								while($rowval=mysqli_fetch_array($exe))
								{
								$p_id=$p_id+1;
								} ?>
								 <input type="text" name="fa" style="display:none" value="<?php echo $fa; ?>" placeholder="Enter the  serial no" required="">
					<input type="hidden" name="ser" value="VEH<?php echo $p_id; ?>" placeholder="Enter the  serial no" required="">
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="veh_ty" placeholder="Enter the vehicle type" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="veh_no" placeholder="Enter the vehicle no" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="veh_name" placeholder="Enter the vehicle Name" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="se_cap" placeholder="Enter the seating capacity" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="file" name="file" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="rate" placeholder="Enter rate (per day)" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="addi_rate" placeholder="Enter rate (additional km)" required="">
									</label>
								</p>
								
								<input type="submit" class="button border fw margin-top-10" name="register" value="Submit" />
							</form>
						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>