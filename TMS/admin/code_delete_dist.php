<?php
$fa=$_GET['fac'];
$dis_id=$_GET['dis_id'];
$status="deleted";

include('../connection.php');

$ins="UPDATE tbl_district SET status='$status' WHERE dis_id='$dis_id'";
$exe=mysqli_query($con,$ins);
header("location: adm_viewalldestrict.php?fac=$fa&msg=52&conte=Successfully Deleted");
?>