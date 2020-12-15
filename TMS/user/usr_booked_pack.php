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
							<li>Booked package</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Booked package</h4>
					
					<table class="table table-striped">
						<thead class="thead-dark" style="background-color: #88c64f; color: #fff;">
						<tr>
						<th>Slno</th>
						<th>Book id</th>
						<th>Package id</th>
						<th>Package name</th>
						<th>Place</th>
						<th>No of days</th>
						<th>Rate (per person)</th>
						<th>Booked Date</th>
						<th>No. of Person</th>
						<th>Status</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_pack_book where usr_id='$fa'";
                        $exe=mysqli_query($con,$query);
						 while($rowval=mysqli_fetch_array($exe))
    					  { 
						      $c=$c+1;
							  $pack_id=$rowval['pack_id']; 
							  $book_id=$rowval['book_id']; 
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
							   ?>
						<tr>
						<td><?php echo $c;?></td>
						<td><?php echo $book_id;?></td>
						<td><?php echo $pack_id;?></td>
						<td><?php echo $pac_nam;?></td>
						<td><?php echo $places;?></td>
						<td><?php echo $no_days;?></td>
						<td><?php echo $person;?></td>
						<td><?php echo $date;?></td>
						<td><?php echo $no_pass;?></td>
						<td><?php echo $status;?></td>
						<td><a href="code_cancel_pack.php?book_id=<?php echo urlencode($book_id);?>&fac=<?php echo urlencode($fa);?>" class="fa fa-minus-circle" title="Booking Cancel"></a></td>
						</tr>
					<?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>