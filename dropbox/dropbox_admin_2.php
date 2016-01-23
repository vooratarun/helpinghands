<?php
$dat=$_POST['dat'];
$amount=$_POST['amount'];
if(($amount>0)&&($dat!=""))
{
	mysql_connect('localhost','root','9014734454');
	mysql_select_db('money_collection');
	mysql_query("INSERT INTO dropbox(date,money) VALUES('".$dat."','".$amount."')") or die(mysql_error());
	
	echo "<script language='javascript'>
			alert('Successfully Added');
  			window.location.replace('/help/');
		</script>";
	
}
else
{
	echo "<script language='javascript'>
			alert('Please Enter Details Properly');
  			window.location.replace('/help/');
		</script>";
}
?>
