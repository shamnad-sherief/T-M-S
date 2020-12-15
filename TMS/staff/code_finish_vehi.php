<?php
$fa=$_GET['fac'];
$book_id=$_GET['book_id'];
$status="Finished";

include('../connection.php');

$ins="UPDATE tbl_veh_book SET status='$status' WHERE veh_book_id='$book_id'";
$exe=mysqli_query($con,$ins);
	header("location: sff_viewbookingvehidetails.php?fac=$fa&msg=52&conte=Successfully Finished");

?>