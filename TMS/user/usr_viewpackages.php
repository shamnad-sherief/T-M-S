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
						<th>Package id</th>
						<th>Package name</th>
						<th>Place</th>
						<th>No of days</th>
						<th>Rate (per person)</th>
						<th>Map</th>
						</tr>
					</thead>
					<tbody>
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
						<tr>
						<td><?php echo $c;?></td>
						<td><?php echo $pac_id;?></td>
						<td><?php echo $pac_nam;?></td>
						<td><?php echo $places;?></td>
						<td><?php echo $no_days;?></td>
						<td><?php echo $person;?></td>
						<td><a href="../maps/<?php echo $path; ?>" target="_blank" class="fa fa-eye" title="View Map"></a></td>
						</tr>
					<?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>