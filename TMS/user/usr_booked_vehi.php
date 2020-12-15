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
							<li>Booked Vehicle</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Booked Vehicle details</h4>
					
					<table class="table table-striped">
						<thead class="thead-dark" style="background-color: #88c64f; color: #fff;">
						<tr>
						<th>Slno</th>
						<th>Book id</th>
						<th>vehicle Number</th>
						<th>Seat capacity</th>
						<th>Rate</th>
						<th>Additional Rate</th>
						<th>Journey Date</th>
						<th>No.of person</th>
						<th>Pick up Address</th>
						<th>Status</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_veh_book where user_id='$fa'";
                        $exe=mysqli_query($con,$query);
						 while($rowval=mysqli_fetch_array($exe))
    					  { 
						      $c=$c+1;
							  $veh_book_id=$rowval['veh_book_id']; 
							  $veh_id=$rowval['veh_id']; 
							  $date=$rowval['date'];
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
						  }
							   ?>
						<tr>
						<td><?php echo $c;?></td>
						<td><?php echo $veh_book_id;?></td>
						<td><?php echo $veh_no;?></td>
						<td><?php echo $se_cap;?></td>
						<td><?php echo $rate;?></td>
						<td><?php echo $addi_rate;?></td>
						<td><?php echo $date;?></td>
						<td><?php echo $no_pass;?></td>
						<td><?php echo $pickpoint;?></td>
						<td><?php echo $status;?></td>
						<td><a href="code_cancel_vehi.php?book_id=<?php echo urlencode($veh_book_id);?>&fac=<?php echo urlencode($fa);?>" class="fa fa-minus-circle" title="Booking Cancel"></a></td>
						</tr>
					<?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>