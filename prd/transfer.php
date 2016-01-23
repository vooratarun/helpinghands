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

<title>Money Transfer</title>

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
	  border:1px solid blue;
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
	height:35px;
	width:200px;
	border-bottom:1px solid #ddd;

	}
#stu td{
	font-size:17px;
	font-weight:bold;
	color:green;
	height:35px;
	width:200px;

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
		height:25px;
	}
#edit_close
	{
	position:absolute;
	right:1px;
	top:1px;
	background:transparent;
	width:5%;
	border:0;
	color:red;
	cursor: pointer;
	}
fieldset{
	border:1px dotted blue;
	width:50%;
	margin:1%;
}
</style>
<script type="text/javascript">
function disap()
{
	document.getElementById("message").style.display="none";
}
xx=0;
function grid()
{
	if(xx<10)
	{
		lis=[0,0.2,0.4,0.7,0.8,1,1,0.8,0.7,0.4,0.2,0];
		document.getElementById("message").style.opacity=lis[xx];
		xx++;
		setTimeout("grid()",250);
	}
	else
	{
		document.getElementById("message").style.display="none";
		xx=0;
	}
}
function validate()
{
	if(document.getElementById("cat").value=="Select")
	{
		document.getElementById("message").style.opacity=1;
		document.getElementById("message").style.display="block";
		document.getElementById("mes").innerHTML="Please Select Category";
		grid();
		return false;
	}
	if(document.getElementById('text').value=="" || document.getElementById('text').value==0)
	{
		document.getElementById("message").style.opacity=1;
		document.getElementById("message").style.display="block";
		document.getElementById("mes").innerHTML="Please Enter amount";
		grid();
		return false;
	}
	else
		return true;
}
</script>
<?php
$quer0=mysql_query("select * from details where cate_name='Emergency'") or die(mysql_error());
$quer1=mysql_query("select * from details where cate_name='Medical'") or die(mysql_error());
$quer2=mysql_query("select * from details where cate_name='Daily_needs'") or die(mysql_error());
$quer3=mysql_query("select * from details where cate_name='Inside_Activities'") or die(mysql_error());
$quer4=mysql_query("select * from details where cate_name='Outside_Activities'") or die(mysql_error());
$quer5=mysql_query("select * from details where cate_name='Aniversary'") or die(mysql_error());
$quer6=mysql_query("select * from details where cate_name='Stationary'") or die(mysql_error());
$d0=mysql_fetch_array($quer0);
$d1=mysql_fetch_array($quer1);
$d2=mysql_fetch_array($quer2);
$d3=mysql_fetch_array($quer3);
$d4=mysql_fetch_array($quer4);
$d5=mysql_fetch_array($quer5);
$d6=mysql_fetch_array($quer6);
?>
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
		<div id=message ><mes id="mes">You can transfer money from Emergency to Selected Category</mes>
		<input type=button  value=x id=edit_close onclick="disap()">
		</div>
<?php
if(isset($_REQUEST["transfer"]))
{
	$amt=$_POST["amt"];
	$categ=$_POST["categ"];
	if($categ=="Select")
		echo "Please select a category";
	if($amt=="" ||$amt<=0)
	{
		echo <<<s
		<script type=text/javascript>
		document.getElementById("message").style.opacity=1;
		document.getElementById("message").style.display="block";
		document.getElementById("mes").style.color="green";
		document.getElementById("mes").innerHTML="Enter Valid amount";
		grid();

		</script>
s;


	}
	else if($amt>$d0['remains'])
	{

		echo <<<s
		<script type=text/javascript>
		document.getElementById("message").style.opacity=1;
		document.getElementById("message").style.display="block";
		document.getElementById("mes").style.color="green";
		document.getElementById("mes").innerHTML="Money Not Available";
		grid();

		</script>
s;
	}
	else
	{
		$que=mysql_query("select * from details where cate_name='$categ'") or die(mysql_error());
		$due=mysql_fetch_array($que) or die(mysql_error());
		$amt1=$amt+$due['remains'];
		$qu=mysql_query("update details set remains=$amt1 where cate_name='$categ'") or die(mysql_error());
			$dat=date("d-M-Y");
			$emr=$d0['remains']-$amt;
			$ems=$d0['spent_money']+$amt;
			$qu2=mysql_query("update details set remains=$emr,spent_money=$ems where cate_name='Emergency'") or die(mysql_error());
			$qu3=mysql_query("insert into emergency values('$dat','$categ',$amt,$emr,0)") or die(mysql_error());
			echo "data inserted";
	}
	
}
?>
	<h3 align=center style="color:blue">In Emergency we have Rs <?php echo $d0['remains']; ?>/-</h3>
	<table align=center id="stu_details">
		<tr><th colspan=2>Remaining Money in Categories</th></tr>
		<tr><td>Medical</td><td>:<?php echo $d1['remains']?></td></tr>
		<tr><td>Daily Needs</td><td>:<?php echo $d2['remains']?></td></tr>
		<tr><td>Inside Activities</td><td>:<?php echo $d3['remains']?></td></tr>
		<tr><td>Outside Activities</td><td>:<?php echo $d4['remains']?></td></tr>
		<tr><td>Aniversary</td><td>:<?php echo $d5['remains']?></td></tr>
		<tr><td>Stationary</td><td>:<?php echo $d6['remains']?></td></tr>
	</table>
	<form action="" method=post onsubmit="return validate()">
	<center>
	<fieldset>
	<table align=center id=stu>
		<tr><td>Category</td><td><select name="categ" id="cat">
				<option>Select</option>
				<option>Medical</option>
				<option>Daily_needs</option>
				<option>Inside_Activities</option>
				<option>Outside_Activities</option>
				<option>Aniversary</option>
				<option>Stationary</option>
			</td></tr>
		<tr><td>Enter Amount</td><td><input type=text id=text name="amt"></td></tr>
		<tr><td></td><td><input type=submit value="Transfer" id=Btn name=transfer></td></tr>
	</table>
	</fieldset>
	</center>
	</form>
</div>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; CSE Developers</div></center>
</body>

</html>
