<?php
session_start();
include("db_conf.php");
if($_SESSION["user"]!="admin")
		echo <<<s

		<script type="text/javascript">window.location.href="index.php";</script>

s;


?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>


<link rel="shortcut icon" href="images/admin_logo.png" type="image/x-icon" />
<title>Custom Week</title>
<style>
body {
	background-image:url(images/bg.jpg);

	}
 	#main_body{
	  border-left:1px solid blue;
	  border-right:1px solid blue;
	  width:90%;
	  height:100%;
	  margin:0px 5%;
	}
#submit:focus
{
	border:1px solid green;
}

select option
{ 
	width:60px;
	padding:2px 0 2px 3px;
	border:1px solid #d1d1d1;
	color:#70635b;
	}
#submit{
	height:30px;
	background-color:blue;
	font-size:17px;
	font-weight:bold;
	color:#fff;
	border:0;
	padding: 3px;
	outline: none;
	vertical-align: middle;
	cursor:pointer;"
	}
#year_data td
{
	font-size:17px;
	font-weight:bold;
	color:green;
	height:40px;
	margin-top:0px;
	border-bottom:1px solid #ddd;

	}
#categ_data th
{
	border-bottom:1px solid #000;
	height:25px;
	border-right:1px solid #000;
}
#categ_data td
{
	text-align:center;
	height:25px;
	border-right:1px solid #000;
}
#print
{
	cursor: pointer;
	width: 100px;
	height: 30px;
	background: linear-gradient(to bottom, #0087C1, #0087C1);
	background-image: -moz-linear-gradient(center top, #0087C1, #0087C1);
	background: -webkit-linear-gradient(top, #0087C1 20%, #0087C1 100%);
	-webkit-border-radius: 5px;
    border-radius: 2px;
	border: none;
	color: white;
	font-size: 12px;
	font-weight: bold;
	font-family: arial;
	}
</style>
<body>
<?php

$qu1=mysql_query("select distinct(year) from year");
	$y=date(Y);
	$y1=date(y)+1;
 	$ye=$y.'-'.$y1;
	$qr=mysql_query("select * from year where year='$ye'");
	if(mysql_num_rows($qr)==0)
	{
		$y=date(Y)-1;
		$y1=date(y);
		$ye=$y.'-'.$y1;
	}
?>
<div id="main_body">
	<form action="custom_week.php" method="post">
		<table align=center style="border-top:1px solid green;border-bottom:1px solid green;width:25%">
			<tr><td colspan=5 align=center style="font-size:17px;font-weight:bold;color:green">Select Below Categories</td></tr>
			<tr><td><select name='year'>
			<?php
			while($dat=mysql_fetch_array($qu1))
				echo "<option>".$dat['year']."</option>";
			?>
			</select></td>
			<td><select name="ye">
				<option>2013</option>
			<?php
				$qu3=mysql_query("select distinct(year) from year");
				while($dat2=mysql_fetch_array($qu3))
				echo "<option>".($dat2['year'][0].$dat2['year'][1].$dat2['year'][2].$dat2['year'][3]+1)."</option>";
			?>
		</select></td>
		<td><select name="month">
			<option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option>Mar</option>
			<option>Apr</option>
			<option>May</option>
			<option>Jun</option>
			<option>Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option>Nov</option>
			<option>Dec</option>
		</select></td>
		<td><select name='date'>
			<?php
			$qu2=mysql_query("select distinct(date) from students where year='$ye'")or die(mysql_error());
			while($dat1=mysql_fetch_array($qu2))
				echo "<option>".$dat1['date'][0].$dat1['date'][1]."</option>";
			?>
		</select></td>
		<td><input type=submit value="Go" name="go" id="submit"></td></tr>
		<tr><td></td></tr>
		</table>
		</form>
<?php
if(isset($_REQUEST["go"]))
{
$c_week=$_POST["date"]."-".$_POST["month"]."-".$_POST["ye"];
//$p_week=($c_week-7)."-".date("M")."-".date("Y");
$one=strftime("%d-%m-%Y",strtotime($c_week)-60*60*24*7);
$ddate=Date($one);
$p_week=$ddate;
echo "<table align=center><tr><td style='font-size:20px;font-weight:bold;color:#FF3300;cursor:pointer;height:55px;'>Debit details :from (".$p_week.") to (".$c_week.")</td></tr></table>";
$p_week=strtotime($p_week);
$c_week=strtotime($c_week);
//echo $ddate /*->format("d-M-Y")*/."</br>";
	$qu23=mysql_query("select * from year where year='$ye'") or die(mysql_error());
	$data13=mysql_fetch_array($qu23) or die(mysql_error());
	echo <<<s
		<table id='year_data' align='center'>
			<tr><td>Total Annual Money</td><td>: Rs $data13[1] /-</td></tr>
			<tr><td>Spent Money </td><td>: Rs $data13[2] /-</td></tr>
			<tr><td>Remaining Money </td><td>: Rs $data13[3] /-</td></tr>
		</table>
s;

	$categor[0]="Medical";$categor[1]="Daily_needs";$categor[2]="Inside_Activities";$categor[3]="Outside_Activities";$categor[4]="Aniversary";$categor[5]="Stationary";
	for($i=0;$i<6;$i++)
	{
		$bat_n=8;
		$query4=mysql_query("select * from details where year='$ye' and cate_name='$categor[$i]'");
		$data0=mysql_fetch_array($query4);
		echo "<div id='div_$categor[$i]' style='display:none'>";
		echo "</br></br><table style='color:blue;' width=35% align=center><tr><th style='text-decoration:underline'>$categor[$i] </th><th>Total:".$data0['alloc_money']."</th><th>Spent:".$data0['spent_money']."</th><th>Remains:".$data0['remains']."</th></tr></table></br>\n";
		echo "<table align=center style='border-top:1px solid gray;border-left:1px solid gray;border-right:1px solid gray;border-bottom:1px solid gray;width:50%;' cellspacing=0 id='categ_data'>\n";		
		echo "<tr ><th>Batch</th><th>No.of Students</th><th>Amount</th><th>From emergency</th></tr> \n";
		while($bat_n!=14)
		{
			if($bat_n<10)
			$bat_n='0'.$bat_n;
			$batch="20".$bat_n;
			$me_sp=0;
			$em_mon=0;
			$quer1=mysql_query("select * from students where year='$ye' and category='$categor[$i]' and batch='$batch' ") or die(mysql_error());
			$no_of=0;
			while($datt1=mysql_fetch_array($quer1))
			{
				$id=$datt1['ID'];$date=$datt1['date'];
				$comp_date=strtotime($date);
				if($c_week>=$comp_date && $p_week<=$comp_date)
				{
				$quer2=mysql_query("select * from emergency where ID='$id' and date='$date'") or die(mysql_error());
				if(mysql_num_rows($quer2))
				{
					$datt2=mysql_fetch_array($quer2);
					$em_mon+=$datt2['amount'];
				}
				$me_sp+=$datt1['money'];
				$no_of++;
				}
			}
			if($me_sp)
				{
				echo "\n<tr><td>20$bat_n</td><td>$no_of</td><td>Rs $me_sp /-</td><td>Rs $em_mon /-</td></tr>";
				echo <<<S
					\n<script type="text/javascript">
						
						document.getElementById('div_$categor[$i]').style.display="block";
					</script>\n
S;
				}
			$bat_n++;
		}
		echo "</table></div>\n";
	}
	echo '</br><center><button onclick="window.print()" id="print" >Print</button></center>';
}
?>

</body>
</html>
