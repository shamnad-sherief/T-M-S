<?php include('sff_header.php'); ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<?php include('sff_sidebar.php'); ?>
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
							<li>View Accomadation details</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>All the Accomadation details</h4>
					
					<table class="table table-striped">
						<thead class="thead-dark" style="background-color: #88c64f; color: #fff;">
						<tr>
						<th>Slno</th>
						<th>Accomadation id</th>
						<th>Type of accomadation</th>
						<th>Name</th>
						<th>Place</th>
						<th>Address</th>
						<th>Description</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_accoma where status != 'deleted'";
						$exe=mysqli_query($con,$query);
						while($rowval=mysqli_fetch_array($exe))
						{ 
						$c=$c+1;
						$acco_id=$rowval['acco_id']; 
						$acco_typ=$rowval['acco_typ']; 
						$name=$rowval['name'];
						$palce=$rowval['palce'];
						$address=$rowval['address'];
						$descr=$rowval['descr'];
						?>
						<tr>
						<td><?php echo $c;?></td>
						<td><?php echo $acco_id;?></td>
						<td><?php echo $acco_typ;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $palce;?></td>
						<td><?php echo $address;?></td>
						<td><?php echo $descr;?></td>
						<td><a href="sff_edit_acco.php?acco_id=<?php echo urlencode($acco_id);?>&fac=<?php echo urlencode($fa);?>" class="fa fa-edit" title="edit"></a>     <a href="code_delete_acco.php?acco_id=<?php echo urlencode($acco_id);?>&fac=<?php echo urlencode($fa);?>" class="fa fa-trash-o" title="delete"></a></td>
						</tr>
					<?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>