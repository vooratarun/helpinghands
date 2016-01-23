<?php
include("../admin_notifications/db_conf.php");

if(isset($_POST['Userid']) && isset($_POST['sugto']) && isset($_POST['description']))
{
$Userid=$_POST['Userid'];
$sugto=$_POST['sugto'];
$description=$_POST['description'];
$ip=$_SERVER['REMOTE_ADDR'];
if(mysql_query("INSERT INTO suggestions(Userid,sugto,description,postedtime,postedip) VALUES('$Userid','$sugto','$description',NOW(),'$ip')"))
{
	echo "Submitted";
}
}
?>

