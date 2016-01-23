<?php 
session_start();
include('faq/authenticate.php');
?>

  <script type="text/javascript" src="./js/jquery.js"></script>
<style>
html {
	font: 81.25%/1 arial, helvetica, sans-serif;
	color: rgb(51, 51, 51);
	direction: ltr;
}
.login-box {
	margin: 12px 0px 0px;
	padding: 10px 30px 25px 25px;
	background: none repeat scroll 0% 0% rgb(241, 241, 241);
	border: 1px solid rgb(229, 229, 229);
	width:220px;
}
.login-box div {
	margin: 0px 0px 1.5em;
}
.login-box h2 {
	font-size: 16px;
	line-height: 17px;
	font-weight: normal;
}
.login-box label {
	display: block;
}
.login-box .text-label, .login-box .passwd-label {
	font-weight: bold;
	margin: 0px 0px 0.5em;
	display: block;
	-moz-user-select: none;
}
.login-box label.remember {
	display: inline-block;
	vertical-align: top;
	margin: 9px 0px 0px;
}
strong {
	color: rgb(34, 34, 34);
}
.login-box input[type="text"], .login-box input[type="password"],select {
	width: 100%;
	height: 32px;
	font-size: 15px;
	direction: ltr;
}
input[type="text"], input[type="password"],select {
	display: inline-block;
	height: 29px;
	margin: 0px;
	padding: 0px 8px;
	background: none repeat scroll 0% 0% rgb(255, 255, 255);
	border-right: 1px solid rgb(217, 217, 217);
	border-width: 1px;
	border-style: solid;
	border-color: rgb(192, 192, 192) rgb(217, 217, 217) rgb(217, 217, 217);
	-moz-border-top-colors: none;
	-moz-border-right-colors: none;
	-moz-border-bottom-colors: none;
	-moz-border-left-colors: none;
	border-image: none;
	-moz-box-sizing: border-box;
	border-radius: 1px 1px 1px 1px;
}




textarea {
	display: inline-block;
	margin: 0px;
	padding: 0px 8px;
	background: none repeat scroll 0% 0% rgb(255, 255, 255);
	border-right: 1px solid rgb(217, 217, 217);
	border-width: 1px;
	border-style: solid;
	border-color: rgb(192, 192, 192) rgb(217, 217, 217) rgb(217, 217, 217);
	-moz-border-top-colors: none;
	-moz-border-right-colors: none;
	-moz-border-bottom-colors: none;
	-moz-border-left-colors: none;
	border-image: none;
	-moz-box-sizing: border-box;
	border-radius: 1px 1px 1px 1px;
}
ol, ul {
	list-style: none outside none;
	line-height: 17px;
	margin-left:0px;
	padding-left:0px;
}
a {
	color: rgb(17, 85, 204);
	text-decoration: none;
}
a#forgot_password {
	display:block;
}
.login-box input[type="submit"] {
	margin: 0px 1.5em 1.2em 0px;
	height: 32px;
	font-size: 13px;
}
.button, input.button[type="submit"] {
	height: 29px;
	line-height: 29px;
	vertical-align: bottom;
	margin: 0px;
}
.button-submit {
	border: 1px solid rgb(48, 121, 237);
	color: #fff;
	text-shadow: 0px 1px rgba(0, 0, 0, 0.1);
	background-color: #478BF9;
}
.button {
	display: inline-block;
	min-width: 46px;
	text-align: center;
	color: #fff;
	font-size: 11px;
	font-weight: bold;
	height: 27px;
	padding: 0px 8px;
	line-height: 27px;
	border-radius: 2px 2px 2px 2px;
	transition: all 0.218s ease 0s;
	border: 1px solid rgb(220, 220, 220);
	background-color: #478BF9;
	-moz-user-select: none;
	cursor: default;
}

input[type="text"]:focus, input[type="password"]:focus {
	outline: medium none;
	border: 1px solid rgb(77, 144, 254);
	box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3) inset;
}
textarea:focus, select:focus {
	outline: medium none;
	border: 1px solid rgb(77, 144, 254);
	box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3) inset;
}
</style>
<script>
	function suggest()
	{
		Userid=$("#Userid").val();
		sugto=$("#sugto").val();
		description=$("#description").val();
		
		if(Userid=="" || sugto=="" || description==""){
		$("#Userid").css("border","2px solid red");
		$("#sugto").css("border","2px solid red");
		$("#description").css("border","2px solid red");
	}
	else
	{
		$.post("new_hh/send_suggestion.php",{Userid:Userid,sugto:sugto,description:description},function(data){if(data.indexOf("Submitted")!=-1){$("#Userid,#sugto,#description,label").slideUp(2000);$(".login-box").html("<br><br><br><br><br><br><center><img src='images/letter48.png'><br><h2 style='font-weight:bold;'>Your Suggestion to <u><font color='orange'>"+sugto+" </font></u>has been submitted successfully...<br><h1 style='color:green;'>Thank you</h1></h2></center><br><br><br><br>");}});
		}
		}</script>
<body style="background:#fff">
<div style="width:40%; background:#fff;" id="fom">
  <div class="login-box">
    <form action="" method="post">
      <div class="text-div">
        <label for="Userid"><strong class="text-label">University ID</strong></label>
        <input name="Userid" id="Userid" value="" maxlength="7" type="text" autofocus>
      </div>
        <div class="text-div">
        <label for="Userid"><strong class="text-label">Suggestion To</strong></label>
      <select id='sugto'>
      <option value="">Select</option>
      <option value="web team">webteam</option>
      <option value="other departments">Other Departents</option>
      </select>
      </div>
      <div class="passwd-div">
        <label for="Passwd"><strong class="passwd-label">Description</strong></label>
        <textarea id='description' cols='23' rows='3'></textarea>
      </div>
      <a class="button button-submit" onclick="suggest()" style='cursor:pointer;'>Send Suggestion</a>
      
    </form>
    
  </div>




    
    </div>
<br />
<br />

</body>
</html>
