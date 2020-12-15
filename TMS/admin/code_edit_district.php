<?php
$fa=$_POST['fa'];
$dis_id=$_POST['dis_id'];
$name=$_POST['name'];
$desc=$_POST['desc'];
include('../connection.php');
$ins="UPDATE tbl_district SET dis_name='$name',dis_descri='$desc' WHERE dis_id='$dis_id'";
$exe=mysqli_query($con,$ins);
header("location: adm_viewalldestrict.php?fac=$fa&msg=52&conte=Successfully Updated");
?>