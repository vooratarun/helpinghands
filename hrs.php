<?php 
session_start();
?>

  <script type="text/javascript" src="./js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="admin_notifications/css/table.css">
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
	width:400px;
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
	width: 60%;
	height: 32px;
	font-size: 15px;
	direction: ltr;
	text-align:center;
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

.broom_heading
	{
		color:#CC3300;
		font-weight:bold;
		height:30px;
		font-size:1.1em;
		text-align:center;
		border-bottom:1px solid #B8B8B8 ;
	}
	table.broom_table td {
	vertical-align:middle;
	text-align:center;
    padding: 20px 10px 0px 20px;}
    
    	.button {
	display: inline-block;
	zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */
	*display: inline;
	vertical-align: baseline;
	margin: 0 2px;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
.button:hover {
	text-decoration: none;
}
.button:active {
	position: relative;
	top: 1px;
}

.bigrounded {
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;
	border-radius: 2em;
}
.medium {
	font-size: 12px;
	padding: .4em 1.5em .42em;
}
.small {
	font-size: 11px;
	padding: .2em 1em .275em;
}

.big {
	font-size: 30px;
	padding: .5em 2em .6em;
}

.pink {
	color: #feeef5;
	border: solid 1px #d2729e;
	background: #f895c2;
	background: -webkit-gradient(linear, left top, left bottom, from(#feb1d3), to(#f171ab));
	background: -moz-linear-gradient(top,  #feb1d3,  #f171ab);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#feb1d3', endColorstr='#f171ab');
}
.pink:hover {
	background: #d57ea5;
	background: -webkit-gradient(linear, left top, left bottom, from(#f4aacb), to(#e86ca4));
	background: -moz-linear-gradient(top,  #f4aacb,  #e86ca4);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4aacb', endColorstr='#e86ca4');
}
.pink:active {
	color: #f3c3d9;
	background: -webkit-gradient(linear, left top, left bottom, from(#f171ab), to(#feb1d3));
	background: -moz-linear-gradient(top,  #f171ab,  #feb1d3);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f171ab', endColorstr='#feb1d3');
}


</style>
<script>
	function shwprathap()
	{
    $("html, body").animate({ scrollTop: 650 }, 1000); 
}
	function loadhrs()
	{
		window.location='index.php';
	}
	function login()
	{
		Userid=$("#Userid").val();
		passwd=$("#passwd").val();
		
		if(Userid=="" || passwd==""){
		$("#Userid").css("border","2px solid red");
		$("#passwd").css("border","2px solid red");
	}
	else
	{
		
		$.post("new_hh/checkhrlogin.php",{Userid:Userid,passwd:passwd},function(data){if(data.indexOf("success")!=-1){window.location="../help"}else{alert(data);}});
		}
		}
		
		
		function sendmsg()
		{
		msgto=$("#msgto").val();
		description=$("#description").val();
		
		if(msgto=="" || description==""){
		$("#msgto").css("border","2px solid red");
		$("#description").css("border","2px solid red");
	}
	else
	{
		$("#msgbtn").html("<img src='images/ajax-loader.gif'> Sending...");
		$.post("new_hh/sendhrmessage.php",{msgto:msgto,description:description},function(data){if(data.indexOf("success")!=-1){$(".login-box").html("<center><img src='images/letter48.png'><br><h2 style='font-weight:bold;'>Your Message to <u><font color='orange'>"+msgto+" </font></u>has been submitted successfully...<br><h1 style='color:green;'>Thank you</h1></h2></center>");}else{alert(data);}});
		}
			}
			
			</script>
		<center>
<div style="width:40%; background:#fff;">
	 <?php
	  if(isset($_SESSION['hrid']))
	  {?>
		 
	<center><a style="cursor:pointer;" onClick="shwprathap()" class="button pink">Click here for Your Problems Status </a></center>
	<?php } ?>
        
  <div class="login-box">
	  <?php
	  if(!isset($_SESSION['hrid']))
	  {
		  
include('faq/authenticate.php');
	
		  ?>
		<h2><u>Representatives Login</u></h2>
    <form action="" method="post">
      <div class="text-div">
        <label for="Userid"><strong class="text-label">University ID</strong></label>
        <input name="Userid" id="Userid" value="" maxlength="7" placeholder="University ID" type="text" autofocus>
      </div>
       
		
      <div class="passwd-div">
        <label for="Passwd"><strong class="passwd-label">Password</strong></label>
        <input name="Userpasswd" id="passwd" value="" placeholder="password" type="password">
      </div>
      <span id="msgbtn"><a class="button button-submit" onclick="login()" style='cursor:pointer;'>Login</a></span>
      
    </form>
    <?php
}
else
{
?>
<span id="fom">
<h2><u>Representatives Problems</u></h2>
    <form action="" method="post">
      <div class="text-div">
        <label for="msgto"><strong class="text-label">Message to</strong></label>
      <select id='msgto'>
      <option value="">Select</option>
      <option value="web team">webteam</option>
      <option value="other departments">Other Departents</option>
      </select>
      </div>
      
       <div class="passwd-div">
        <label for="Passwd"><strong class="passwd-label">Description</strong></label>
        <textarea id='description' cols='23' rows='5'></textarea>
      </div>
      <span id="msgbtn"><a class="button button-submit" onclick="sendmsg()"  style='cursor:pointer;'>Send</a></span>
      
    </form>
    </span>
      <?php
}
?>
  </div>




    
    </div>
    <?php
    if(isset($_SESSION['hrid'])) 
{
	include('admin_notifications/db_conf.php');
	$Userid=$_SESSION['hrid'];
	?>
    <div class='' style='width:20%;margin-left:30px;'></div>
						<center><U><h3 style="font-family:Adobe Gothic Std"><?php echo $Userid;?> PROBLEMS</h3></U></center><BR>
<table class="table2" style='width:80%;'>
	<thead>
	<tr class='broom_heading'>
		<th style='font-weight:bold;text-align:center;color:#eee;'>S.NO</th>
		<th style='font-weight:bold;text-align:center;color:#eee;'>TO</th>
		<th  style='width:50px;font-weight:bold;text-align:center;color:#eee;'>MESSAGE</th>
		<th style='font-weight:bold;text-align:center;color:#eee;'>RESPONSE</th>
	</tr>
        </thead>
        <?php
        $note=mysql_query("SELECT * FROM `hrmessages` WHERE visibility='1' && Userid='$Userid' ORDER BY sno DESC");
        while($note_fet=mysql_fetch_array($note))
        {
		$nt=$note_fet['sno'];
        ?>
	<tr  class='odd' id="n<?php echo $nt;?>"><td><?php echo $note_fet['sno'];?></td><td><?php echo $note_fet['msgto'];?></td><td style="width:50px;"><?php echo $note_fet['description'];?></td><td><?php echo $note_fet['response'];?><?php } ?></td></tr>
	<tr><td></td><td></td><td></td><td></td></tr>
</table>
<?php
}

?>

    </center>
<br />
<br />


