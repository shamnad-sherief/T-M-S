<?php
$mail=$_POST['mail'];
$msg=$_POST["msg"];
date_default_timezone_set('Asia/Kolkata');
$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];
$date = "$date/$month/$year";
$time= "$hour:$min:$sec";
include('connection.php');
$ins2="insert into tbl_feedback(mail,feedback,date,time) values('$mail','$msg','$date','$time')";
$exe2=mysqli_query($con,$ins2);
header("location: index.php?msg=5&conte=Feedback");

?>