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

<?php
$sel1=mysqli_query($con,"select count(pac_id) as tot_pro from tbl_package where status!='deleted'");
$tot1=mysqli_fetch_array($sel1);
$sel2=mysqli_query($con,"select count(u_id) as tot_user from tbl_registration");
$tot2=mysqli_fetch_array($sel2);
$sel3=mysqli_query($con,"select count(veh_book_id) as tot_book from tbl_veh_book where status='nostatus'");
$tot3=mysqli_fetch_array($sel3);
$sel4=mysqli_query($con,"select count(pack_id) as tot_book from tbl_pack_book where status='nostatus'");
$tot4=mysqli_fetch_array($sel4);
 ?>
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
							<li>Dashboard</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-1">
					<div class="dashboard-stat-content"><h4><?php echo $tot1['tot_pro']; ?></h4> <span>Total Package</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-2">
					<div class="dashboard-stat-content"><h4><?php echo $tot2['tot_user']; ?></h4> <span>Total Users</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
				</div>
			</div>

			
			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-3">
					<div class="dashboard-stat-content"><h4><?php echo $tot4['tot_book']; ?></h4> <span>Total Package Booked</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
				</div>
			</div>

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-4">
					<div class="dashboard-stat-content"><h4><?php echo $tot3['tot_book']; ?></h4> <span>Total Vehicle Booked</span></div>
					<div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
				</div>
			</div>
		</div>


		<?php include('footer.php'); ?>