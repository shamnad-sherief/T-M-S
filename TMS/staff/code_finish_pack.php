<?php
$fa=$_GET['fac'];
$book_id=$_GET['book_id'];
$status="Finished";

include('../connection.php');

$ins="UPDATE tbl_pack_book SET status='$status' WHERE book_id='$book_id'";
$exe=mysqli_query($con,$ins);
	header("location: sff_viewbookingdetails.php?fac=$fa&msg=52&conte=Successfully Finished");

?>