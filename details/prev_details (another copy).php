<?php
@include("/Includes/FusionCharts.php");
@include("/Includes/FC_Colors.php");
include("db_conf.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	

	   
<SCRIPT LANGUAGE="Javascript" SRC="./details/FusionCharts.js"></SCRIPT>
   	   
		<tr><td rowspan=3>
		<div id="chartdiv" align="center"> 
        FusionCharts. </div>
              <script type="text/javascript">
				  <?php
				  $categor = array ("ICD","HCD","FD","PRD");
				  	$Color_array = array ("1941A5","AFD8F8","FF0000","FF66CC");
				  $strXm="";
				  $strXm="<graph showNames='1' decimalPrecision='0'><set name='ICD' value='40' link='' xlink:show='other' color='FF66CC'/><set name='HCD' value='40' link='' xlink:show='other' color='FF0000'/><set name='FD' value='40' link='' xlink:show='other' color='AFD8F8'/><set name='PRD' value='40' link='' xlink:show='other' color='1941A5'/>";
					$strXm.="</graph>";
					echo "var str=\"$strXm\";";
				  ?>
				  
		   var chart = new FusionCharts("./details/charts/FCF_Doughnut2D.swf", "ChartId", "500", "250");
		    chart.setDataXML(str);		   
		   chart.render("chartdiv");
		</script> 
		</td></tr></table><br>
		
</body>
</html>
