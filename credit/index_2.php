	<link href="home2.css" rel="stylesheet">

<div id="loading">
<?php
$year = $_POST['year'];
$month = $_POST['month'];
if($month=="Jan")
		$month="01";
	else if($month=="Feb")
		$month="02";
	else if($month=="Mar")
		$month="03";
	else if($month=="Apr")
		$month="04";
	else if($month=="May")
		$month="05";
	else if($month=="Jun")
		$month="06";
	else if($month=="Jul")
		$month="07";
	else if($month=="Aug")
		$month="08";
	else if($month=="Sep")
		$month="09";
	else if($month=="Oct")
		$month="10";
	else if($month=="Nov")
		$month="11";
	else if($month=="Dec")
		$month="12";
$date = $_POST['date']+1;
if($date<10)
{
	$date = "0".$date;
}
$full_date =$date."-".$month."-".$year;
$Batch = $_POST['batch_name'];
$connection=mysql_connect("localhost","root","9014734454") or die('error');
mysql_select_db("money_collection", $connection);
$file_name = $full_date.".html";
$file_contents="";
if (file_exists("./files/".$file_name))
	{
		$file=fopen("./files/".$file_name,"a");
		$file_contents .= "
				<td>";
		if($Batch=="Puc-1")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-302px;width:150px;' >";
		}
		else if($Batch=="Puc-2")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-256px;width:150px;' >";
		}
		else if($Batch=="Engg-1")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-370px;width:150px;' >";
		}
		else if($Batch=="Engg-2")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-370px;width:150px;' >";
		}
		else if($Batch=="Engg-3")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-72px;width:150px;' >";
		}
		else if($Batch=="Engg-4")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-5px;width:150px;' >";
		}
		
		$file_contents .="<tr class='cls'>
							<td colspan='2'>".$Batch."</td>
						</tr>";
	}
else
	{
		$file=fopen("./files/".$file_name,"a");
		$file_contents .= "
<html>
	<head>
		<title>".$full_date." week collection details </title>
		<style type='text/css'>
			.alt{
				background:lightgray;
				}
			.cls{
				background-color:#A7C942;
						color:#ffffff;
				}
		</style>
	</head>
	<body>
		<table border='0' align='center' style='width:800px;'>
			<tr>
				<td>";
		if($Batch=="Puc-1")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-302px;width:100px;' >";
		}
		else if($Batch=="Puc-2")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-256px;width:100px;' >";
		}
		else if($Batch=="Engg-1")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-370px;width:100px;' >";
		}
		else if($Batch=="Engg-2")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-370px;width:100px;' >";
		}
		else if($Batch=="Engg-3")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-72px;width:100px;' >";
		}
		else if($Batch=="Engg-4")
		{
			$file_contents .= "
					<table border='1' style='margin-top:-5px;width:100px;' >";
		}		
					
		$file_contents .= "
						<tr class='cls'>
							<td colspan='2'>".$Batch."</td>
						</tr>";
	}
if($Batch=="Puc-1")
{
	$k=0;
	for($i=1;$i<=12;$i++)
	{
		$name="KAPPA-".$i;
		$post= "kappa-".$i;
		$money = $_POST[$post];
		$result = mysql_query("SELECT money FROM `puc-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `puc-1` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
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
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
	
}
else if($Batch=="Puc-2")
{
	$k=0;
	for($i=1;$i<=12;$i++)
	{
		$name="LAMBDA-".$i;
		$post= "lamda-".$i;
		$money = $_POST[$post];
		$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `puc-2` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
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
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
for($i=1;$i<=5;$i++)
	{
		$name="MUE-".$i;
		$post= "mue-".$i;
		$money = $_POST[$post];
		$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `puc-2` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "

							<td>".$name."</td>

							<td>".$money."</td>

						</tr>";
		 
	}	
}
else if($Batch=="Engg-1")
{
	$k=0;
	for($i=1;$i<=4;$i++)
	{
		$name="CG-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-1` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
	for($i=1;$i<=3;$i++)
	{
		$name="CF-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-1` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	for($i=1;$i<=4;$i++)
	{
		$name="CS-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-1` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
	for($i=1;$i<=3;$i++)
	{
		$name="CT-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-1` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
}
else if($Batch=="Engg-2")
{
	$k=0;
	for($i=1;$i<=3;$i++)
	{
		$name="CSE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	for($i=1;$i<=3;$i++)
	{
		$name="ECE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
	
	for($i=1;$i<=3;$i++)
	{
		$name="MECH-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
	
	for($i=1;$i<=3;$i++)
	{
		$name="CIVIL-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
	
	for($i=1;$i<=2;$i++)
	{
		$name="MME-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	$name="CHEM-1";
	$money = $_POST[$name];
	$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
	$money_value = mysql_result($result,0,"money");
	$money_final = $money_value+$money;
	mysql_query("UPDATE `engg-2` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
	 
}
else if($Batch=="Engg-3")
{
	$k=0;
	for($i=1;$i<=3;$i++)
	{
		$name="CSE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
	
	for($i=1;$i<=3;$i++)
	{
		$name="ECE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	for($i=1;$i<=3;$i++)
	{
		$name="MECH-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	for($i=1;$i<=3;$i++)
	{
		$name="CIVIL-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	for($i=1;$i<=2;$i++)
	{
		$name="MME-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	for($i=1;$i<=1;$i++)
	{
		$name="CHEM-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-3` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
}
else if($Batch=="Engg-4")
{
	$k=0;
	for($i=1;$i<=6;$i++)
	{
		$name="CSE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	for($i=1;$i<=6;$i++)
	{
		$name="ECE-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	for($i=1;$i<=5;$i++)
	{
		$name="MECH-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
	
	for($i=1;$i<=5;$i++)
	{
		$name="CIVIL-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	for($i=1;$i<=4;$i++)
	{
		$name="MME-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}

	for($i=1;$i<=2;$i++)
	{
		$name="CHEM-".$i;
		$money = $_POST[$name];
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$money_final = $money_value+$money;
		mysql_query("UPDATE `engg-4` SET `money`=$money_final WHERE `class`='$name'");
		if($k==0)
		{
			$file_contents.= "
						<tr>
						";
						$k=1;
		}
		else
		{
			$file_contents .= "
						<tr class='alt'>
						";
						$k=0;
		}
			$file_contents .= "
							<td>".$name."</td>
							<td>".$money."</td>
						</tr>";
		 
	}
}
$file_contents .= "</table>
				</td>";
fwrite($file,$file_contents);
fclose($file);
mysql_close($connection);
?>
</div>
<div >Submitted details</div>
<?php
	$file2=fopen("./files/".$full_date.".txt","a");
	fwrite($file2,$Batch."\n");
	fclose($file2);
	echo "<iframe src='./files/".$full_date.".txt' width='300' height='400' frameborder='no' scrolling='no'></iframe>
			<div class='ink-button blue' style='margin-left:500px;' onclick='window.history.back()'>Submit another batch</div>
";
?>

