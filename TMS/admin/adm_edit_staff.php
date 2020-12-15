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
							<li>Edit Staff Details</li>
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
							<h3><i class="sl sl-icon-doc"></i> Edit Staff!</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<form action="code_staffedit.php" name="form1" method="post">
							<?php $staff_id=$_GET['staff_id'];
							$query1 = "SELECT * FROM tbl_staff where staff_id='$staff_id'";
							$result1=mysqli_query($con,$query1);
							foreach($result1 as $doc)
							{

							$name=$doc['name'];
							$address=$doc['address'];
							$dob=$doc['dob'];
							$mail=$doc['mail'];
							$phone=$doc['phone'];
							}
							?>
								<input type="text" name="fa" style="display:none;" value="<?php echo $fa;?>">
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" placeholder="Staff id" name="staffid" value="<?php echo $staff_id; ?>" required="" readonly="readonly">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="sname" placeholder="Staff Name" value="<?php echo $name; ?>" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="date" name="dob" placeholder="Date of Brith" value="<?php echo $dob; ?>" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										 <input type="text" name="mail" placeholder="Email id" value="<?php echo $mail; ?>" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-6">
									<label for="username2" style="color:white;">
										<input type="text" name="phone" placeholder="Contact No" value="<?php echo $phone; ?>" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-12">
									<label for="username2" style="color:white;">
										<textarea name="addre" placeholder="Address" required="" ><?php echo $address; ?></textarea>
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