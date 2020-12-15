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
							<li> Edit packages </li>
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
							<h3><i class="sl sl-icon-doc"></i> Edit packages !</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<form action="code_edit_package.php" method="post" name="form1">
							<?php $pac_id=$_GET['pac_id'];
							$query1 = "SELECT * FROM tbl_package where pac_id='$pac_id'";
							$result1=mysqli_query($con,$query1);
							foreach($result1 as $doc)
							{

							$pac_nam=$doc['pac_nam'];
							$places=$doc['places'];
							$no_days=$doc['no_days'];
							$person=$doc['person'];

							}
							?>
								<input type="text" name="fa" placeholder="Enter the places" style="display:none;" value="<?php echo $fa; ?>" required="">
								
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="pac_id" placeholder="Enter the package id" value="<?php echo $pac_id; ?>" readonly="" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="pac_name" placeholder="Enter the package name" value="<?php echo $pac_nam; ?>" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="place" placeholder="Enter the places" value="<?php echo $places; ?>" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="text" name="no_days" placeholder="Enter no of days" value="<?php echo $no_days; ?>" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="text" name="person" placeholder="Enter rate [pre person]" value="<?php echo $person; ?>" required="">
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