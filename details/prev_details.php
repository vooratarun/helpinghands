<?php
include("Includes/FusionCharts.php");
include("Includes/FC_Colors.php");
include("db_conf.php");

	$y=date('Y');
	$y1=date('y')+1;
 	$ye=$y.'-'.$y1;
	$qr=mysql_query("select * from year where year='$ye'");
	if(mysql_num_rows($qr)==0)
	{
		$y=date('Y')-1;
		$y1=date('y');
		$ye=$y.'-'.$y1;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	
<title>Previous Details</title>
    <style type="text/css">
		  body {
	

	}
		section#content {
		float:left;
		width:691px;
		clear:right;
		overflow:none;
		height:auto;
	}
	</style>
	<script type="text/Javascript">
		function goto(){  window.scrollTo(100,420);}
		function loaddet(id)
			{
			$("#details").load(id);
		   	}
	</script>
	   
<SCRIPT LANGUAGE="Javascript" SRC="./details/FusionCharts.js"></SCRIPT>
   	    <h2 style="text-align:center;color:#0080C0;font-family:Adobe Gothic Std;font-size:24px;"><strong>Transaction Details of academic year 2014-15</strong></h2>

<div id="main_body">
	<table align=center>
		<tr><th style='color:#008ED6;' colspan=1>Allocated Percentages</th></tr>
		<tr><td rowspan=3>
		<div id="chartdiv" align="center"> 
        FusionCharts. </div>
              <script type="text/javascript">
				  <?php
				  $categor = array ("ICD","HCD","FD","PRD");
				  	$Color_array = array ("1941A5","AFD8F8","FF0000","FF66CC");
					shuffle($Color_array);
				  $strXm="";
				  $strXm="<graph showNames='1' decimalPrecision='0'>";
					for($i=0;$i<4;$i++)
					{
						$query12=mysql_query("select percent from details where year='$ye' and cate_name='$categor[$i]'") or die(mysql_error());
						$data12=mysql_fetch_array($query12) or die(mysql_error());
						$perce=$data12['percent'];
						$strXm.="<set name='$categor[$i]' value='$perce' link='./details/show_more.php?category=$categor[$i]' xlink:show='other' color='$Color_array[$i]'/>";
					}
					$strXm.="</graph>";
					echo "var str=\"$strXm\";";
				  ?>
				  
		   var chart = new FusionCharts("./details/charts/FCF_Doughnut2D.swf", "ChartId", "500", "250");
		    chart.setDataXML(str);		   
		   chart.render("chartdiv");
		</script> 
		</td></tr></table><br>
		<table align=center>
			<tr>
				<td><div class="ink-button blue" onClick="loaddet('./details/weekly.php')" >Weekly wise Details</div>
				</td>
				<td><div class="ink-button red" onClick="loaddet('./details/custom_week_index.php')" >Details of custom Week</div>
				</td>
				<td><div class="ink-button green" onClick="loaddet('./details/yearly_index.php')" >Year Details</div>
				</td>
				<td><div class="ink-button green" onClick="loaddet('./details/records_index.php')" >Apart from year budget</div>
				</td>
			</tr>
		</table><div name="details" id="details">
	<p  style='font-size:20px;font-weight:bold;color:blue;margin:2% 5%'><i><img src='./details/images/success.gif'>&nbsp;&nbsp;By Default you can see Last Tuesday to Today transactions in weekly wise details</i></p>
	<p  style='font-size:20px;font-weight:bold;color:blue;margin:2% 5%'><i><img src='./details/images/success.gif'>&nbsp;&nbsp;You can also view Particular Date to Date transactions</i></p>
	<p  style='font-size:20px;font-weight:bold;color:blue;margin:2% 5%'><i><img src='./details/images/success.gif'>&nbsp;&nbsp;You can View Year wise data also</i></p>
	<p  style='font-size:20px;font-weight:bold;color:blue;margin:2% 5%'><i><img src='./details/images/success.gif'>&nbsp;&nbsp;For more Details click on perticular area on above circle</i></p>
</div></div>
</body>
</html>
