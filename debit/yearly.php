<?php
session_start();
include("db_conf.php");
if($_SESSION["user"]!="admin")
		echo <<<s

		<script type="text/javascript">window.location.href="index.php";</script>

s;

$qu1=mysql_query("select distinct(year) from year");
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html>


<link rel="shortcut icon" href="images/admin_logo.png" type="image/x-icon" />
<title>Annual Data</title>
<style>
body {
	background-image:url(images/bg.jpg);

	}
 	#main_body{
	  border:1px solid blue;
	  width:90%;
	  height:600px;
	  margin:0px 5%;
	}
#submit:focus
{
	border:1px solid green;
}

select option
{ 
	width:100px;
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
	border-right:1px solid #000;
	height:25px;
}
#categ_data td
{
	text-align:center;
	border-right:1px solid #000;
	height:25px;
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
	.contentt
		{
			margin-left:30%;
			margin-top:5%;
			font-size:17px;
			font-weight:bold;
			color: rgb(0, 142, 214);
			letter-spacing:1px;
			word-spacing:2px;
			line-height:40px;
		}
</style>
<body>
<div id="main_body"></br>
<form action="yearly.php" method="post">
	<table align=center style="border:1px solid green;width:45%">
		<tr><td colspan=2 align=center style="font-size:17px;font-weight:bold;color:green">Select Year</td></tr>
		<tr><td style="text-align:center"><select name='year'>
			<?php
			while($dat=mysql_fetch_array($qu1))
				echo "<option>".$dat['year']."</option>";
			?>
		</select></td><td><input type=submit value="Go" name="go" id="submit"></td></tr>
		<tr><td></td></tr>
		</table>
		<script type="text/javascript">
		function next1()
		{
			document.getElementById('main_body').style.height="100%";
		}
	</script>
		<div id="content" class="contentt"> 
		<img src="images/success.gif">&nbsp;&nbsp;Here You can view the Details <br>&nbsp;&nbsp;&nbsp;&nbsp;of spent money from the selected <br>&nbsp;&nbsp;&nbsp;&nbsp;Annual Budget All Details
		</br></br><img src="images/success.gif">&nbsp;&nbsp;In the tables we are showing from each batch</br>&nbsp;&nbsp;&nbsp;&nbsp;How many students are taken in each Category.
		</br></br><img src="images/success.gif">&nbsp;&nbsp;Select Annual Year and press Go
	</div>
		</form>
<?php
if(isset($_REQUEST["go"]))
{
	$ye=$_POST["year"];
	echo "<table align=center><tr><td style='font-size:20px;font-weight:bold;color:#FF3300;cursor:pointer;height:55px;'>Debit details of the Annual Year : ".$ye."</td></tr></table>";
	$qu2=mysql_query("select * from year where year='$ye'") or die(mysql_error());
	$data1=mysql_fetch_array($qu2) or die(mysql_error());
	echo <<<s
		<table id='year_data' align='center'>
			<tr><td>Total Annual Money</td><td>: Rs $data1[1] /-</td></tr>
			<tr><td>Spent Money </td><td>: Rs $data1[2] /-</td></tr>
			<tr><td>Remaining Money </td><td>: Rs $data1[3] /-</td></tr>
		</table>
s;

	$categor[0]="Medical";$categor[1]="Daily_needs";$categor[2]="Inside_Activities";$categor[3]="Outside_Activities";$categor[4]="Aniversary";$categor[5]="Stationary";
	for($i=0;$i<6;$i++)
	{
		if(mysql_num_rows(mysql_query("select * from details where year='$ye' and cate_name='$categor[$i]' and spent_money>0")))
		{
		$bat_n=8;
		$query4=mysql_query("select * from details where year='$ye' and cate_name='$categor[$i]'");
		$data0=mysql_fetch_array($query4);
		echo "</br></br><table style='color:blue' width=35% align=center><tr><th style='text-decoration:underline'>$categor[$i] </th><th>Total:".$data0['alloc_money']."</th><th>Spent:".$data0['spent_money']."</th><th>Remains:".$data0['remains']."</th></tr></table></br>\n";
		echo "<table align=center style='border-top:1px solid gray;border-left:1px solid gray;border-right:1px solid gray;border-bottom:1px solid gray;width:50%' cellpadding=0 cellspacing=0 id=categ_data>\n";		
		echo "<tr ><th>Batch</th><th>No.of Students</th><th>Amount</th><th>From emerg</th></tr> \n";
		while($bat_n!=14)
		{
			if($bat_n<10)
			$bat_n='0'.$bat_n;
			$batch="20".$bat_n;
			$me_sp=0;
			$em_mon=0;
			$quer1=mysql_query("select * from students where year='$ye' and category='$categor[$i]' and batch='$batch'") or die(mysql_error());
			$no_of=mysql_num_rows($quer1);
			while($datt1=mysql_fetch_array($quer1))
			{
				$id=$datt1['ID'];$date=$datt1['date'];
				$quer2=mysql_query("select * from emergency where ID='$id' and date='$date'") or die(mysql_error());
				if(mysql_num_rows($quer2))
				{
					$datt2=mysql_fetch_array($quer2);
					$em_mon+=$datt2['amount'];
				}
				$me_sp+=$datt1['money'];
			}
			if($me_sp)
				echo "<tr><td>20$bat_n</td><td>$no_of</td><td>Rs $me_sp /-</td><td>Rs $em_mon /-</td></tr>\n";
			$bat_n++;
			
		}
		echo "</table>";
		echo <<<s
		<script type="text/javascript">
			setTimeout("next1()",100);
			document.getElementById("content").style.display="none";
		</script>
s;
		}
	}
	echo '</br><center><button onclick="window.print()" id="print" >Print</button></center></br>';
}
?>
</div>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; RGU HELPING HANDS</div></center>
</body>
</html>
