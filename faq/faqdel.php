<?php
$sno=$_POST['sno'];
mysql_connect('localhost','root','9014734454');
mysql_select_db('helpinghand');
mysql_query("DELETE FROM faqs WHERE sno=$sno;");
header('location:admin_home.php');
?>
