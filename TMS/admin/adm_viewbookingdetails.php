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
							<li>View booking details</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>All the booking details</h4>
					<table class="table table-striped">
						<thead class="thead-dark" style="background-color: #88c64f; color: #fff;">
						<tr>
						<th>Slno</th>
						<th>Book id</th>
						<th>Package name</th>
						<th>user id</th>
						<th>name</th>
						<th>Place</th>
						<th>No of days</th>
						<th>Rate (per person)</th>
						<th>Booked Date</th>
						<th>No. of Person</th>
						<th>Status</th>
						
						</tr>
					</thead>
					<tbody>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_pack_book where status != 'cancelled'";
                        $exe=mysqli_query($con,$query);
						 while($rowval=mysqli_fetch_array($exe))
    					  { 
						      $c=$c+1;
							  $pack_id=$rowval['pack_id']; 
							  $book_id=$rowval['book_id'];
							  $usr_id=$rowval['usr_id']; 
							  $date=$rowval['date'];
							   $no_pass=$rowval['no_pass'];
							    $status=$rowval['status'];
								$query1 = "SELECT * FROM tbl_package where pac_id='$pack_id'";
                        $exe1=mysqli_query($con,$query1);
						 while($rowval1=mysqli_fetch_array($exe1))
    					  { 
						  $pac_nam=$rowval1['pac_nam']; 
							  $places=$rowval1['places'];
							  $no_days=$rowval1['no_days']; 
							  $person=$rowval1['person'];
						  }
						  $query2 = "SELECT * FROM tbl_registration where u_id='$usr_id'";
                        $exe2=mysqli_query($con,$query2);
						 while($rowval2=mysqli_fetch_array($exe2))
    					  { 
						  $name=$rowval2['name']; 
							 
						  }
							   ?>
						<tr>
						<td scope="row"><?php echo $c;?></td>
						<td><?php echo $book_id;?></td>
						<td><?php echo $pac_nam;?></td>
						<td><?php echo $usr_id;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $places;?></td>
						<td><?php echo $no_days;?></td>
						<td><?php echo $person;?></td>
						<td><?php echo $date;?></td>
						<td><?php echo $no_pass;?></td>
						<td><?php echo $status;?></td>
						
						</tr><?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>