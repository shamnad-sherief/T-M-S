<?php
$fa=$_GET['fac'];
$staffid=$_GET['staff_id'];
$status="deleted";

include('../connection.php');

$ins="UPDATE tbl_staff SET status='$status' WHERE staff_id='$staffid'";
$exe=mysqli_query($con,$ins);
header("location: adm_viewstaff.php?fac=$fa&msg=52&conte=Successfully Deleted");
?>