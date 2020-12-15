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
							<li>Book Vehicle</li>
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
							<h3><i class="sl sl-icon-doc"></i> Book Vehicle !</h3>
						</div>

						
						<!-- Row -->
						<div class="row with-forms text-center">
							<form action="code_book_veh.php" method="post" name="form1">
			<?php $veh_id=$_GET['veh_id'];
							 $query1 = "SELECT * FROM tbl_vehicle where veh_id='$veh_id'";
           					  $result1=mysqli_query($con,$query1);
 							 foreach($result1 as $doc)
							 		{
					
                                  $veh_ty=$doc['veh_ty'];
								   $veh_no=$doc['veh_no'];
								    $veh_name=$doc['veh_name'];
									 $se_cap=$doc['se_cap'];
									 $rate=$doc['rate'];
									 $addi_rate=$doc['addi_rate'];
									$path=$doc['path'];
						}
							 $book=1;
				             $query = "SELECT veh_book_id FROM tbl_veh_book";
                             $exe=mysqli_query($con,$query);
                               while($rowval=mysqli_fetch_array($exe))
                                    {
                                     $book=$book+1;
                                    } ?>
					<input type="text" name="veh_id" value="<?php echo $veh_id; ?>" style="display:none;" readonly="" required="">
					<input type="text" name="fa" value="<?php echo $fa; ?>" style="display:none;" readonly="" required="">
					<input type="hidden" name="veh_book" value="VEHBOOK<?php echo $book; ?>" title="Enter the booking no" readonly="" required="">
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="veh_ty" value="<?php echo $veh_ty; ?>" title=" Vehicle type" readonly="" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="veh_no" value="<?php echo $veh_no; ?>" title=" Vehicle Number" readonly="" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="veh_name" value="<?php echo $veh_name; ?>" title=" Vehicle Name" readonly="" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="se_cap" value="<?php echo $se_cap; ?>" title=" Vehicle Seating capacity" readonly="" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="rate" value="<?php echo $rate; ?>" title="Rate" readonly="" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="text" name="addi_rate" value="<?php echo $addi_rate; ?>" title="Additional Rate" readonly="" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
										<input type="date" name="date_jorn" id="j_date" placeholder="Enter date of journey" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
									<input type="text" name="no_pass" placeholder="Enter total no of passengers" required="">
									</label>
								</p>
								<p class="form-row form-row-wide col-sm-3">
									<label for="username2" style="color:white;">
									<input type="text" name="pick_point" placeholder="Enter pick up point" required="">
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