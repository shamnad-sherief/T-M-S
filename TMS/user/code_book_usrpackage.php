	<?php
$fa=$_POST['fa'];
$book_id=$_POST["book_id"];
$pack_id=$_POST['pack_id'];
$pac_nam=$_POST["pac_nam"];
$trip_date=$_POST['trip_date'];
$pers=$_POST["pers"];
$status="nostatus";
include('../connection.php');
$ins2="insert into tbl_pack_book(pack_id,usr_id,date,no_pass,book_id,status) values('$pack_id','$fa','$trip_date','$pers','$book_id','$status')";
$exe2=mysqli_query($con,$ins2);
	header("location: usr_bokpackage2.php?fac=$fa&book_id=$book_id&msg=52&conte=Successfully Booked");

?>