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
							<li> Edit accomdation </li>
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
							<h3><i class="sl sl-icon-doc"></i> Edit accomdation !</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<form action="code_editacco.php" method="post" name="form1" enctype="multipart/form-data">
							<?php $acco_id=$_GET['acco_id'];
							$query1 = "SELECT * FROM tbl_accoma where acco_id='$acco_id'";
							$result1=mysqli_query($con,$query1);
							foreach($result1 as $doc)
							{
							$acco_id=$doc['acco_id']; 
							$acco_typ=$doc['acco_typ']; 
							$name=$doc['name'];
							$palce=$doc['palce'];
							$address=$doc['address'];
							$descr=$doc['descr'];
							}
							?>
							<input type="text" name="fa" style="display:none" value="<?php echo $fa; ?>" placeholder="Enter the  serial no" required="">
							<input type="hidden" name="acco_id" value="<?php echo $acco_id; ?>" placeholder="Enter the accomdation id" readonly=""  required="">
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="acco_ty" placeholder="Enter the accomdation type" value="<?php echo $acco_typ; ?>" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="name" placeholder="Enter the name" required="" value="<?php echo $name; ?>">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="palce" placeholder="Enter the place" required="" value="<?php echo $palce; ?>">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<textarea name="address" placeholder="Enter the Address" required=""><?php echo $address; ?></textarea>
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<textarea name="desc" placeholder="Enter the description" required=""><?php echo $descr; ?></textarea>
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