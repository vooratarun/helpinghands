<?php
include("../admin_notifications/db_conf.php");

if(isset($_POST['Userid']) && isset($_POST['passwd']))
{
$Userid=$_POST['Userid'];
$passwd=$_POST['passwd'];
$ip=$_SERVER['REMOTE_ADDR'];
$log=mysql_query("SELECT * FROM hrs WHERE idnumber='$Userid' && password='$passwd'");
if(mysql_num_rows($log)==1)
{
	session_start();
	$_SESSION['hrid']=$Userid;
	echo "success";
}
else
{
echo "Invalid Details";	
}
}
?>

