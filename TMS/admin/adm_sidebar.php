<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li class="active"><a href="adm_home.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li><a href="adm_addstaff.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i> Add staff</a></li>
				<li><a  href="adm_adddistrict.php?fac=<?php echo urlencode($fa);?>"><i class="fa fa-calendar-check-o"></i> Add Place</a></li>
				<li><a href="adm_addseasonoff.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-wallet"></i> Add Season Offers</a></li>
			</ul>
			
			<ul data-submenu-title="View">
				
				<li><a href="adm_viewusers.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Users</a></li>
				<li><a href="adm_viewpackages.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Packages</a></li>
				<li><a href="adm_viewvehicledetails.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Vehicle details</a></li>
				<li><a href="adm_viewbookingdetails.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Package booking details</a></li>
				<li><a href="adm_viewbookingvehidetails.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Vehicle booking details</a></li>
				<li><a href="adm_viewaccomdation.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Accomdation</a></li>
				<li><a href="adm_viewalldestrict.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>All Place</a></li>
				<li><a href="adm_viewoffer.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Special Offers</a></li>
				<li><a href="adm_viewstaff.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>All Staff</a></li>
				<li><a href="adm_feedback.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Feed back</a></li>
				<li><a href="adm_complaint.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Complaints</a></li>
			</ul>	

			<ul data-submenu-title="Account">
				<li><a href="adm_editprofile.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-user"></i> Change Password</a></li>
				<li><a href="../logout.php"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>
			
		</div>
	</div>