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
							<li> Add Accomdation</li>
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
							<h3><i class="sl sl-icon-doc"></i> Add Accomdation details !</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
								<form action="code_addacco.php" method="post" name="form1" enctype="multipart/form-data">
								<?php 
								$acco_id=1;
								$query = "SELECT acco_id FROM tbl_accoma";
								$exe=mysqli_query($con,$query);
								while($rowval=mysqli_fetch_array($exe))
								{
								$acco_id=$acco_id+1;
								} ?>
								<input type="hidden" name="fa" style="display:none" value="<?php echo $fa; ?>" placeholder="Enter the  serial no" required="">
								<input type="hidden" name="acco_id" placeholder="Enter the accomdation id" value="ACC<?php echo $acco_id; ?>" required="">
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="acco_ty" placeholder="Enter the accomdation type" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="name" placeholder="Enter the name" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="palce" placeholder="Enter the place" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<textarea name="address" placeholder="Enter the Address" required=""></textarea>
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<textarea name="desc" placeholder="Enter the description" required=""></textarea>
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