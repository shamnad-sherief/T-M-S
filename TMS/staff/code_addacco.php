	<?php
$fa=$_POST['fa'];
$acco_id=$_POST["acco_id"];
$acco_ty=$_POST['acco_ty'];
$name=$_POST["name"];
$palce=$_POST['palce'];
$address=$_POST["address"];
$desc=$_POST['desc'];
$status='nostatus';
include('../connection.php');
$ins2="insert into tbl_accoma(acco_id,acco_typ,name,palce,address,descr,status) values('$acco_id','$acco_ty','$name','$palce','$address','$desc','$status')";
$exe2=mysqli_query($con,$ins2);
	header("location: sff_addaccomdation.php?fac=$fa&&msg=5&conte=Accomadation Details");

?>