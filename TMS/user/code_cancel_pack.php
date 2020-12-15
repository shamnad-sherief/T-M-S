<?php
$fa=$_GET['fac'];
$book_id=$_GET['book_id'];
$status="cancelled";

include('../connection.php');

$ins="UPDATE tbl_pack_book SET status='$status' WHERE book_id='$book_id'";
$exe=mysqli_query($con,$ins);
	header("location: usr_booked_pack.php?fac=$fa&msg=44&conte=Booked Package Cancelled.");

?>