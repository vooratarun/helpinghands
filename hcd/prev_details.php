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
	
<title>Admin</title>
<link rel="shortcut icon" href="images/admin_logo.png" type="image/x-icon" />
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
	<table align=center>
		<tr><td rowspan=4><img src="images/logo.png" width=250px height=100% /></td><td><a href="weekly.php" target="_blank" style="font-size:20px;font-weight:bold;color:green;cursor:pointer;width:200px;height:55px">Show Weekly wise Details</a></td></tr>
		<tr><td><a href="custom_week.php" target="_blank" style="font-size:20px;font-weight:bold;color:green;cursor:pointer;width:200px;height:55px">View Details for custom Week</a></td></tr>
		<tr><td><a href="yearly.php" target="_blank" style="font-size:20px;font-weight:bold;color:green;cursor:pointer;width:200px;height:55px">Show Yearly data</a></td></tr>
		<tr><td><a href="off_records.php" target="_blank" style="font-size:20px;font-weight:bold;color:green;cursor:pointer;width:200px;height:55px">Apart from the Year Budget</a></td></tr>
	</table>
	<p  style='font-size:20px;font-weight:bold;color:blue;margin:2% 5%'><i><img src='images/success.gif'>&nbsp;&nbsp;By Default you can view Last Tuesday to Today transactions</i></p>
	<p  style='font-size:20px;font-weight:bold;color:blue;margin:2% 5%'><i><img src='images/success.gif'>&nbsp;&nbsp;You can also view Particular Date to Date transactions</i></p>
	<p  style='font-size:20px;font-weight:bold;color:blue;margin:2% 5%'><i><img src='images/success.gif'>&nbsp;&nbsp;You can View Year wise data also</i></p>
</div>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; RGU HELPING HANDS</div></center>
</body>
</html>
