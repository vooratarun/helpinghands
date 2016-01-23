<?php
$connection=mysql_connect("localhost","root","9014734454");
mysql_select_db("money_collection", $connection);
$str='';
for($i=1;$i<=8;$i++){
	$str="OMEGA-".$i;
	echo $str.'<br>';
	mysql_query("INSERT INTO `money_collection`.`puc-1` (`class`, `money`) VALUES ('$str', 0)");
}
	
?>
