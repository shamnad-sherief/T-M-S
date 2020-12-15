<?php
$fa=$_GET['fac'];
$veh_id=$_GET['veh_id'];
$status="deleted";

include('../connection.php');

$ins="UPDATE tbl_vehicle SET status='$status' WHERE veh_id='$veh_id'";
$exe=mysqli_query($con,$ins);
	header("location: sff_viewvehicledetails.php?fac=$fa&msg=52&conte=Successfully Deleted");

?>