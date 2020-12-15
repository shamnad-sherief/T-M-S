<?php
$fa=$_GET['fac'];
$pac_id=$_GET['pac_id'];
$status="deleted";

include('../connection.php');

$ins="UPDATE tbl_package SET status='$status' WHERE pac_id='$pac_id'";
$exe=mysqli_query($con,$ins);
	header("location: sff_viewpackages.php?fac=$fa&msg=52&conte=Successfully Deleted");

?>