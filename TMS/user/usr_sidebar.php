<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Booking">
				<li class="active"><a href="usr_home.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li><a href="usr_bokpackage.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>  Book Packages </a></li>
				<li><a  href="usr_bokjourney.php?fac=<?php echo urlencode($fa);?>"><i class="fa fa-calendar-check-o"></i>Book Journey</a></li>
			</ul>
			
			<ul data-submenu-title="View">
				
				<li><a href="usr_viewpackages.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>View packages</a></li>
				<li><a href="usr_acomdation.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Accomdation place</a></li>
				<li><a href="usr_booked_pack.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Book Packages</a></li>
				<li><a href="usr_booked_vehi.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-envelope-open"></i>Book Vehicle</a></li>
			</ul>	

			<ul data-submenu-title="Account">
				<li><a href="usr_feedback.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-user"></i> Feed back</a></li>
				<li><a href="usr_complaint.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-user"></i> Complaint</a></li>
				<li><a href="usr_editprofile.php?fac=<?php echo urlencode($fa);?>"><i class="sl sl-icon-user"></i> Change Password</a></li>
				<li><a href="../logout.php"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>
			
		</div>
	</div>