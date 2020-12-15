<?php
$fa=$_GET['fac'];
$acco_id=$_GET['acco_id'];
$status="deleted";

include('../connection.php');

$ins="UPDATE tbl_accoma SET status='$status' WHERE acco_id='$acco_id'";
$exe=mysqli_query($con,$ins);
	header("location: adm_viewaccomdation.php?fac=$fa&msg=52&conte=Successfully Deleted");

?>