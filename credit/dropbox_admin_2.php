<?php
$part=$_POST['part'];
echo "<script>alert('".$part."')</script>";
$dat=$_POST['crweek'];
$amount=$_POST['amount'];
if(($amount>0)&&($dat!=""))
{
	mysql_connect('localhost','root','9014734454');
	mysql_select_db('money_collection');
	mysql_query("INSERT INTO dropbox(part,date,money) VALUES('".$part."','".$dat."','".$amount."')") or die(mysql_error());
	$mc=mysql_query("SELECT money FROM dropbox");
	$amount=0;
	while($mccount=mysql_fetch_array($mc))
		{
		$amount+=$mccount['money'];
		}
	
	
	echo "<script language='javascript'>
			alert('Successfully Added<br>Amount=".$amount."');
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
