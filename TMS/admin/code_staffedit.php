<?php
$fa=$_POST['fa'];
$staffid=$_POST['staffid'];
$name=$_POST['sname'];
$addre=$_POST['addre'];
$dob=date("d/m/Y", strtotime($_POST['dob']));
$mail=$_POST['mail'];
$phone=$_POST['phone'];
echo $staffid."1 ".$name."2 ".$addre."3 ".$dob."4 ".$mail."5 ".$phone;
include('../connection.php');
$ins="UPDATE tbl_staff SET name='$name',address='$addre',mail='$mail',dob='$dob',phone='$phone' WHERE staff_id='$staffid'";
$exe=mysqli_query($con,$ins);
header("location: adm_viewstaff.php?fac=$fa&msg=52&conte=Successfully Updated");
?>