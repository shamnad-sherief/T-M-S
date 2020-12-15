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
							<li>Book Package</li>
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
							<h3><i class="sl sl-icon-doc"></i> Book Package !</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<form action="code_book_usrpackage.php" name="form1" method="post">
							<?php $pac_id=$_GET['pac_id'];
							$query1 = "SELECT * FROM tbl_package where pac_id='$pac_id'";
							$result1=mysqli_query($con,$query1);
							foreach($result1 as $doc)
							{

							$pac_nam=$doc['pac_nam'];
							}
							$book=1;
							$query = "SELECT book_id FROM tbl_pack_book";
							$exe=mysqli_query($con,$query);
							while($rowval=mysqli_fetch_array($exe))
							{
							$book=$book+1;
							} ?>
					<input type="text" name="fa" value="<?php echo $fa; ?>" style="display:none;" readonly="">
					<input type="hidden" name="book_id" placeholder="Booking id" value="BOOKED<?php echo $book; ?>" readonly="" required="">
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="pack_id" placeholder="Enter the package id" value="<?php echo $pac_id; ?>" readonly="" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="pac_nam" placeholder="Enter the package name" value="<?php echo $pac_nam; ?>" readonly="" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="date" name="trip_date" id="t_date" placeholder="Enter the Trip Date" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="pers" placeholder="Enter no of Person" required="">
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