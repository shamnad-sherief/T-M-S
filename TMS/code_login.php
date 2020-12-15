<?php 
include('connection.php');
$uname = base64_encode($_POST["username"]);
$pass = base64_encode($_POST["password"]);
$username=0;
$password=0;
//echo $uname.$pass;
$query = "SELECT * FROM tbl_login where uname='$uname' and pass='$pass'";
$result = mysqli_query($con,$query);
if($desig=mysqli_fetch_array($result))
 { 

$status= $desig['status'];
$userty=$desig['u_type_id'];
$fa=$desig['u_id'];
$sttt="freeze";
//echo $username.$password.$status.$fa.$userty;
if($status!=$sttt){
echo $fa;
$query2 = "SELECT * FROM tbl_usertype where utype_id='$userty' ";
$exe2=mysqli_query($con,$query2);
while($rowval2=mysqli_fetch_array($exe2))
     {
      $utyp=$rowval2 ['utype'];
      }
if($utyp=='Admin')
 {
 header("location: admin/adm_home.php?fac=$fa"); 
 }
 else if($utyp=='Staff')
 {
 	//echo "hai";
 header("location: staff/sff_home.php?fac=$fa"); 
 }
 else if($utyp=='Customer')
 {
 header("location: user/usr_home.php?fac=$fa"); 
 }

}

}
 else {
header("location: index.php?msg=404"); 
}
?>