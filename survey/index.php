<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Helping Hands Survey</title>
<link href="login-box.css" rel="stylesheet" type="text/css" />
<link href="style.css" type="text/css"  rel="stylesheet">
<style>
	h1{
		position:absolute;
		left:420px;
		top:140px;
		color:blue;
		font-weight:bold;
		font-size:35px;

		}
		small{
			position:absolute;
			color:green;
			font-size:20px;
			left:640px;
			top:85px;
		}
</style>
<script type="text/javascript">
	function validate(){
		var uname = document.getElementById("idno").value;
		if (uname == "" || uname== null){
			alert("Please Enter Your Username...");
			return false;
			}
		
		var pwd = document.getElementById("pwd").value;
		if (pwd == "" || pwd== null){
			alert("Please Enter Your Password...");
			return false;
			}
			return true;
		}
		
</script>
</head>
<body>
<center>
<?php
session_start();?>
<table><tr><td><img style='position:absolute;left:180px;' src="./images/heading.png"><h1>HELPING HANDS HEALTH SURVEY</h1></td></tr>
<tr><td align='center'>
<div>
<div id='login-box'>
<H2>Login</H2><h3><?php /*@$_SESSION['loginmessage']*/

 ?></h3>
<br />
<form action='logincheck.php' method='post'>
<div id='login-box-name' style='position:relative;bottom:-20px;'>USER ID:</div><div id='login-box-field' style='margin-top:20px;'><input name='idno' class='form-login' id='idno'  maxlength='7' /></div>
<div id='login-box-name'>Password:</div><div id='login-box-field'><input name='pwd' type='PASSWORD' class='form-login' NAME="pwd" id='pwd'  maxlength='30' /></div>

<br>
<input type=submit onsubmit="return validate();" value='' border=0 style='background:url(images/login-btn.png);width:103px;height:42px;border-width:0px;position: absolute;top:270px;left:220px' />
</div>
</div>
</form>
</td></tr></table>

</center>
</body>

</html>
