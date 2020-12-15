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
							<li>Add Season Offer</li>
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
							<h3><i class="sl sl-icon-doc"></i> Add Season Offers!</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<form name="form1" action="code_offersadd.php" method="post" enctype="multipart/form-data">
				<?php 
							 $off=1;
				             $query = "SELECT offer_id FROM tbl_offers";
                             $exe=mysqli_query($con,$query);
                               while($rowval=mysqli_fetch_array($exe))
                                    {
                                     $off=$off+1;
                                    } ?>
								<input type="hidden" name="fa" value="<?php echo $fa; ?>" readonly="">
								<input type="hidden" name="off_id" value="OFF<?php echo $off; ?>" readonly="" requried="">
								<p class="form-row form-row-wide col-sm-12">
									<label for="username2" style="color:white;">
										<input type="text" name="off_nam" placeholder="Enter The Offer Name" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-12">
									<label for="username2" style="color:white;">
										<textarea name="desc" placeholder="Enter Description About Offer" required=""></textarea>
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