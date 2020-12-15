<?php

$fa=$_POST['fa'];
$pac_id=$_POST['pac_id'];
$pac_name=$_POST['pac_name'];
$place=$_POST['place'];
$no_days=$_POST['no_days'];
$person=$_POST['person'];


include('../connection.php');
$ins="UPDATE tbl_package SET pac_nam='$pac_name',places='$place',no_days='$no_days',person='$person' WHERE  pac_id='$pac_id'";
$exe=mysqli_query($con,$ins);
	header("location: sff_viewpackages.php?fac=$fa&msg=52&conte=Successfully Updated");

?>