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
							<li>View User Feedbacks</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>All the Feedbacks</h4>
					
					<table class="table table-striped">
						<thead class="thead-dark" style="background-color: #88c64f; color: #fff;">
						<tr>
						<th>Slno</th>
						<th>Email id</th>
						<th>Date</th>
						<th>Time</th>
						<th>Feed back</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_feedback";
						$exe=mysqli_query($con,$query);
						while($rowval=mysqli_fetch_array($exe))
						{ 
						$c=$c+1;
						$mail=$rowval['mail']; 
						$feedback=$rowval['feedback']; 
						$date=$rowval['date'];
						$time=$rowval['time'];

						?>
						<tr>
						<td><?php echo $c; ?></td>
						<td><?php echo $mail; ?></td>
						<td><?php echo $date; ?></td>
						<td><?php echo $time; ?></td>
						<td><?php echo $feedback; ?></td>
						</tr>
					<?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>