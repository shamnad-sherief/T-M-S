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
							<li>Edit Place</li>
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
							<h3><i class="sl sl-icon-doc"></i> Edit Place Details!</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
								<form name="form1" action="code_edit_district.php" method="post" enctype="multipart/form-data">
								<?php $dis_id=$_GET['dis_id'];
								$query1 = "SELECT * FROM tbl_district where dis_id='$dis_id'";
								$result1=mysqli_query($con,$query1);
								foreach($result1 as $doc)
								{

								$dis_name=$doc['dis_name'];
								$dis_descri=$doc['dis_descri'];

								}
								?>	
								<input type="text" name="fa" value="<?php echo $fa; ?>" style="display:none;" readonly="">
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="text" name="dis_id" value="<?php echo $dis_id; ?>" readonly="" requried="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="text" name="name" placeholder="Enter District Name" value="<?php echo $dis_name; ?>" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-12">
									<label for="username2" style="color:white;">
										<textarea name="desc" placeholder="Enter Description"  required=""><?php echo $dis_descri; ?></textarea>
									</label>
								</p>
								
								<input type="submit" class="button border fw margin-top-10" name="register" value="Finish" />
							</form>
						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>