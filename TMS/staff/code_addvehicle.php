	<?php
$fa=$_POST['fa'];
$ser=$_POST["ser"];
$veh_ty=$_POST['veh_ty'];
$veh_no=$_POST["veh_no"];
$veh_name=$_POST['veh_name'];
$se_cap=$_POST["se_cap"];
$rate=$_POST['rate'];
$addi_rate=$_POST["addi_rate"];
$status='nostatus';
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
 $folder="../pics/";
move_uploaded_file($file_loc,$folder.$file);
echo  $fa.'  '.$pac_id.'  '.$pac_name.'  '.$place.'  '.$no_days.'  '.$person.'  '.$status;	
include('../connection.php');
$ins2="insert into tbl_vehicle(veh_id,veh_ty,veh_no,veh_name,se_cap,rate,addi_rate,status,path) values('$ser','$veh_ty','$veh_no','$veh_name','$se_cap','$rate','$addi_rate','$status','$file')";
$exe2=mysqli_query($con,$ins2);
	header("location: sff_addvehicle.php?fac=$fa&msg=5&conte=New Vehicle Details");

?>