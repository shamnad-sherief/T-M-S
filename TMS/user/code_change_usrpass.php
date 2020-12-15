<?php
$fa=$_POST['fa'];
$cpass=base64_encode($_POST['cpass']);
$npass=base64_encode($_POST['npass']);
include('../connection.php');
 $query1 = "SELECT * FROM tbl_login where u_id='$fa' and pass='$cpass'";
 $result1=mysqli_query($con,$query1);
  foreach($result1 as $doc)
	{ 
$ins="UPDATE tbl_login SET pass='$npass' WHERE u_id='$fa' ";
$exe=mysqli_query($con,$ins);
}
header("location: usr_editprofile.php?fac=$fa&msg=52&conte=Change Password Successfully");
?>