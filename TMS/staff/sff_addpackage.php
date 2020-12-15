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
							<li> Add packages </li>
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
							<h3><i class="sl sl-icon-doc"></i> Add packages !</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<form action="code_add_package.php" method="post" name="form1" enctype="multipart/form-data">
				<?php 
							 $p_id=1;
				             $query = "SELECT pac_id FROM tbl_package";
                             $exe=mysqli_query($con,$query);
                               while($rowval=mysqli_fetch_array($exe))
                                    {
                                     $p_id=$p_id+1;
                                    } ?>
								<input type="hidden" name="fa" placeholder="Enter the places" style="display:none;" value="<?php echo $fa; ?>" required="">
					<input type="hidden" name="pac_id" placeholder="Enter the package id" value="PA<?php echo $p_id; ?>" readonly="" required="">
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="pac_name" placeholder="Enter the package name" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="place" placeholder="Enter the places" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="no_days" placeholder="Enter no of days" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="text" name="person" placeholder="Enter rate [pre person]" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="file" name="file" required=""  title="Add The Map Of This Package" >
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