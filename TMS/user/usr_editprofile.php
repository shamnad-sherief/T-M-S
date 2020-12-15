<?php include('usr_header.php'); ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<?php include('usr_sidebar.php'); ?>
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
							<li>Complaint</li>
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
							<h3><i class="sl sl-icon-doc"></i> Give Complaint !</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
						<form action="code_change_usrpass.php" method="post" name="form2">
				<input type="text" name="fa" placeholder="Enter the name" value="<?php echo $fa;?>" style="display:none;" required="">
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="password" name="cpass" placeholder="Enter Current password" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
				<input type="password" name="npass" placeholder="Enter new password" required="">
									</label>
								</p>
								
								
								<input type="submit" class="button border fw margin-top-10" name="register" value="Change Password" />
							</form>
						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>