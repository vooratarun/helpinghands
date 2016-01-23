<?php
	$batch=$_POST['batch'];
	$branch=$_POST['branch'];
	$connection=mysql_connect("localhost","root","9014734454");
	mysql_select_db("money_collection", $connection);
	include("FusionCharts.php");
	$Color_array = array ("1941A5","AFD8F8","FF0000","FF66CC","9900FF","99FFCC","CCCC00","669900");
	shuffle($Color_array);
	$total=0;
	$j=0;$k=0;
	if($batch=="e1")
	{
		if($branch=="sec-a")
		{
			for($i=1;$i<=4;$i++)
			{
				$name="CG-".$i;
				$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CG-".$i;
				$categor_money[$j++]=$money_value;
			}
			for($i=1;$i<=3;$i++)
			{
				$name="CF-".$i;
				$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CF-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="sec-b")
		{
			for($i=1;$i<=4;$i++)
			{
				$name="CS-".$i;
				$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CS-".$i;
				$categor_money[$j++]=$money_value;
			}
			for($i=1;$i<=3;$i++)
			{
				$name="CT-".$i;
				$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CT-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
	}
	else if($batch=="e2")
	{
		if($branch=="cse")
		{
			for($i=1;$i<=3;$i++)
			{
				$name="CSE-".$i;
				$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CS-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="ece")
		{
			for($i=1;$i<=3;$i++)
			{
				$name="ECE-".$i;
				$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="EC-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="mech")
		{
			for($i=1;$i<=3;$i++)
			{
				$name="MECH-".$i;
				$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="ME-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="civil")
		{
			for($i=1;$i<=3;$i++)
			{
				$name="CIVIL-".$i;
				$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CE-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="mme")
		{
			for($i=1;$i<=2;$i++)
			{
				$name="MME-".$i;
				$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="MM-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="chem")
		{
			$name="CHEM-1";
			$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
			$money_value = mysql_result($result,0,"money");
			$total = $money_value+$total;
			$categor[$j]="CH-".$i;
			$categor_money[$j++]=$money_value;
		}
	}
	else if($batch=="e3")
	{
		if($branch=="cse")
		{
			for($i=1;$i<=3;$i++)
			{
				$name="CSE-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CS-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="ece")
		{
			for($i=1;$i<=3;$i++)
			{
				$name="ECE-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="EC-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="mech")
		{
			for($i=1;$i<=3;$i++)
			{
				$name="MECH-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="ME-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="civil")
		{
			for($i=1;$i<=3;$i++)
			{
				$name="CIVIL-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CE-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="mme")
		{
			for($i=1;$i<=2;$i++)
			{
				$name="MME-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="MM-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="chem")
		{
			for($i=1;$i<=1;$i++)
			{
				$name="CHEM-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CH-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
	}
	else if($batch=="e4")
	{
		if($branch=="cse")
		{
			for($i=1;$i<=6;$i++)
			{
				$name="CSE-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CS-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="ece")
		{
			for($i=1;$i<=6;$i++)
			{
				$name="ECE-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="EC-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="mech")
		{
			for($i=1;$i<=5;$i++)
			{
				$name="MECH-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="ME-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="civil")
		{
			for($i=1;$i<=5;$i++)
			{
				$name="CIVIL-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CE-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="mme")
		{
			for($i=1;$i<=4;$i++)
			{
				$name="MME-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="MM-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($branch=="chem")
		{
			for($i=1;$i<=2;$i++)
			{
				$name="CHEM-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="CH-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
	}
	//$categor[$j]="Total";
	//$categor_money[$j++]=$total;
	$strXML  = "";
	$strXML = $strXML."<graph caption='Classes and Submitted Money percentages' xAxisName='Classes' yAxisName='Percentage' decimalPrecision='2' formatNumberScale='12'>";
	for($i=0;$i<$j;$i++)
	{
		if($k==8)$k=0;
		if($categor_money[$i]==0)$perc=0.00;
		else $perc=($categor_money[$i]/$total)*100;
		$strXML .= "<set name='$categor[$i]' value='$perc' color='$Color_array[$k]' />";
		$k++;
	}
	$strXML .= "</graph>";
	echo renderChartHTML("FCF_Column3D.swf", "", $strXML, "myNext", 950, 450);
	mysql_close($connection);
?>
