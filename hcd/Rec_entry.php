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
			section#content {
		float:left;
		width:691px;
		clear:right;
		overflow:none;
		height:auto;
		
	}
	#stu_details td{
	font-size:17px;
	font-weight:bold;
	color:green;
	height:45px;
	


	}
#stu_details th{
	font-size:17px;
	font-weight:bold;
	color:blue;
	height:40px;
	width:200px;
	}
	.text
{
	width: 210px;
	background: #fefefe;
	border: 1px solid #bbb;
	font-family: "Lucida Grande", Verdana, sans-serif;
	font-size: 14px;
	color: #000888;
	padding: 5px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	outline: none;
	vertical-align: middle;
	
	
}
.text:focus
{
	border:1px solid #498AF3;
}
#edit_but
	{
	cursor: pointer;
	width: 100px;
	height: 30px;
	background: linear-gradient(to bottom, #5FC159, #37A034);
	background-image: -moz-linear-gradient(center top, #5FC159, #37A034);
	background: -webkit-linear-gradient(top, #5FC159 20%, #37A034 100%);
	border: none;
	color: white;
	font-size: 12px;
	font-weight: bold;
	font-family: arial;
	}
#ed_error{
	color:red;
	font-weight:bold;
	font-size:15px;
	margin-left:40%;
}
</style>
   <div id="wrapper">
      <div id="header">
	<h1>Helping Hands</h1>
	<h1 style="float: left;margin-left:20%;background-color:#300000;opacity:1; -webkit-border-radius: 5px;
   -moz-border-radius: 5px;">HCD Details</h1>
 
	<ul>
		<li style="background_color:#000;"><a href="next.php"><img src="images/back.png" style="height:15px;width:15px;">back</a></li>
	  <li><a href="logout.php">logout</a></li>

	</ul>
      </div>    
    </div>
<div id="main_body">
	<form action="Rec_entry.php" method=post>
	<table id="stu_details" align=center width="500px">
		<tr><th colspan=2>Off Record Entry &nbsp;&nbsp;</th></tr>
		<tr><td >Student ID</td><td>: <input type="text" name="st_id" class=text></td></tr>
		<tr><td>Batch</td><td>: <input type="text" name="batch" class=text></td></tr>
		<tr><td>Date</td><td>: <input type="text" name="date" class=text></td></tr>
		<tr><td>Reason</td><td>: <textarea name="reason" rows=5 cols=15 class=text></textarea></td></tr>
		<tr><td>Amount</td><td>: <input type="text" name="amt" class=text></td></tr>
		<tr><td></td><td>&nbsp;&nbsp;<input type=submit value="Enter" id="edit_but" name="submit" onclick="return check_this()"></td></tr>
	</table>
	<div id="ed_error">&nbsp;</div><br><br>
	</form>
</div>
<?php
if(isset($_REQUEST["submit"]))
{
	$id=$_POST["st_id"];
	$batch=$_POST["batch"];
	$dat=$_POST["date"];
	$reason=addslashes($_POST["reason"]);
	$amt=$_POST["amt"];
	if($id=="")
	{
		echo <<<S
		<script type="text/javascript">
			document.getElementById("ed_error").innerHTML="Enter ID number";
		</script>
S;
	}
	else if($batch=="")
	{
		echo <<<S
		<script type="text/javascript">
			document.getElementById("ed_error").innerHTML="Enter Batch";
		</script>
S;
	}
	else if($dat=="")
	{
		echo <<<S
		<script type="text/javascript">
			document.getElementById("ed_error").innerHTML="Fill Date Field";
		</script>
S;
	}
	
	
	else if($reason=="")
	{
		echo <<<S
		<script type="text/javascript">
			document.getElementById("ed_error").innerHTML="Fille the Reason Field";
		</script>
S;
	}
	else if($amt=="")
	{
		echo <<<S
		<script type="text/javascript">
			document.getElementById("ed_error").innerHTML="Enter Amount";
		</script>
S;
	}
	else
	{
		$que=mysql_query("select * from records") or die(mysql_error());
		$sno=mysql_num_rows($que)+1;
		$que1=mysql_query("insert into records values($sno,'$id','$dat','$reason','$amt','$batch')") or die(mysql_error());
		echo <<<S
		<script type="text/javascript">
			alert("One Record Inserted......");
			window.location.href="next.php";
		</script>
S;
	}
}
?>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; RGU HELPING HANDS</div></center>
</html>
