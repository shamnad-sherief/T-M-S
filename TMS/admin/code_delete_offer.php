<?php
$fa=$_GET['fac'];
$offer_id=$_GET['offer_id'];
$status="deleted";

include('../connection.php');

$ins="UPDATE  tbl_offers SET status='$status' WHERE offer_id='$offer_id'";
$exe=mysqli_query($con,$ins);
header("location: adm_viewoffer.php?fac=$fa&msg=52&conte=Successfully Deleted");
?>