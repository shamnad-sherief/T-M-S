<?php

$fa=$_POST['fa'];
$acco_id=$_POST["acco_id"];
$acco_ty=$_POST['acco_ty'];
$name=$_POST["name"];
$palce=$_POST['palce'];
$address=$_POST["address"];
$desc=$_POST['desc'];
include('../connection.php');
$ins="UPDATE tbl_accoma SET acco_typ='$acco_ty',name='$name',palce='$palce',address='$address',descr='$desc' WHERE  acco_id='$acco_id'";
$exe=mysqli_query($con,$ins);
		header("location: adm_viewaccomdation.php?fac=$fa&&msg=52&conte=Successfully Updated");

?>