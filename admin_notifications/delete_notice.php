<?php
session_start();
include("db_conf.php");
if(isset($_SESSION['name'])) 
{
	if(isset($_POST['nid']))
	{
		$nid=$_POST['nid'];
		mysql_query("UPDATE notifications SET visibility='0' WHERE sno='$nid'");
	}
}

?>
