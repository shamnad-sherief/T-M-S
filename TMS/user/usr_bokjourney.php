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
				<div class="dashboard-list-box margin-top-0">
					<h4>Book Vehicle for journey</h4>
					
					<table class="table table-striped">
						<thead class="thead-dark" style="background-color: #88c64f; color: #fff;">
						<tr>
						<th>Slno</th>
						<th>Serial No</th>
						<th>Vehicle type</th>
						<th>Vehicle no</th>
						<th>Vehicle name</th>
						<th>Photo</th>
						<th>Seating capacity</th>
						<th>Rate (per day)</th>
						<th>Rate (additional km)</th>
					    <th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_vehicle where status != 'deleted'";
                        $exe=mysqli_query($con,$query);
						 while($rowval=mysqli_fetch_array($exe))
    					  { 
						      $c=$c+1;
							  $veh_id=$rowval['veh_id']; 
							  $veh_ty=$rowval['veh_ty']; 
							  $veh_no=$rowval['veh_no'];
							   $veh_name=$rowval['veh_name'];
							    $rate=$rowval['rate'];
								 $addi_rate=$rowval['addi_rate']; 
							  $path=$rowval['path']; 
							$se_cap=$rowval['se_cap']; 
								
							   ?>
						<tr>
						<td><?php echo $c;?></td>
						<td><?php echo $veh_id;?></td>
						<td><?php echo $veh_ty;?></td>
						<td><?php echo $veh_no;?></td>
						<td><?php echo $veh_name;?></td>
						<td><a href="../pics/<?php echo $path; ?>"><img src="../pics/<?php echo $path; ?>" height="70px" width="100px"></a></td>
						<td><?php echo $se_cap;?></td>
						<td><?php echo $rate;?></td>
						<td><?php echo $addi_rate;?></td>
						<td><a href="usr_bokjourney1.php?veh_id=<?php echo urlencode($veh_id);?>&fac=<?php echo urlencode($fa);?>" class="fa fa-plus-square" title="Book Now"></a></td>
						</tr>
					<?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>