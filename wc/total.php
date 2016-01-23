<?php
	$puc_1 = 0;
	$puc_2 = 0;
	$engg_1 = 0;
	$engg_2 = 0;
	$engg_3 = 0;
	$engg_4 = 0;
	$connection=mysql_connect("localhost","root","9014734454");
	mysql_select_db("money_collection", $connection);
	for($i=1;$i<=12;$i++)
	{
		$name="KAPPA-".$i;
		$result = mysql_query("SELECT money FROM `puc-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$puc_1 = $money_value+$puc_1;
	}
	
	for($i=1;$i<=8;$i++)
	{
		$name="OMEGA-".$i;
		$result = mysql_query("SELECT money FROM `puc-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$puc_1 = $money_value+$puc_1;
	}
	for($i=1;$i<=12;$i++)
	{
		$name="LAMBDA-".$i;
		$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$puc_2 = $money_value+$puc_2;
	}
	for($i=10;$i<=12;$i++)
	{
		$name="OMEGA-".$i;
		$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$puc_2 = $money_value+$puc_2;
	}
	for($i=1;$i<=5;$i++)
	{
		$name="MUE-".$i;
		$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$puc_2 = $money_value+$puc_2;
	}
	for($i=1;$i<=4;$i++)
	{
		$name="CG-".$i;
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_1 = $money_value+$engg_1;
	}
	for($i=1;$i<=2;$i++)
	{
		$name="CF-".$i;
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_1 = $money_value+$engg_1;
	}
	for($i=1;$i<=4;$i++)
	{
		$name="CS-".$i;
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_1 = $money_value+$engg_1;
	}
	for($i=1;$i<=3;$i++)
	{
		$name="CT-".$i;
		$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_1 = $money_value+$engg_1;
	}
	for($i=1;$i<=3;$i++)
	{
		$name="CSE-".$i;
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_2 = $money_value+$engg_2;
	}
	for($i=1;$i<=3;$i++)
	{
		$name="ECE-".$i;
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_2 = $money_value+$engg_2;
	}
	for($i=1;$i<=3;$i++)
	{
		$name="MECH-".$i;
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_2 = $money_value+$engg_2;
	}
	for($i=1;$i<=3;$i++)
	{
		$name="CIVIL-".$i;
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_2 = $money_value+$engg_2;
	}
	for($i=1;$i<=2;$i++)
	{
		$name="MME-".$i;
		$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_2 = $money_value+$engg_2;
	}
	$name="CHEM-1";
	$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
	$money_value = mysql_result($result,0,"money");
	$engg_2 = $money_value+$engg_2;
	for($i=1;$i<=3;$i++)
	{
		$name="CSE-".$i;
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_3 = $money_value+$engg_3;
	}
	for($i=1;$i<=3;$i++)
	{
		$name="ECE-".$i;
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_3 = $money_value+$engg_3;
	}
	for($i=1;$i<=3;$i++)
	{
		$name="MECH-".$i;
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_3 = $money_value+$engg_3;
	}
	for($i=1;$i<=3;$i++)
	{
		$name="CIVIL-".$i;
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_3 = $money_value+$engg_3;
	}
	for($i=1;$i<=2;$i++)
	{
		$name="MME-".$i;
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_3 = $money_value+$engg_3;
	}
	for($i=1;$i<=1;$i++)
	{
		$name="CHEM-".$i;
		$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_3 = $money_value+$engg_3;
	}
	for($i=1;$i<=6;$i++)
	{
		$name="CSE-".$i;
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_4 = $money_value+$engg_4;
	}
	for($i=1;$i<=6;$i++)
	{
		$name="ECE-".$i;
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_4 = $money_value+$engg_4;
	}
	for($i=1;$i<=5;$i++)
	{
		$name="MECH-".$i;
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_4 = $money_value+$engg_4;
	}
	for($i=1;$i<=5;$i++)
	{
		$name="CIVIL-".$i;
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_4 = $money_value+$engg_4;
	}
	for($i=1;$i<=4;$i++)
	{
		$name="MME-".$i;
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_4 = $money_value+$engg_4;
	}
	for($i=1;$i<=2;$i++)
	{
		$name="CHEM-".$i;
		$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
		$money_value = mysql_result($result,0,"money");
		$engg_4 = $money_value+$engg_4;
	}
	mysql_close($connection);
?>
<html>
<head>
	<title>Weekly Collection</title>
    <script type="text/javascript">
		function load_next()
		{

			var bat = document.getElementById("selectbatch");
			var sb=bat.options[bat.selectedIndex].value;
			$.post("./wc/index_3.php",{batch:sb},function(text)
			{
				$("#wc").html(text);
			});
		}
	</script>
</head>
<body>
<div id="wc">
	<table>
        <tr>
           <td colspan="5">
            	<div  style='margin:0 5%;'>
<?php
	include("FusionCharts.php");
	$Color_array = array ("1941A5","AFD8F8","FF0000","FF66CC","9900FF","99FFCC","CCCC00","669900");
	shuffle($Color_array);
	$total_money = $engg_4 + $engg_3 + $engg_2 + $engg_1 + $puc_2 + $puc_1;
	$strXML  = "";
	$strXML = $strXML."<graph caption='Batches and Submitted Money percentages' xAxisName='Batches' yAxisName='Percentage' decimalPrecision='2' formatNumberScale='0'>";
	$categor[0]="Engg-4";$categor[1]="Engg-3";$categor[2]="Engg-2";$categor[3]="Engg-1";$categor[4]="Puc-2";$categor[5]="Puc-1";$categor[6]="Total";
	$categor_money[0]=$engg_4;$categor_money[1]=$engg_3;$categor_money[2]=$engg_2;$categor_money[3]=$engg_1;$categor_money[4]=$puc_2;$categor_money[5]=$puc_1;
	for($i=0;$i<6;$i++)
	{
		$perc=($categor_money[$i]/$total_money)*100;
		$strXML .= "<set name='$categor[$i]' value='$perc' color='$Color_array[$i]' />";
	}
	$strXML .= "</graph>";
	echo '<center>',renderChartHTML("./wc/FCF_Column3D.swf", "", $strXML, "myNext", 800, 450);
?>
            </td>
        </tr>
        <tr>
        	<td colspan="3">
            Select Batch For more Details....
            </td>
            <td colspan="3">
            	<select id="selectbatch" name="batch" onChange="load_next()">
                	<option value="Select">Select</option>
                	<option value="e4">Engg-4</option>
                    <option value="e3">Engg-3</option>
                    <option value="e2">Engg-2</option>
                    <option value="e1">Engg-1</option>
                    <option value="p2">Puc-2</option>
                    <option value="p1">Puc-1</option>
                </select>
            </td>
        </tr>
        <tr>
        	<td colspan="5" align="center">
            	<input type="submit" id="load_submit" value="Click here" style="display:none;"/>
            </td>
        </tr>
    </table>
    </form>
   	</div>
</body>
</html>
