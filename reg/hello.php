<?php
include 'authenticate.php';

$q="SELECT * form usersdata where 1";
$result=mysql_query($q);
$row=mysql_fetch_array($result) or die(mysql_error());

echo $row['pwd']."<br>";

 
 if($row['pwd']==null){
	 echo "null pwd values...";
	 
	 }
     
?>
