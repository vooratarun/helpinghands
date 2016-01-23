<?php
session_start();
include("db_conf.php");
if($_SESSION["user"]!="admin")
		echo <<<s

		<script type="text/javascript">window.location.href="index.php";</script>

s;
		 	$y=date(Y);
 	$y1=date(y)+1;
 	$ye=$y.'-'.$y1;
		$qr=mysql_query("delete from year where year='$ye'") or die(mysql_error());
		echo "<script type='text/javascript'>window.location.href='edit_perc.php';</script>";
?>
