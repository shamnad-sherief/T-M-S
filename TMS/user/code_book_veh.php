	<?php
$fa=$_POST['fa'];
$veh_id=$_POST["veh_id"];
$veh_book=$_POST['veh_book'];
$se_cap=$_POST['se_cap'];
$date_jorn=$_POST["date_jorn"];
$no_pass=$_POST['no_pass'];
$pick_point=$_POST["pick_point"];
$status="nostatus";
include('../connection.php');
if($se_cap >= $no_pass){
$ins2="insert into tbl_veh_book(veh_book_id,veh_id,user_id,date,pickpoint,no_pass,status) values('$veh_book','$veh_id','$fa','$date_jorn','$pick_point','$no_pass','$status')";
$exe2=mysqli_query($con,$ins2);
	header("location: usr_bokjourney2.php?fac=$fa&veh_book=$veh_book&msg=52&conte=Successfully Booked");
}
else{
header("location: usr_bokjourney1.php?fac=$fa&veh_id=$veh_id&msg=44&conte=Running out of seat.");
}
?>