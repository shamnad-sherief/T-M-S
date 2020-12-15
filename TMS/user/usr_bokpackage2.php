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
							<li>Book Package</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Booked Package details</h4>
				</div>
				<?php
						$book_id=$_GET['book_id'];
						$query1 = "SELECT * FROM tbl_pack_book where book_id='$book_id'";
						$result1=mysqli_query($con,$query1);
						foreach($result1 as $doc)
						{
						$pack_id=$doc['pack_id'];
						$usr_id=$doc['usr_id'];
						$query2 = "SELECT * FROM tbl_package where pac_id='$pack_id'";
						$result2=mysqli_query($con,$query2);
						foreach($result2 as $doc2)
						{
						$pac_nam=$doc2['pac_nam'];
						}
						$query3 = "SELECT * FROM tbl_registration where u_id='$usr_id'";
						$result3=mysqli_query($con,$query3);
						foreach($result3 as $doc3)
						{
						$name=$doc3['name'];
						}
						}
						?>
				<div id="p1" style="margin-top:15px;display: flex; text-align:center; justify-content: center;">
			    <table width="269" border="1">
                  <tr>
                    <td height="32" colspan="2"><div align="center">Book packages receipt</div></td>
                  </tr>
                  <tr>
                    <td width="133" height="32">Booking id </td>
                    <td width="120"><?php echo $book_id; ?></td>
                  </tr>
                  <tr>
                    <td height="32">Package id </td>
                    <td><?php echo $pack_id; ?></td>
                  </tr>
                  <tr>
                    <td height="32">Package name </td>
                    <td><?php echo $pac_nam; ?></td>
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
        <a style="padding: 10px 27px;background-color: #0071bb; color:#fff;" class="btn " href="usr_home.php?fac=<?php echo urlencode($fa);?>">GO TO NEXT</a></div>
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