<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Helping Hands Survey</title>
<link href="style.css" type="text/css"  rel="stylesheet">
</head>

<body>

<?php
include 'authenticate.php';
$query = "select * from survey";
$result = mysql_query($query);
$total = mysql_num_rows($result);
$totallist = Array(0,0,0);
$categories = Array('1.Skin Problems','2.ENT Problems','3.Gynocology');
$b = Array(0,0,0,0,0,0);
$bb = Array("E4","E3","E2","E1","P2","P1");
for ($i=0; $i<$total;$i++){
	$row = mysql_fetch_array($result);
	$id = substr($row[0],0,3);
	if ($id == "N08"){
		$b[0]+=1;
	}else if ($id == "N09"){
		$b[1]+=1;
	}else if ($id == "N10"){
		$b[2]+=1;
	}else if ($id == "N11"){
		$b[3]+=1;
	}else if ($id == "N12"){
		$b[4]+=1;
	}else if ($id == "N13"){
		$b[5]+=1;
	}else{
		echo "";
	}
	
	for ($j=0;$j<3;$j++){
		if ($row[$j+1] == 'yes'){
			$totallist[$j]++;
		}
	}	
}
echo '<table border="0" id="optionstable">';
echo '<tr><td colspan="2">Total students enrolled : '.$total.'</td></tr>';
for ($i=0;$i<3;$i++){
	echo '<tr><td>'.$categories[$i].'</td><td>'.$totallist[$i].'</td></tr>';
}
echo '</table>';


echo '<table border="0" style="position:absolute;	top:420px;	left: 500px;	border: solid 1px blue;	-moz-border-radius : 20px;	/*-moz-box-shadow: 1px 1px 10px 5px #FFFFFF;*/	width: 200px;	height: 220px;	padding: 10px;">';
echo '<tr><td><u><b>Batch</b></u></td><td><u><b>Total</b></u></td></tr>';
for ($i=0;$i<6;$i++){
	echo '<tr><td>'.$bb[$i].'</td><td>'.$b[$i].'</td></tr>';
}
echo '</table>';
?>

</body>
</html>
