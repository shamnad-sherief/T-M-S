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
							<li>View Vehicle details</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>All the Vehicle details</h4>
					<ul>
						<?php 
						$query = "SELECT * FROM tbl_vehicle where status != 'deleted'";
                        $exe=mysqli_query($con,$query);
						 while($rowval=mysqli_fetch_array($exe))
    					  { 
							  $veh_id=$rowval['veh_id']; 
							  $veh_ty=$rowval['veh_ty']; 
							  $veh_no=$rowval['veh_no'];
							   $veh_name=$rowval['veh_name'];
							    $rate=$rowval['rate'];
								 $addi_rate=$rowval['addi_rate']; 
							  $path=$rowval['path']; 
							$se_cap=$rowval['se_cap']; 
						?>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="../pics/<?php echo $path; ?>" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><?php echo $veh_name; ?></h3>
										<span><b>Serial No:</b><?php echo $veh_id; ?></span><br>
										<span><b>Vehicle type:</b><?php echo $veh_ty; ?></span><br>
										<span><b>Vehicle no:</b><?php echo $veh_no; ?></span><br>
										<span><b>Seating capacity:</b><?php echo $se_cap; ?></span><br>
										<span><b>Rate (per day):</b><?php echo $rate; ?></span><br>
										<span><b>Rate (additional km):</b><?php echo $addi_rate; ?></span><br>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="adm_edit_veh.php?veh_id=<?php echo urlencode($veh_id);?>&fac=<?php echo urlencode($fa);?>" class="button gray"><i class="im im-icon-Edit"></i> Edit</a>
								<a href="code_delete_veh.php?veh_id=<?php echo urlencode($veh_id);?>&fac=<?php echo urlencode($fa);?>" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
							</div>
						</li>
					<?php } ?>
						
					</ul>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>