<?php
$contribution=$_POST['contributor'];
$amount=$_POST['amount'];
if(($amount>0)&&($contribution!=""))
{
	mysql_connect('localhost','root','9014734454');
	mysql_select_db('money_collection');
	$kmk = "KMK Catering donating to Helping Hands every Month Rs.1000/-";
	if($contribution==$kmk)
	{
		$query=mysql_query("SELECT `money` FROM `contribution` WHERE `contributor`= 'KMK Catering donating to Helping Hands every Month Rs.1000/-'");
		$contribution_sum = mysql_result($query,0);
		$amount = $contribution_sum + $amount;
		mysql_query("UPDATE `contribution` SET `money`=$amount WHERE `contributor`='$kmk'");
	}
	else
	{
		mysql_query("INSERT INTO contribution(contributor,money) VALUES('".$contribution."','".$amount."')") or die(mysql_error());
	}
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
