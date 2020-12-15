<?php
$fa=$_POST['fa'];
$off_id=$_POST["off_id"];
$off_nam=$_POST["off_nam"];
$desc=$_POST["desc"];
$status="seleted";
include('../connection.php');
move_uploaded_file($file_loc,$folder.$file);
$ins="insert into  tbl_offers(offer_id,offer_nam,offer_dis,status) values('$off_id','$off_nam','$desc','$status')";
$exe=mysqli_query($con,$ins);
header("location: adm_addseasonoff.php?fac=$fa&msg=5&conte=Offers");

?>