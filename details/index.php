<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html>

<title>Debit details</title>

<style>
      #wrapper {
        border: 1px solid gray;
        margin: 20px auto 0;
        width: 70%;
	background-color:#000;
	opacity:0.7;
	color:#fff;
        }
 	
      #header {
        overflow: hidden;
        }
 
      #header h1 {
        float: left;
        margin-left: 60px;
        }
 
      #header ul {
        padding: 0;
        text-align: right;
        }
 
      #header li {
        border: 1px solid black;
        display: inline-block;
        margin: 1em .5em;
        margin:20px;
        text-align: left;
        }
        #header li a{
			text-decoration:none;
			color:#fff;
			font-size:17px;
		}
		#prev
	{
		position:absolute;
		right:0px;
		margin:5% 10% 1%;
		text-align:right;
	}
</style>
<body>	
<?php
	@include("db_conf.php");
	include("Includes/FusionCharts.php");
	$Color_array = array ("1941A5","AFD8F8","FF0000","FF66CC");
	shuffle($Color_array);
	$y=date('Y');
	$y1=date('y')+1;
 	$ye=$y.'-'.$y1;
	$qr=mysql_query("select * from year where year='$ye'");
	if(mysql_num_rows($qr)==0)
	{
		$y=date('Y')-1;
		$y1=date('y');
		$ye=$y.'-'.$y1;
		$qr=mysql_query("select * from year where year='$ye'");
	}
	$y_data=mysql_fetch_array($qr);

?>
	    <h2 style="text-align:center;color:#0080C0;font-family:Adobe Gothic Std;font-size:24px;"><strong>Transaction Details of academic year 2014-15</strong></h2>
<br>
    
    <div id="main_body">
			<table align=center>
		<tr><td  style="font-size:22px;font-weight:bold;">Total Annual Budget</td><td style="font-size:22px;font-weight:bold;">:<?php echo $y_data['total']; ?></td></tr>
		<tr><td  style="font-size:17px;font-weight:bold;color:orange">Spent Amount</td><td  style="font-size:17px;font-weight:bold;color:orange">:<?php echo $y_data['spented']; ?></td></tr>
		<tr><td style="font-size:17px;font-weight:bold;color:green">Remaining Amount</td><td  style="font-size:17px;font-weight:bold;color:green">:<?php echo $y_data['remains']; ?></td></tr>
	</table></br>
	<div style='color:#008ED6;margin:0 20%;font-size:17px;font-weight:bold'><img src="./details/images/success.gif"  />&nbsp;&nbsp;Percentages of Spent Amounts</div>
	<div  style='margin:5% 7%;'>
<?php
	$strXML  = "";
	$strXML = $strXML."<graph caption='Categories and Spent percentages' xAxisName='Categories' yAxisName='Percentage' decimalPrecision='2' formatNumberScale='0'>";
	$categor[0]="ICD";$categor[1]="HCD";$categor[2]="FD";$categor[3]="PRD";
	for($i=0;$i<4;$i++)
	{
		$quer1=mysql_query("select * from details where year='$ye' and cate_name='$categor[$i]'");
		$data1=mysql_fetch_array($quer1);
		$spent_money=$data1['spent_money'];
		$alloc=$data1['alloc_money'];
		$perc=($spent_money/$alloc)*100;
		if($categor[$i]=='Emergency')
		{
			//HH
		}
		else
			$strXML .= "<set name='$categor[$i]' value='$perc' color='$Color_array[$i]' />";
	}
	$strXML .= "</graph>";
	echo renderChartHTML("./details/charts/FCF_Column3D.swf", "", $strXML, "myNext", 800, 450);
?>
<div><br>
<!--<p  style='font-size:17px;font-weight:bold;color:#008ED6'><img src='./details/images/success.gif'>&nbsp;&nbsp;Note*: For Emergency Category <aa style='font-size:17px;font-weight:bold;color:green'>Remaining</aa>(in Emergency Category) percentage is shown</p>-->
  </div>
  </div>
  </div>
 </body>
</html>
