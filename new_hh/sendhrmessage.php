<?php
session_start();
include("../admin_notifications/db_conf.php");
if(isset($_SESSION['hrid']))
{
if(isset($_POST['msgto']) && isset($_POST['description']))
{
$Userid=$_SESSION['hrid'];
$msgto=$_POST['msgto'];
$description=$_POST['description'];
$ip=$_SERVER['REMOTE_ADDR'];
if(mysql_query("INSERT INTO hrmessages(Userid,msgto,description,postedtime,postedip) VALUES('$Userid','$msgto','$description',NOW(),'$ip')"))
{
	echo "success";
}
}
}
?>

