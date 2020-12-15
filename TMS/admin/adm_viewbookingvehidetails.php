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
							<li>View Vehicle booked details</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>All the Vehicle booked details</h4>
					
					<table class="table table-striped">
						<thead class="thead-dark" style="background-color: #88c64f; color: #fff;">
						<tr>
						<th>Slno</th>
						<th>Book id</th>
						<th>vehicle Number</th>
						<th>Seat capacity</th>
						<th>Rate</th>
						<th>Additional Rate</th>
						<th>User name</th>
						<th>Journey Date</th>
						<th>No.of person</th>
						<th>Pick up Address</th>
						<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_veh_book  where status != 'cancelled'";
                        $exe=mysqli_query($con,$query);
						 while($rowval=mysqli_fetch_array($exe))
    					  { 
						      $c=$c+1;
							  $veh_book_id=$rowval['veh_book_id']; 
							  $veh_id=$rowval['veh_id']; 
							  $date=$rowval['date'];
							   $user_id=$rowval['user_id'];
							   $pickpoint=$rowval['pickpoint'];
							    $no_pass=$rowval['no_pass'];
								$status=$rowval['status'];
								$query1 = "SELECT * FROM tbl_vehicle where veh_id='$veh_id'";
                        $exe1=mysqli_query($con,$query1);
						 while($rowval1=mysqli_fetch_array($exe1))
    					  { 
						  $veh_ty=$rowval1['veh_ty']; 
							  $veh_no=$rowval1['veh_no'];
							  $se_cap=$rowval1['se_cap']; 
							  $rate=$rowval1['rate'];
							  $addi_rate=$rowval1['addi_rate'];
						  } $query2 = "SELECT * FROM tbl_registration where u_id='$user_id'";
                        $exe2=mysqli_query($con,$query2);
						 while($rowval2=mysqli_fetch_array($exe2))
    					  { 
						  $name=$rowval2['name']; 
							 
						  }
							   ?>
						<tr>
						<td><?php echo $c;?></td>
						<td><?php echo $veh_book_id;?></td>
						<td><?php echo $veh_no;?></td>
						<td><?php echo $se_cap;?></td>
						<td><?php echo $rate;?></td>
						<td><?php echo $addi_rate;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $date;?></td>
						<td><?php echo $no_pass;?></td>
						<td><?php echo $pickpoint;?></td>
						<td><?php echo $status;?></td>
						
						</tr>
					<?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>