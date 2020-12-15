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
							<li> Edit vehicle </li>
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
							<h3><i class="sl sl-icon-doc"></i> Edit vehicle !</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<form action="code_edit_vehicle.php" method="post" name="form1" enctype="multipart/form-data">
							<?php $veh_id=$_GET['veh_id'];
							$query1 = "SELECT * FROM tbl_vehicle where veh_id='$veh_id'";
							$result1=mysqli_query($con,$query1);
							foreach($result1 as $doc)
							{

							$veh_ty=$doc['veh_ty'];
							$veh_no=$doc['veh_no'];
							$veh_name=$doc['veh_name'];
							$se_cap=$doc['se_cap'];
							$rate=$doc['rate'];
							$addi_rate=$doc['addi_rate'];


							}
							?>

							<input type="text" name="fa" style="display:none" value="<?php echo $fa; ?>" placeholder="Enter the  serial no" required="">
							<input type="hidden" name="ser" value="<?php echo $veh_id; ?>" readonly="" placeholder="Enter the  serial no" required="">
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="veh_ty" value="<?php echo $veh_ty; ?>" placeholder="Enter the vehicle type" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="veh_no" value="<?php echo $veh_no; ?>" placeholder="Enter the vehicle no" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="veh_name" value="<?php echo $veh_name; ?>" placeholder="Enter the vehicle Name" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="text" name="se_cap" value="<?php echo $se_cap; ?>" placeholder="Enter the seating capacity" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="text" name="rate" value="<?php echo $rate; ?>" placeholder="Enter rate (per day)" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="text" name="addi_rate" value="<?php echo $addi_rate; ?>" placeholder="Enter rate (additional km)" required="">
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