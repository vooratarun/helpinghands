<html>
<head>
	<title>Weekly Collection</title>

    <script type="text/javascript">
		function load_next_2()
		{
			var bat = $("#bat_ch").val();
			if(bat=="e1")
			{
				var brn = document.getElementById("selectbranch_1");
			}
			else
			{
				var brn = document.getElementById("selectbranch_2");
			}
			var sb=brn.options[brn.selectedIndex].value;
			$.post("./wc/index_4.php",{batch:bat,branch:sb},function(text)
			{
				$("#load_branch").html(text);
			});
		}
		function load(id)
			{
				$("#maindiv").load(id);
                	}
	</script>
</head>
<body>
<div id="load_branch" style='margin:0 5%;'>
	<table>
        <tr>
           <td colspan="5">
            	<div  style='margin:0 0%;'>
<?php
	$batch=$_POST['batch'];
	$connection=mysql_connect("localhost","root","9014734454");
	mysql_select_db("money_collection", $connection);
	include("FusionCharts.php");
	$Color_array = array ("1941A5","AFD8F8","FF0000","FF66CC","9900FF","99FFCC","CCCC00","669900");
	shuffle($Color_array);
	$total=0;
	$j=0;$k=0;
	if(!($batch=="select"))
	{
		if($batch=="p1")
		{
			for($i=1;$i<=12;$i++)
			{
				$name="KAPPA-".$i;
				$result = mysql_query("SELECT money FROM `puc-1` WHERE class='$name'");
				$money_value= mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="L-".$i;
				$categor_money[$j++]=$money_value;
			}
			for($i=1;$i<=8;$i++)
			{
				$name="OMEGA-".$i;
				$result = mysql_query("SELECT money FROM `puc-1` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="M-".$i;
				$categor_money[$j++]=$money_value;
			}
			
		}
		else if($batch=="p2")
		{
			
			$puc_1=0;
			$j=0;$k=0;
			for($i=1;$i<=12;$i++)
			{
				$name="LAMBDA-".$i;
				$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="O-".$i;
				$categor_money[$j++]=$money_value;
			}
			for($i=10;$i<=12;$i++)
			{
				$name="OMEGA-".$i;
				$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="K-".$i;
				$categor_money[$j++]=$money_value;
			}
			for($i=1;$i<=5;$i++)
			{
				$name="MUE-".$i;
				$result = mysql_query("SELECT money FROM `puc-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$categor[$j]="K-".$i;
				$categor_money[$j++]=$money_value;
			}
		}
		else if($batch=="e1")
		{
			$categor[$j]="Sec-A";
			$sec_a_money=0;
			$sec_b_money=0;
			for($i=1;$i<=4;$i++)
			{
				$name="CG-".$i;
				$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$sec_a_money += $money_value;
			}
			for($i=1;$i<=3;$i++)
			{
				$name="CF-".$i;
				$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$sec_a_money += $money_value;
			}
			$categor_money[$j++]=$sec_a_money;
			$categor[$j]="Sec-B";
			for($i=1;$i<=4;$i++)
			{
				$name="CS-".$i;
				$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$sec_b_money += $money_value;
			}
			for($i=1;$i<=3;$i++)
			{
				$name="CT-".$i;
				$result = mysql_query("SELECT money FROM `engg-1` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$sec_b_money += $money_value;
			}
			$categor_money[$j++]=$sec_b_money;
			$categor[$j]="Total";
			$categor_money[$j++]=$total;
		}
		else if($batch=="e2")
		{
			$cse_money=0;
			$ece_money=0;
			$mech_money=0;
			$civil_money=0;
			$mme_money=0;
			$chem_money=0;
			$categor[$j]="CSE";
			for($i=1;$i<=3;$i++)
			{
				$name="CSE-".$i;
				$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$cse_money += $money_value;
			}
			$categor_money[$j++] = $cse_money;
			$categor[$j]="ECE";
			for($i=1;$i<=3;$i++)
			{
				$name="ECE-".$i;
				$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$ece_money += $money_value;
			}
			$categor_money[$j++] = $ece_money;
			$categor[$j] = "MECH";
			for($i=1;$i<=3;$i++)
			{
				$name="MECH-".$i;
				$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$mech_money += $money_value;
			}
			$categor_money[$j++] = $mech_money;
			$categor[$j] = "CIVIL";
			for($i=1;$i<=3;$i++)
			{
				$name="CIVIL-".$i;
				$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$civil_money += $money_value;
			}
			$categor_money[$j++] = $civil_money ;
			$categor[$j] = "MME";
			for($i=1;$i<=2;$i++)
			{
				$name="MME-".$i;
				$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$mme_money += $money_value;
			}
			$categor_money[$j++] = $mme_money;
			$categor[$j] = "CHEM";
			$name="CHEM-1";
			$result = mysql_query("SELECT money FROM `engg-2` WHERE class='$name'");
			$money_value = mysql_result($result,0,"money");
			$total = $money_value+$total;
			$categor_money[$j++]=$money_value;
			$categor[$j]="Total";
			$categor_money[$j++]=$total;
		}
		else if($batch=="e3")
		{
			$cse_money=0;
			$ece_money=0;
			$mech_money=0;
			$civil_money=0;
			$mme_money=0;
			$chem_money=0;
			$categor[$j]="CSE";
			for($i=1;$i<=3;$i++)
			{
				$name="CSE-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$cse_money += $money_value;
			}
			$categor_money[$j++] = $cse_money;
			$categor[$j]="ECE";
			for($i=1;$i<=3;$i++)
			{
				$name="ECE-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$ece_money += $money_value;
			}
			$categor_money[$j++] = $ece_money;
			$categor[$j] = "MECH";
			for($i=1;$i<=3;$i++)
			{
				$name="MECH-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$mech_money += $money_value;
			}
			$categor_money[$j++] = $mech_money;
			$categor[$j] = "CIVIL";
			for($i=1;$i<=3;$i++)
			{
				$name="CIVIL-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$civil_money += $money_value;
			}
			$categor_money[$j++] = $civil_money ;
			$categor[$j] = "MME";
			for($i=1;$i<=2;$i++)
			{
				$name="MME-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$mme_money += $money_value;
			}
			$categor_money[$j++] = $mme_money;
			$categor[$j] = "CHEM";
			for($i=1;$i<=1;$i++)
			{
				$name="CHEM-".$i;
				$result = mysql_query("SELECT money FROM `engg-3` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$chem_money += $money_value;
			}
			$categor_money[$j++] = $chem_money;
			$categor[$j]="Total";
			$categor_money[$j++]=$total;
		}
		else if($batch=="e4")
		{
			$cse_money=0;
			$ece_money=0;
			$mech_money=0;
			$civil_money=0;
			$mme_money=0;
			$chem_money=0;
			$categor[$j]="CSE";
			for($i=1;$i<=6;$i++)
			{
				$name="CSE-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$cse_money += $money_value;
			}
			$categor_money[$j++] = $cse_money;
			$categor[$j]="ECE";
			for($i=1;$i<=6;$i++)
			{
				$name="ECE-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$ece_money += $money_value;
			}
			$categor_money[$j++] = $ece_money;
			$categor[$j] = "MECH";
			for($i=1;$i<=5;$i++)
			{
				$name="MECH-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$mech_money += $money_value;
			}
			$categor_money[$j++] = $mech_money;
			$categor[$j] = "CIVIL";
			for($i=1;$i<=5;$i++)
			{
				$name="CIVIL-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$civil_money += $money_value;
			}
			$categor_money[$j++] = $civil_money ;
			$categor[$j] = "MME";
			for($i=1;$i<=4;$i++)
			{
				$name="MME-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$mme_money += $money_value;
			}
			$categor_money[$j++] = $mme_money;
			$categor[$j] = "CHEM";
			for($i=1;$i<=2;$i++)
			{
				$name="CHEM-".$i;
				$result = mysql_query("SELECT money FROM `engg-4` WHERE class='$name'");
				$money_value = mysql_result($result,0,"money");
				$total = $money_value+$total;
				$chem_money += $money_value;
			}
			$categor_money[$j++] = $chem_money;
			$categor[$j]="Total";
			$categor_money[$j++]=$total;
		}
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
	}
	if(($batch=="p1")||($batch=="p2")||($batch=="select"))
	{
		echo '
		<script language="javascript">
			$("#load_n").hide();
		</script>';
	}
	else if($batch=="e1")
	{
		echo '
		<script language="javascript">
			$("#freshers").show();
		</script>';
	}
	else
	{
		echo '
		<script language="javascript">
			$("#seniors").show();
		</script>';
	}
	?>
	</td>
        </tr></table></div><table align="center">
        <tr><td>Selected Batch : <font size="+1"><b><?php echo $batch;?></b></font></td></tr><tr id="load_n">
        	<td colspan="1">
            Select Branch For more Details....
            </td>
            <td colspan="1" id="freshers" style="display:none;">
				<input type="hidden" id="bat_ch" name="batch" value="<?php echo $batch;?>"/>
            	<select id="selectbranch_1" name="branch" onChange="load_next_2()">
                	<option value="Select">Select</option>
                	<option value="sec-a">Sec-A</option>
                	<option value="sec-b">Sec-B</option>
                </select>
            </td>
            <td colspan="1" id="seniors" style="display:none;">
				<input type="hidden" id="bat_ch" name="batch" value="<?php echo $batch;?>"/>
            	<select id="selectbranch_2" name="branch" onChange="load_next_2()">
                	<option value="Select">Select</option>
                	<option value="cse">CSE</option>
                    <option value="ece">ECE</option>
                    <option value="mech">MECH</option>
                    <option value="civil">CIVIL</option>
                    <option value="mme">MME</option>
                    <option value="chem">CHEM</option>
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
		<div class="ink-button blue" style="margin-left:900px;"onclick="load('./wc/load_index.php')">Back </div>
</body>
</html>
