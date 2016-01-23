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
for ($i=0; $i<$total;$i++){
	$row = mysql_fetch_array($result);
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
?>

</body>
</html>
