<?php
	$sno=$_POST['sno'];
	$hid=$_POST['hid'];
	mysql_connect("localhost","root","9014734454");
	mysql_select_db("helpinghand");
	if($hid==0)
	mysql_query("update faqs set status='1' where sno like '$sno'");
	else
		mysql_query("update faqs set status='0' where sno like '$sno'");
	header("location:./admin_home.php");

	?>
