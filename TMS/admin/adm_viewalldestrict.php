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
							<li>View Place details</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>All the Place details</h4>
					
					<table class="table table-striped">
						<thead class="thead-dark" style="background-color: #88c64f; color: #fff;">
						<tr>
						<th>Slno</th>
						<th>District name</th>
						<th>Discription</th>
						<th>Image</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_district where status != 'deleted'";
                        $exe=mysqli_query($con,$query);
						 while($rowval=mysqli_fetch_array($exe))
    					  { 
						      $c=$c+1;
							  $dis_id=$rowval['dis_id']; 
							  $dis_name=$rowval['dis_name']; 
							  $dis_descri=$rowval['dis_descri'];
							    $pic=$rowval['pic'];
							  
							   ?>
						<tr>
						<td><?php echo $c; ?></td>
						<td><?php echo $dis_name; ?></td>
						<td><?php echo $dis_descri; ?></td>
						<td><a href="../pics/<?php echo $pic; ?>" target="_blank"><img src="../pics/<?php echo $pic; ?>" height="70px" width="100px"></a></td>
						<td><a href="adm_edit_dist.php?dis_id=<?php echo urlencode($dis_id);?>&fac=<?php echo urlencode($fa);?>" class="fa fa-edit" title="edit"></a>     <a href="code_delete_dist.php?dis_id=<?php echo urlencode($dis_id);?>&fac=<?php echo urlencode($fa);?>" class="fa fa-trash-o" title="delete"></a></td>
						</tr>
					<?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>