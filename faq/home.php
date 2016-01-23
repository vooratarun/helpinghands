<html>
	<head><title>FAQ's</title>
<link href='bootstrap.css' type='text/css'>
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
	<link href="ink.css" rel="stylesheet">
<link href='bootstrap.css' rel="stylesheet">
	    <style type="text/css">
    @font-face{
    font-family:Adobe Gothic Std;
    src:url('./fonts/AdobeGothicStd-Bold.otf');
    }
    @font-face{
    font-family:andlso;
    src:url('./fonts/andlso.ttf');
}
</style>
	<script type='text/javascript' src='jquery.js'></script>
	<script type='text/javascript'>
	var t;
	function val(t){
		$("#"+t).slideToggle();
		$("body").click(function() {
			$("#"+t).hide();
		});
		/*document.getElementById(t).style.display='block';*/
		return true;
	}
	var s;
	function hide(s){
		document.getElementById(s).style.display='none';
	}
	$(document).ready(function(){
	$("div#button").click(function(){
	$("div#hide").slideToggle("slow");
	});
			});
		</script>
	
<div style="text-align:center;color:#0080C0;font-size:24px;font-family:Adobe Gothic Std;"><strong><b>Frequently Asked Question's</b></strong></div><br>
    If you have any Queries regarding Helping Hands issues or working procedure just post your query below with clear description.We will answer your questions with better explanation.
<br><br>
    <div class="ink-button blue" id="button" >Post a New Question</div>

<div id="hide" style='display:none;margin-left:30px;'><br>
<!--
<form action="faqs.php" method="POST">
<table>
<tr><td>Name</td><td><input type=text placeholder="Enter your Name" name=name id=name></td></tr>
<tr><td>Question</td><td colspan='4'><textarea placeholder="Mention your Question "  id=comment cols=80 rows=3 name=question></textarea></td><td><input type=submit id='but' class="ink-button blue" id="button" value="Post" onclick="return check()"></td></tr>
</table>
</form>
--><center>
<form class="form-signin" action="logincheck.php" method="post">
        <h2 class="form-signin-heading">Please Log-in</h2>
<table cellpadding=2 cellspacing=5>
<tr>
      <td>ID NO:-</td><td><input type="text" class="input-block-level" name="idno" id="idno" placeholder="Universtiy ID NO" maxlength="7"></td>
</tr>
       <tr><td>Exam Password:- </td><td> <input type="password" class="input-block-level" name="pwd" id="pwd" placeholder="Exam Password"></td></tr>
      <tr>  
        <td colspan=2><center><input class="btn btn-medium btn-primary" type="submit"  onclick="return validate();" value="Login "></input></center></td></table>
      </form></center>
</div>

<table class="ink-table bordered alternating hover">
<th>S.No.</th><th>Description</th><th style="width:50px;">Posted by</th><th>Time</th>
<?php
mysql_connect("localhost","root","9014734454");
mysql_select_db("helpinghand");
$row=mysql_query("Select *from faqs ORDER BY sno desc");
$count=1;
while($result=mysql_fetch_array($row)){
	if($result['answer']!=''){
	  echo "<tr><td >".$count.".</td><td ><div onclick='return val(".$count.")'>".$result['question']."</div></td><td '><b>".$result['name']."</b></td><td >".$result['date']."</td></tr>
	  
	  <tr id=".$count." style='margin-left:61.5px;display:none;position:absolute;width:82.9%;text-align:justify;-moz-box-shadow:0px 0px 3px black;box-shadow:0px 0px 3px black;-moz-border-radius:10px;border-radius:10px;border-top:0px;text-align:justify;'>
	  <td><p><b style='font-size:16px;color:#0080C0;font-family:Adobe Gothic Std;font-size:18px;'> Answer :</b>
<b style='margin-bottom:10px;margin-right:50px; font-size:14px;'><i>".$result['answer']."</i></b></td></tr>";
 $count++;
	}
}
?><tr align="center"><th><br><br></th></tr></table>

	</body>
</html>
