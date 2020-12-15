<?php
$fa=$_POST['fa'];
$staffid=$_POST['staffid'];
$name=$_POST["name"];
$uname=base64_encode($_POST["uname"]);
$pass=base64_encode($_POST['pass']);
$addr=$_POST["addre"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$mail=$_POST["mail"];
$phone=$_POST["phone"];
$status="unfreeze";
$status1="nostatus";
include('../connection.php');
$query2 = "SELECT * FROM tbl_login where uname='$uname' and pass='$pass'";
                             $exe2=mysqli_query($con,$query2);
                               if($rowval2=mysqli_fetch_array($exe2))
                                    {
                                     header("location: adm_addstaff.php?fac=$fa&exist");
                                     }
                                     else{
                             $query1 = "SELECT * FROM tbl_usertype where utype='Staff'";
                             $exe1=mysqli_query($con,$query1);
                               while($rowval=mysqli_fetch_array($exe1))
                                    {
                                    $utype_id=$rowval['utype_id'];
                                    } 
									
                                 $ins="insert into tbl_staff(staff_id,name,address,gender,mail,dob,phone,status) values('$staffid','$name','$addr','$gender','$mail','$dob','$phone','$status1')";
								$exe=mysqli_query($con,$ins);
								$ins1="insert into tbl_staffid(staff_id) values('$staffid')";
								$exe1=mysqli_query($con,$ins1);
								$ins2="insert into tbl_login(u_id,uname,pass,u_type_id,status) values('$staffid','$uname','$pass','$utype_id','$status')";
								$exe2=mysqli_query($con,$ins2);
								header("location: adm_home.php?fac=$fa&msg=5&conte=Staff_Data");
                                          }

?>