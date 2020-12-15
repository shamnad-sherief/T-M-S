  <?php
// *** Logout the current user.
$logoutGoTo = "index.php";
if (!isset($_SESSION)) {
	
  session_start();
}

include("connection.php");

$_SESSION['userid'] = NULL;
$_SESSION['password'] = NULL;
unset($_SESSION['ID']);
$_SESSION['sat']=0;
		 
if ($logoutGoTo != "") 
{
header("Location: $logoutGoTo");
exit;
}
?>
