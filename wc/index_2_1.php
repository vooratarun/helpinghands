<?php
$year = $_POST['year'];
$month = $_POST['month'];
$date = $_POST['date']+1;
$full_date =$date."-".$month."-".$year;
$Batch = $_POST['batch_name'];
$connection=mysql_connect("localhost","root","9014734454");
mysql_select_db("money_collection", $connection);
$file=fopen("./files/".$full_date.".html","a");
$file_contents="";
if (file_exists("./wc/files/" . $file))
	{
		$file_contents .= "<td><table border='2'><tr><td colspan='2'>".$batch."</td></tr>";
	}
else
	{
		$file_contents .= "<html><head><title>".$full_date." week collection details </title></head><body><table><tr><td><table border='2'><tr><td colspan='2'>".$Batch."</td>";
	}
echo "<html><head><title>".$full_date." week collection details </title></head><body><table border='2'><tr><td colspan='2'>".$Batch."</td></tr>";
if($Batch=="Puc-1")
{
	for($i=1;$i<=12;$i++)
	{
		$name="KAPPA-".$i;
		$post= "kappa-".$i;
		$money = $_POST[$post];
		$result = mysql_query("SELECT money FROM `puc-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `puc-1` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
	for($i=1;$i<=8;$i++)
	{
		$name="OMEGA-".$i;
		$post= "omega-".$i;
		$money = $_POST[$post];
		$result = mysql_query("SELECT money FROM `puc-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `puc-1` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
	
}
else if($Batch=="Puc-2")
{
	for($i=1;$i<=12;$i++)
	{
		$name="LAMBDA-".$i;
		$post= "lambda-".$i;
		$money = $_POST[$post];
		$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `puc-2` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=10;$i<=12;$i++)
	{
		$name="OMEGA-".$i;
		$post= "omega-".$i;
		$money = $_POST[$post];
		$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `puc-2` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
for($i=1;$i<=5;$i++)
	{
		$name="MUE-".$i;
		$post= "MUE-".$i;
		$money = $_POST[$post];
		$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `puc-2` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}	
}
else if($Batch=="Engg-1")
{
	for($i=1;$i<=4;$i++)
	{
		$name="CG-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-1` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
	for($i=1;$i<=2;$i++)
	{
		$name="CF-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-1` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=1;$i<=4;$i++)
	{
		$name="CS-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-1` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
	for($i=1;$i<=3;$i++)
	{
		$name="CT-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-1` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
}
else if($Batch=="Engg-2")
{
	for($i=1;$i<=3;$i++)
	{
		$name="CSE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=1;$i<=3;$i++)
	{
		$name="ECE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
	
	for($i=1;$i<=3;$i++)
	{
		$name="MECH-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
	
	for($i=1;$i<=3;$i++)
	{
		$name="CIVIL-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
	
	for($i=1;$i<=2;$i++)
	{
		$name="MME-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	$name="CHEM-1";
	$money = $_POST[$name];
	$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
	$money_value = mysql_result($result,0,"money");
	$money_final = $money_value+$money;
	mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
	$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
	echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
}
else if($Batch=="Engg-3")
{
	for($i=1;$i<=3;$i++)
	{
		$name="CSE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
	
	for($i=1;$i<=3;$i++)
	{
		$name="ECE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=1;$i<=3;$i++)
	{
		$name="MECH-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=1;$i<=3;$i++)
	{
		$name="CIVIL-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=1;$i<=2;$i++)
	{
		$name="MME-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=1;$i<=1;$i++)
	{
		$name="CHEM-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
}
else if($Batch=="Engg-4")
{
	for($i=1;$i<=6;$i++)
	{
		$name="CSE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=1;$i<=6;$i++)
	{
		$name="ECE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=1;$i<=5;$i++)
	{
		$name="MECH-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
	
	for($i=1;$i<=5;$i++)
	{
		$name="CIVIL-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=1;$i<=4;$i++)
	{
		$name="MME-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}

	for($i=1;$i<=2;$i++)
	{
		$name="CHEM-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		$file_contents.= "<tr><td>".$name."</td><td>".$money."</td></tr>";
		echo "<tr><td>".$name."</td><td>".$money."</td></tr>";
	}
}
echo "</table></body></html>";
$file_contents .= "</table></td>";
fwrite($file,$file_contents);
fclose($file);
mysql_close($connection);
echo "<script type='text/javascript'>
	alert('Submited success fully...If your completed all batches then see notifications or else select date again and start entry for other batch.');
</script>";
?>
