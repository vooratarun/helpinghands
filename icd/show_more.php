<?php
session_start();
		if($_SESSION["user"]!="admin")
		echo <<<s

		<script type="text/javascript">window.location.href="index.php";</script>

s;
$_SESSION["id_search"]="en";
$categ=$_POST["category"];
/*
echo "</br>Emergency development";
echo "</br>Checking Errors";
echo "</br>Any Validations";
*/
include("db_conf.php");
$y=date("Y");
$y1=date("y")+1;
$ye1=$y.'-'.$y1;
$qu=mysql_query("select * from year where year='$ye1'") or die(mysql_error());
$qu=mysql_query("select * from year where year='$ye1'") or die(mysql_error());
if(mysql_num_rows($qu)==0)
	{
		$y=date("Y")-1;
		$y1=date("y");
		$ye1=$y.'-'.$y1;
		$qu=mysql_query("select * from year where year='$ye1'") or die(mysql_error());
	}
$ye=mysql_fetch_array($qu) or die(mysql_error());
$qq=mysql_query("select * from details where year='$ye1' and cate_name='$categ'")or die(mysql_error());
$catd=mysql_fetch_array($qq) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html>

<title>Debit details</title>

<link rel="shortcut icon" href="images/admin_logo.png" type="image/x-icon" />
<style>
body {
	background-image:url(images/bg.jpg);

	}
	
      #wrapper {
        border: 1px solid gray;
        margin: 20px auto 0;
        width: 90%;
	background-color:#000;
	opacity:0.7;
	color:#fff;
        }
 	#main_body{
	  width:90%;
	  height:100%;
	  margin:20px auto 0;
	  height:500px;
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
/*
#header
{
	width:100%;
	height:65px;
	background-color:#000;
	opacity:0.7;
	color:#fff;
	margin:10px 0px 0px 0px;
}

*/
#login
{
	margin:100px;
	font-family: "Titillium800", "Trebuchet MS", Arial, sans-serif;
	font-size:18pt;
}
#text
{
	width: 210px;
	background: #fefefe;
	border: 1px solid #bbb;
	font-family: "Lucida Grande", Verdana, sans-serif;
	font-size: 14px;
	color:#000888;
	padding: 7px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	outline: none;
	vertical-align: middle;
	
}
#text:focus
{
	border:1px solid #498AF3;
}
#Btn{
   font-family: calibri;
   font-size:20px;
   width: 80px;
   height:30px;
   border-width:1px;
   margin:10px;
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius:5px;
   text-align: center;
   background-image: url(images/btn.gif);
   cursor:pointer;
}
#stu_details td{
	font-size:17px;
	font-weight:bold;
	color:green;
	width:200px;
	border-bottom:1px solid #ddd;

	}
#t6 th{
	font-size:17px;
	font-weight:bold;
	color:#fff;
	width:180px;
	background: linear-gradient(to bottom, #5FC159, #37A034);
	background-image: -moz-linear-gradient(center top, #5FC159, #37A034);
	background: -webkit-linear-gradient(top, #5FC159 20%, #37A034 100%);	
}
#t6 td{
	font-size:17px;
	font-weight:bold;
	color:blue;
	text-align:center;
	border-bottom:1px solid #ddd;
	height:35px;
}
	#message
	{

		background:#FFFFCC;
		border:1px solid orange;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		font-weight:bold;
		color:#FF0033;
		display:block;
		width:50%;
		margin:5px;
		position:absolute;
		left:100px;
		top:100px;
		height:auto;
	}
	#edit_close
	{
	position:absolute;
	right:1px;
	top:10px;
	background:transparent;
	width:5%;
	border:0;
	color:red;
	cursor: pointer;
	}
	#note
	{
	position:absolute;
	left:1px;
	top:10px;
	background:transparent;
	border:0;
	color:red;
	cursor: pointer;
	}
	#ed_body
	{
	position:relative;
	left:60px;
	border:0;
	color:red;
	cursor: pointer;
	}
</style>
<body>	

    <div id="wrapper">
      <div id="header">
	<h1>Helping Hands</h1>
	<h1 style="float: left;margin-left:20%;background-color:#300000;opacity:1; -webkit-border-radius: 5px;
   -moz-border-radius: 5px;">Debit Details</h1>
 
	<ul>
		<li style="background_color:#000;"><a href="next.php"><img src="images/back.png" style="height:15px;width:15px;">back</a></li>
	  <li><a href="logout.php">logout</a></li>

	</ul>
      </div>    
    </div>
<div id="main_body">
	<h2 style="color:#FF3300;margin:1% 35%;" >Details of <?php echo $categ; ?> Category (till Today)</h2>
	<table align=center id="stu_details">
		<tr id="t1" style="opacity:0;display:none"><td>Total Annual Money</td><td>:Rs <?php echo $ye['total']; ?>/-</td></tr>
		<tr id="t2" style="opacity:0;display:none"><td>Allocated Percentage </td><td>:<?php echo $catd['percent'];?> %</td></tr>
		<tr id="t3" style="opacity:0;display:none"><td>Calculated Money</td><td>:Rs <?php echo $catd['alloc_money'];?>/-</td></tr>
		<tr id="t4" style="opacity:0;display:none"><td>Spent Money</td><td>:Rs <?php echo $catd['spent_money'];?>/-</td></tr>
		<tr id="t5" style="opacity:0;display:none"><td>Money Remaining</td><td>:Rs <?php echo $catd['remains'];?>/-</td></tr>
	</table>
	<div id="t6" style="display:none;opacity:0">

<?php
	$quer=mysql_query("select * from students where year='$ye1' and category='$categ' order by date desc") or die(mysql_error());
	$quwr=mysql_query("select * from others where year='$ye1' and category='$categ' order by date desc") or die(mysql_error());
	if(mysql_num_rows($quer))
	{
		echo "<p  style='font-size:20px;font-weight:bold;color:blue;margin:2% 5%'><img src='images/success.gif'>&nbsp;&nbsp;List of Students who has taken the money under the category :".strtoupper($categ)."</p>";
		echo '<h2 style="color:#FF3300;margin:1% 40%">Students List</h2>';
		echo '<table align=center>';
			echo '<tr style="height:35px;width:100%"><th>S.No</th><th>Date</th><th>ID</th><th>Money</th></tr>';
		$sn=0;
		while ($std=mysql_fetch_array($quer))
		{
			$sn++;
			echo "<tr><td>$sn</td><td>$std[2]</td><td><form action='student.php' method=post><input type=text style='display:none' value='$std[1]' name='std_id'><input type=submit  style='border:0px;color:blue;font-size:17px;font-weight:bold;background:transparent;cursor:pointer' value='$std[1]'></form></td><td>$std[4]</td></tr>";
		}
		echo '<tr><th style="height:10px;" colspan=4></th></tr>';
		echo '</table>';
		
	}
	
	else
		{
			echo "<p  style='font-size:20px;font-weight:bold;color:blue;margin:2% 5%'><i><img src='images/success.gif'>&nbsp;&nbsp;Transactions are shown here  (If Any)</i></p>";
		}
		if(mysql_num_rows($quwr)!=0)
		{
			echo '<h2 style="color:#FF3300;margin:1% 35%">Others than Students List</h2>';
			echo '<table align=center>';
			echo '<tr style="height:35px;width:100%"><th>S.No</th><th>Date</th><th>Name</th><th>Money</th></tr>';
			$sn=0;
			while($otd=mysql_fetch_array($quwr))
			{
				$sn++;
				echo "<tr><td>$sn</td><td>$otd[2]</td><td>$otd[1]</td><td>$otd[4]</td></tr>";
			}
			echo '<tr><th style="height:10px;" colspan=4></th></tr>';
			echo '</table>';
		}
	if($categ=="Emergency")
	{
		echo '<div id=message ><div id=note>Note :</div><div id=ed_body>This account is used in'.'</br>'.$str.'Emergency needs.... &nbsp;&nbsp;&nbsp;<img src="images/success.gif" /></div>
		<input type=button  value=x id=edit_close onclick="disap()">
		</div>';
		$query=mysql_query("select * from emergency where year='$ye1' order by date") or die(mysql_error());
		if(mysql_num_rows($query)>0)
			
		{
			echo '<h2 style="color:#FF3300;margin:1% 35%">Transferred Amounts</h2>';
			echo '<table align=center>';
				echo '<tr style="height:35px;width:100%"><th>ID</th><th>Date</th><th>Category</th><th>Money</th></tr>';
			$sn=0;
			while ($std1=mysql_fetch_array($query))
			{
				$sn++;
				echo "<tr><td>$std1[4]</td><td>$std1[1]</td><td>$std1[2]</td><td>$std1[3]</td></tr>";
			}
			echo '<tr><th style="height:10px;" colspan=4></th></tr>';
			echo '</table>';
			
		}
		else
		{
			echo "<p  style='font-size:20px;font-weight:bold;color:blue;margin:2% 5%'><i><img src='images/success.gif'>&nbsp;&nbsp;If sufficeint money is not availabel in Acknowledged Category, Money will be transferred from this Emergency Account</i></p>";
		}
	}
?>
	</div>
	
</div>

<script type=text/javascript>
xx=0;
function inop(ind)
		{
			if(xx<10)
			{
				lis=[0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1];
				document.getElementById("t"+ind).style.opacity=lis[xx];
				xx++;
				setTimeout("inop("+ind+")",70);
			}
			else
			{
				xx=0;
			}
		}
/*
function show()
{
	document.getElementById("t6").style.display="block";
}
*/
function inht(ht,ind1)
{

	if(ht<50)
	{
		document.getElementById("t"+ind1).style.display="block";
		document.getElementById("t"+ind1).style.height=ht+"px";
		setTimeout("inht("+(ht+5)+","+ind1+")",80);
	}
	else
	{

		inop(ind1);
		if(ind1<6)
			setTimeout("inht(10,("+(ind1+1)+"))",200);
/*
		if(ind1==5)
		{
				setTimeout("show()",100);
		}
*/

	}
}
inht(10,1);
function disap()
{
	document.getElementById("message").style.display="none";
}
</script></body>

</html>
