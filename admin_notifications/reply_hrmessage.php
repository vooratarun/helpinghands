<?php
session_start();
include("db_conf.php");
if(isset($_SESSION['name'])) 
{
	if(isset($_POST['nid']) && isset($_POST['c']))
	{
		$nid=$_POST['nid'];
		$c=$_POST['c'];
		mysql_query("UPDATE hrmessages SET response='$c',reply_status='1' WHERE sno='$nid'");
	}
}

?>
