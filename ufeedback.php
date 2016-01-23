<?php
	$a=$_POST['aa'];
	$b=$_POST['bb'];
	$c=addslashes(strip_tags($_POST['cc']));
	$d=date("d-m-y",mktime(0,0,0,date("m"),date("d"),date("y")));
	$e=getenv("REMOTE_ADDR");
	mysql_connect("localhost","root","9014734454");
	mysql_select_db("helpinghand");
	mysql_query("INSERT INTO ufeedback VALUES('$a','$b','$c','$d','$e')") or die(mysql_error());
echo '<script type="text/javascript">alert("Thank you for your Participation.");document.location.href="index.php"</script>';
?>
