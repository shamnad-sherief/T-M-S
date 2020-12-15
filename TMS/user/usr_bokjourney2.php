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
							<li>Book Vehicle</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Booked Vehicle details</h4>
				</div>
				<?php
				$veh_book=$_GET['veh_book'];
							 $query1 = "SELECT * FROM tbl_veh_book where veh_book_id='$veh_book'";
           					  $result1=mysqli_query($con,$query1);
 							 foreach($result1 as $doc)
							 		{
					               $veh_id=$doc['veh_id'];
                                   $usr_id=$doc['user_id'];
							  $query2 = "SELECT * FROM tbl_vehicle where veh_id='$veh_id'";
           					  $result2=mysqli_query($con,$query2);
 							 foreach($result2 as $doc2)
							 		{
									$veh_no=$doc2['veh_no'];
									}
								   $query3 = "SELECT * FROM tbl_registration where u_id='$usr_id'";
           					  $result3=mysqli_query($con,$query3);
 							 foreach($result3 as $doc3)
							 		{
									$name=$doc3['name'];
									}
						}
						?>
				<div id="p1" style="margin-top:15px;display: flex; text-align:center;justify-content: center;">
			    <table width="269" border="1">
                   <tr>
                    <td height="32" colspan="2"><div align="center">Book Vehicle receipt</div></td>
                  </tr>
                  <tr>
                    <td width="133" height="32">Booking id </td>
                    <td width="120"><?php echo $veh_book; ?></td>
                  </tr>
                  <tr>
                    <td height="32">Vehicle id </td>
                    <td><?php echo $veh_id; ?></td>
                  </tr>
                  <tr>
                    <td height="32">Vehicle number </td>
                    <td><?php echo $veh_no; ?></td>
                  </tr>
                  <tr>
                    <td height="32">user Id </td>
                    <td><?php echo $usr_id; ?></td>
                  </tr>
                  <tr>
                    <td height="32">customer Name </td>
                    <td><?php echo $name; ?></td>
                  </tr>
                </table></div>
                <div style="text-align: center; margin-top: 11px;">
        <a onClick="printContent('p1')" style="padding: 10px 27px;background-color: #8bc853; color:#fff;" class="btn">Print Content</a>
        <a style="padding: 10px 27px;background-color: #0071bb; color:#fff;" class="btn "href="usr_home.php?fac=<?php echo urlencode($fa);?>">GO TO NEXT</a></div>
			</div>
		</div>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>

		<?php include('footer.php'); ?>