   <script type="text/javascript" src="jquery.js"></script>
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
				  
				  $strXm="";
				  $strXm="<graph showNames='1' decimalPrecision='0'><set name='Aptitude' value='40' link='' xlink:show='other' color='FF66CC'/><set name='Verbal' value='40' link='' xlink:show='other' color='FF0000'/><set name='Reasoning' value='40' link='' xlink:show='other' color='AFD8F8'/><set name='C,Java' value='40' link='' xlink:show='other' color='1941A5'/>";
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