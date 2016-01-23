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
<title>Admin</title>
   <style type="text/css">
	    body {
	background-image:url(images/bg.jpg);
	height:100%;

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
	  height:500px;
	  margin:20px auto 0;
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
        text-align: left;
        margin:20px;
        }
                #header li a{
			text-decoration:none;
			color:#fff;
			font-size:17px;
		}
		.records
		{
			margin-left:20%;
			margin-right:25%;
			width:6	00px;
			background-color:rgb(236, 249, 255);
			
			border:1px solid #d3d3d3;
			border-radius:5px;
		}
		.record_head
		{
			font-size:17px;
			font-weight:bold;
			color:blue;
			text-decoration:underline;
		}
		.record_head1
		{
			
			font-size:17px;
			font-weight:bold;
			color:green;
			text-decoration:underline;
		}
		.field_head
		{
			font-size:15px;
			font-weight:bold;
			color:#cc7d00;
			height:35px;
		}
		.field_body
		{
			font-size:15px;
			font-weight:bold;
			color:green;
		}
		.submit
		{
			margin-left:30%;
			width: 100px;
	height: 30px;
	background: linear-gradient(to bottom,orange,#cc7d00);
	background-image: -moz-linear-gradient(center top, orange, #cc7d00);
	border: none;
	border-radius: 2px;
	color: white;
	font-size: 12px;
	font-weight: bold;
	font-family: arial;
	cursor: pointer;
	
		}
		.submit1
		{
			margin-left:25%;
			width: 100px;
	height: 30px;
	background: linear-gradient(to bottom,orange,#cc7d00);
	background-image: -moz-linear-gradient(center top, orange, #cc7d00);
	border: none;
	border-radius: 2px;
	color: white;
	font-size: 12px;
	font-weight: bold;
	font-family: arial;
	cursor: pointer;
	visibility:hidden;
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
	<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
	<script type="text/javascript">
		function next(){
			$(".records_div").slideDown('slow');}
			
		
	</script>
   <div id="wrapper">
      <div id="header">
	<h1>Helping Hands</h1>
	<h1 style="float: left;margin-left:20%;background-color:#300000;opacity:1; -webkit-border-radius: 5px;
   -moz-border-radius: 5px;">Debit Details</h1>
 
	<ul>
		<li style="background_color:#000;"><a href="prev_details.php"><img src="images/back.png" style="height:15px;width:15px;">back</a></li>
	  <li><a href="logout.php">logout</a></li>

	</ul>
      </div>    
    </div>
    
<div id="main_body">
	
	<h1 class="record_head1" align=center>Apart from the Annual Budget</h1>
	<div id="content" class="contentt"> 
		Here You can view the Details <br> of spent money from the Helping Hands <br> which are other than from the Annual Budget
		</br></br>Click Below to View the Records
	</div>
	<form action="off_records.php" method="post">
		<input type="text" name="next_num" id="next_n" style="display:none" value=0>
	<input type=submit name="next1" value="Back" class="submit1" id="next_click1"><input type="submit" name="next" value="Click Here"  id="next_click" class="submit">
	</form>
	<script type="text/javascript">
		function next1()
		{
			document.getElementById('main_body').style.height="100%";
		}
	</script>
	<?php
	if(isset($_REQUEST["next"]))
	{
		$nn=$_POST["next_num"];
		
	$quer=mysql_query("select * from records order by sno desc");
	if(!mysql_num_rows($quer))
	{
		echo <<<s
		<script type="text/javascript">
			alert("Currently No Records are found");
			window.location.href="off_records.php";
		</script>
s;
	}
	if(mysql_num_rows($quer)==$nn)
		$nn=0;
	for($ii=0;$ii<$nn;$ii++){	$rec=mysql_fetch_array($quer);}
	if(mysql_num_rows($quer)>=($nn+1))
	{
	echo "<div class=records_div style='display:none'>";
	$rec=mysql_fetch_array($quer);
	$ii++;
	
		
		echo <<<s
			<br><div id='rec$rec[0]' class="records">
				<table width=100%>
					<tr><th colspan=3 class="record_head">Record No : $ii</th></tr>
					<tr><td width=10%>&nbsp;</td><td width=20% class="field_head">ID</td><td class="field_body">$rec[1]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Date</td><td class="field_body">$rec[2]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Reason</td><td class="field_body">$rec[3]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Amount</td><td class="field_body">Rs $rec[4] /-</td></tr>
				</table>
			</div>
s;
	}
	if(mysql_num_rows($quer)>=($nn+2))
	{
$rec1=mysql_fetch_array($quer);
$ii++;
	
		
		echo <<<s
			</br><div id='rec$rec1[0]' class="records">
				<table width=100% class="record_table">
					<tr><th colspan=3 class="record_head">Record No : $ii</th></tr>
					<tr><td width=10%>&nbsp;</td><td width=20% class="field_head">ID</td><td class="field_body">$rec1[1]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Date</td><td class="field_body">$rec1[2]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Reason</td><td class="field_body">$rec1[3]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Amount</td><td class="field_body">Rs $rec1[4] /-</td></tr>
				</table>
			</div></br>
s;
	
	
	}
	
	echo "</div>";
	echo <<<s
	<script type="text/javascript">
		document.getElementById('next_n').value=$ii;
		document.getElementById('next_click').value='Next';
		document.getElementById('content').style.display='none';
		document.getElementById('next_click1').style.visibility='visible';
		next();
		setTimeout("next1()",1000);
	</script>
s;
	}
if(isset($_REQUEST["next1"]))
{
	$nn=$_POST["next_num"];	
	$quer=mysql_query("select * from records order by sno desc");
	
	for($ii=0;$ii<($nn-4);$ii++){	$rec=mysql_fetch_array($quer);}
	
	echo "<div class=records_div style='display:none'>";
	$rec=mysql_fetch_array($quer);
	$ii++;
	
		
		echo <<<s
			<br><div id='rec$rec[0]' class="records">
				<table width=100%>
					<tr><th colspan=3 class="record_head">Record No : $ii</th></tr>
					<tr><td width=10%>&nbsp;</td><td width=20% class="field_head">ID</td><td class="field_body">$rec[1]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Date</td><td class="field_body">$rec[2]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Reason</td><td class="field_body">$rec[3]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Amount</td><td class="field_body">Rs $rec[4] /-</td></tr>
				</table>
			</div>
s;
	
	
$rec1=mysql_fetch_array($quer);
$ii++;
	
		
		echo <<<s
			</br><div id='rec$rec1[0]' class="records">
				<table width=100% class="record_table">
					<tr><th colspan=3 class="record_head">Record No : $ii</th></tr>
					<tr><td width=10%>&nbsp;</td><td width=20% class="field_head">ID</td><td class="field_body">$rec1[1]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Date</td><td class="field_body">$rec1[2]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Reason</td><td class="field_body">$rec1[3]</td></tr>
					<tr><td>&nbsp;</td><td class="field_head">Amount</td><td class="field_body">Rs $rec1[4] /-</td></tr>
				</table>
			</div></br>
s;
	
	
	
	
	echo "</div>";
	echo <<<s
	<script type="text/javascript">
		document.getElementById('next_n').value=$ii;
		document.getElementById('next_click').value='Next';
		document.getElementById('content').style.display='none';
		document.getElementById('next_click1').style.visibility='visible';
		next();
		setTimeout("next1()",1000);
	</script>
s;
}
	?>
</div>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; RGU HELPING HANDS</div></center>
</html>
