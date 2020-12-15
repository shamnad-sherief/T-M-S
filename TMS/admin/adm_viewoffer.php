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
							<li>Special Offers</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>All the Special Offers</h4>
					
					<table class="table table-striped">
						<thead class="thead-dark" style="background-color: #88c64f; color: #fff;">
						<tr>
						<th>Slno</th>
						<th>Offer Name</th>
						<th>About Special Offer</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$c=0;
						$query = "SELECT * FROM tbl_offers where status='seleted'";
						$exe=mysqli_query($con,$query);
						while($rowval=mysqli_fetch_array($exe))
						{ 
						$c=$c+1;
						$offer_id=$rowval['offer_id']; 
						$offer_nam=$rowval['offer_nam']; 
						$offer_dis=$rowval['offer_dis']; 

						?>
						<tr>
						<td><?php echo $c;?></td>
						<td><?php echo $offer_nam;?></td>
						<td><?php echo $offer_dis;?></td>
						<td><a href="code_delete_offer.php?offer_id=<?php echo urlencode($offer_id);?>&fac=<?php echo urlencode($fa);?>" class="fa fa-trash-o" title="delete"></a></td>
						</tr>
					<?php }?>
						</tbody>
						</table>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>