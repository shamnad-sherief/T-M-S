	<?php
$fa=$_POST['fa'];
$pac_id=$_POST["pac_id"];
$pac_name=$_POST['pac_name'];
$place=$_POST["place"];
$no_days=$_POST['no_days'];
$person=$_POST["person"];
$status='nostatus';
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
 $folder="../maps/";
move_uploaded_file($file_loc,$folder.$file);
echo  $fa.'  '.$pac_id.'  '.$pac_name.'  '.$place.'  '.$no_days.'  '.$person.'  '.$status;	
include('../connection.php');
$ins2="insert into tbl_package(pac_id,pac_nam,places,no_days,person,status,path) values('$pac_id','$pac_name','$place','$no_days','$person','$status','$file')";
$exe2=mysqli_query($con,$ins2);
	header("location: sff_addpackage.php?fac=$fa&msg=5&conte=New Package");

?>