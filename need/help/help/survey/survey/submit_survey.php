<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title></title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<center>
<div style="padding:120px 500px">
<h2>Helping Hands Survey</h2>
</div>
<?php

include 'authenticate.php';
$idno = $_COOKIE['idno'];

if ($idno == ""){
	header("Location:index.php");
}else{
	$selected = Array();
	for ($i=1; $i<=5; $i++){
		if (isset($_POST['option'.$i])){
			$selected[$i] = 'yes';
		}else{
			$selected[$i] = 'no';
		}
	}
	
	
	mysql_query("insert into survey values('$idno','$selected[1]','$selected[2]','$selected[3]')");
	echo '
            <script>alert("Thank You For Submitting Your Survey");
               window.location="http://10.11.2.92/help";
            </script>
';
	
}

?>
</center>
</body>
</html>
