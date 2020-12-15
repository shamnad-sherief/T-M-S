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
							<li>View Packages</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>All the Packages</h4>
					<ul>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_package where status != 'deleted'";
						$exe=mysqli_query($con,$query);
						while($rowval=mysqli_fetch_array($exe))
						{ 
						$c=$c+1;
						$pac_id=$rowval['pac_id']; 
						$pac_nam=$rowval['pac_nam']; 
						$places=$rowval['places'];
						$no_days=$rowval['no_days'];
						$person=$rowval['person'];
						$path=$rowval['path'];
						?>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="../maps/<?php echo $path; ?>" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><?php echo $pac_nam; ?></h3>
										<span><b>Place:</b><?php echo $places; ?></span><br>
										<span><b>No of days:</b><?php echo $no_days; ?></span><br>
										<span><b>Rate (per person):</b><?php echo $person; ?></span><br>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="adm_edit_package.php?pac_id=<?php echo urlencode($pac_id);?>&fac=<?php echo urlencode($fa);?>" class="button gray"><i class="im im-icon-Edit"></i> Edit</a>
								<a href="code_delete_package.php?pac_id=<?php echo urlencode($pac_id);?>&fac=<?php echo urlencode($fa);?>" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
							</div>
						</li>
					<?php } ?>
						
					</ul>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>