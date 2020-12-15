<?php
$fa=$_POST['fa'];
$dis_id=$_POST["dis_id"];
$name=$_POST["name"];
$desc=$_POST["desc"];
$status="nostatus";
//echo $fa." ".$dis_id." ".$name." ".$desc." ".$status;
include('../connection.php');
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
 $folder="../pics/";
move_uploaded_file($file_loc,$folder.$file);
$ins="insert into  tbl_district(dis_id,dis_name,dis_descri,pic,status) values('$dis_id','$name','$desc','$file','$status')";
$exe=mysqli_query($con,$ins);
header("location: adm_adddistrict.php?fac=$fa&msg=5&conte=Place");

?>