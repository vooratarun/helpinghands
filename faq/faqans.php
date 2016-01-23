
<?php
$sno=$_POST['sno'];
$ans=addslashes($_POST['ans']);
$ip=getenv("REMOTE_ADDR");
mysql_connect("localhost","root","9014734454");
mysql_select_db("helpinghand");
mysql_query("UPDATE faqs SET answer='$ans' WHERE sno='$sno' ")or die(mysql_error());

header("location:admin_home.php");
?>
