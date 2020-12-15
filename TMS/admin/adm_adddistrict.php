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
							<li>Add Place</li>
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
							<h3><i class="sl sl-icon-doc"></i> Add Place!</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<form action="code_district.php" method="post" enctype="multipart/form-data">	
								<?php 
							 $dis=1;
				             $query = "SELECT dis_id FROM tbl_district";
                             $exe=mysqli_query($con,$query);
                               while($rowval=mysqli_fetch_array($exe))
                                    {
                                     $dis=$dis+1;
                                    } ?>
								<input type="hidden" name="fa" value="<?php echo $fa; ?>"  readonly="">
								<input type="hidden" name="dis_id" value="DIS<?php echo $dis; ?>" readonly="" >
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="text" name="name" placeholder="Enter District Name" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input name="file" type="file" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-12">
									<label for="username2" style="color:white;">
										<textarea name="desc" placeholder="Enter Description" required=""></textarea>
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