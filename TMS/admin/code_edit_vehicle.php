<?php

$fa=$_POST['fa'];
$ser=$_POST["ser"];
$veh_ty=$_POST['veh_ty'];
$veh_no=$_POST["veh_no"];
$veh_name=$_POST['veh_name'];
$se_cap=$_POST["se_cap"];
$rate=$_POST['rate'];
$addi_rate=$_POST["addi_rate"];


include('../connection.php');
$ins="UPDATE tbl_vehicle SET veh_ty='$veh_ty',veh_no='$veh_no',veh_name='$veh_name',se_cap='$se_cap',rate='$rate',addi_rate='$addi_rate' WHERE  veh_id='$ser'";
$exe=mysqli_query($con,$ins);
	header("location: adm_viewvehicledetails.php?fac=$fa&msg=52&conte=Successfully Updated");

?>