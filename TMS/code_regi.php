<?php
$uid=$_POST['uid'];
$name=$_POST["name"];
$uname=base64_encode($_POST["uname"]);
$pass=base64_encode($_POST['pass']);
$addr=$_POST["addr"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$mail=$_POST["mail"];
$phone=$_POST["phone"];
$status="unfreeze";
include('connection.php');
$query2 = "SELECT * FROM tbl_login where uname='$uname' and pass='$pass'";
                             $exe2=mysqli_query($con,$query2);
                               if($rowval2=mysqli_fetch_array($exe2))
                                    {
                                     header("location: index.php?exist");
                                     }
                                     else{
                             $query1 = "SELECT * FROM tbl_usertype where utype='Customer'";
                             $exe1=mysqli_query($con,$query1);
                               while($rowval=mysqli_fetch_array($exe1))
                                    {
                                    $utype_id=$rowval['utype_id'];
                                    } 
									
                                 $ins="insert into tbl_registration(u_id,name,address,gender,dob,mail,ph) values('$uid','$name','$addr','$gender','$dob','$mail','$phone')";
								$exe=mysqli_query($con,$ins);
								$ins1="insert into tbl_userid_genl(u_id) values('$uid')";
								$exe1=mysqli_query($con,$ins1);
								$ins2="insert into tbl_login(u_id,uname,pass,u_type_id,status) values('$uid','$uname','$pass','$utype_id','$status')";
								$exe2=mysqli_query($con,$ins2);
								header("location: index.php?msg=5&conte=Details");
                                          }

?>