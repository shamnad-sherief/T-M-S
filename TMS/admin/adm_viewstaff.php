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
							<li>Staff</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>All the Staff</h4>
					
					<table class="table table-striped">
						<thead class="thead-dark" style="background-color: #88c64f; color: #fff;">
						<tr>
						<th>Slno</th>
						<th>Staff id</th>
						<th>Staff name</th>
						<th>Address</th>
						<th>DOB</th>
						<th>Gender</th>
						<th>Email-id</th>
						<th>Contact no</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_staff where status != 'deleted'";
						$exe=mysqli_query($con,$query);
						while($rowval=mysqli_fetch_array($exe))
						{ 
						$c=$c+1;
						$staff_id=$rowval['staff_id']; 
						$name=$rowval['name']; 
						$address=$rowval['address'];
						$gender=$rowval['gender'];
						$mail=$rowval['mail'];
						$dob=$rowval['dob'];
						$phone=$rowval['phone'];
						?>
						<tr>
						<td><?php echo $c;?></td>
						<td><?php echo $staff_id;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $address;?></td>
						<td><?php echo $dob;?></td>
						<td><?php echo $gender;?></td>
						<td><?php echo $mail;?></td>
						<td><?php echo $phone;?></td>
						<td><a href="adm_edit_staff.php?staff_id=<?php echo urlencode($staff_id);?>&fac=<?php echo urlencode($fa);?>" class="fa fa-edit" title="edit"></a>     <a href="code_delete_staff.php?staff_id=<?php echo urlencode($staff_id);?>&fac=<?php echo urlencode($fa);?>" class="fa fa-trash-o" title="delete"></a></td>
						</tr>
					<?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>