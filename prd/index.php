<?php
session_start();
		if(@$_SESSION["user"]=="admin")
		echo <<<s

		<script type="text/javascript">window.location.href="./debit/next.php";</script>

s;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html>

<title>Debit details</title>

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
	  border:1px solid gray;
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
</style>
<body>	

    <div id="wrapper">
      <div id="header">
	<h1>Helping Hands</h1>
	<h1 style="float: left;margin-left:20%;background-color:#300000;opacity:1; -webkit-border-radius: 5px;
   -moz-border-radius: 5px;">PRD Details</h1>
   	<ul>
	  <li><a href="#" >Sign In</a></li>
 
	</ul>
      </div>    
    </div>
    <div id="main_body">
  <div id="login">
	<center>
		<div style="margin:10px;border:1px solid blue;width:400px;height:250px ;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius:5px;"><div style="margin:10px;background-image:url(images/bhead.gif)">Login Here</div>
	<form action="index.php" src="#" method=post>
		<table>
			<tr><td colspan=2>&nbsp;</td></tr>
			<tr>
				<td>User ID</td><td><input type=text id="text" name="uid"></td>
			</tr>
			<tr>
				<td>Password</td><td><input type=password id="text" name="pass"></td>
			</tr>
			<tr>
				<td></td><td><input type=submit value=Login id="Btn" name="login_bot"></td>
			</tr>

		</table>
	</form>
		</div>
	</center>
  </div>
  </div>
 <?php
  if(isset($_REQUEST["login_bot"]))
  {
	  
	  $id_e=htmlspecialchars($_POST["uid"]);
	  $pass=htmlspecialchars($_POST["pass"]);	
	  include("db_conf.php");
	  $q=mysql_query("select * from login where id=\"$id_e\" and password=\"$pass\"");
	  if(mysql_num_rows($q)!=0)
	  {
		  $_SESSION["user"]="admin";
		echo <<<s

		<script type="text/javascript">window.location.href="next.php";</script>

s;
		
	  }
	  else
		echo <<<s

		<script type="text/javascript">window.location.href="index.php";</script>

s;
/*	  

	  
	  
	  
	  
		echo "Success";
	  
*/
  }
 ?>
</body>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; RGU HELPING HANDS</div></center>
</html>
