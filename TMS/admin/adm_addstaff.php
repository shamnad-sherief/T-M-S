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
							<li>Add Staff</li>
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
							<h3><i class="sl sl-icon-doc"></i> Add Staff Here!</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<form method="post"  action="code_staffadd.php" class=" ">	
								<?php 
							 $s_id=1;
				             $query = "SELECT staff_id FROM tbl_staffid";
                             $exe=mysqli_query($con,$query);
                               while($rowval=mysqli_fetch_array($exe))
                                    {
                                     $s_id=$s_id+1;
                                    } ?>
									<input type="hidden" name="fa"  value="<?php echo $fa;?>">
									<input type="hidden" placeholder="Staff id" name="staffid" value="ST<?php echo $s_id; ?>" required="" readonly="readonly">
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="name" placeholder="Staff Name" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="date" name="dob" placeholder="Date of Brith" required="" id="dob">
									</label>
								</p>	
								<p class="form-row form-row-wide col-sm-4">
									<label for="username2" style="color:white;">
										<input type="text" name="mail" placeholder="Email id" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-12">
									<label for="username2" style="color:white;">
										<textarea name="addre" placeholder="Address" required="" ></textarea>
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<select name="gender"  required="">
										<option value="">Select The Gender</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										</select>
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="phone" placeholder="Contact No" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="uname" placeholder="User Name" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="password" name="pass" placeholder="Password" required="">
									</label>
								</p>
								<input type="submit" class="button border fw margin-top-10" name="register" value="Add Staff" />
							</form>
						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>