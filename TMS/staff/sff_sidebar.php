<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li class="active"><a href="sff_home.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li><a href="sff_addpackage.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i> Add Packages</a></li>
				<li><a  href="sff_addvehicle.php?fac=<?php echo urlencode($fa);?>"><i class="fa fa-calendar-check-o"></i>Add vehicle details</a></li>
				<li><a href="sff_addaccomdation.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-wallet"></i>Add accomdation</a></li>
			</ul>
			
			<ul data-submenu-title="View">
				
				<li><a href="sff_viewpackages.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Packages</a></li>
				<li><a href="sff_viewvehicledetails.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Vehicle details</a></li>
				<li><a href="sff_viewaccomad.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Accomadation details</a></li>
				<li><a href="sff_viewbookingdetails.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Package booking details</a></li>
				<li><a href="sff_viewbookingvehidetails.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Vehicle booking details</a></li>
				
			</ul>	

			<ul data-submenu-title="Account">
				<li><a href="sff_editprofile.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-user"></i> Change Password</a></li>
				<li><a href="../logout.php"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>
			
		</div>
	</div>