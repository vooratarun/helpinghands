<html>
<head>
<meta charset="utf-8">
    <title>Helping Hands Registration</title>
    <meta name="description" content="A preview of the jQuery UI Bootstrap theme">
    <meta name="author" content="Addy Osmani">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Styles --> 
    <link type="text/css" href="css/custom-theme/jquery-ui-1.9.2.custom.css" rel="stylesheet" />
    
    <link type="text/css" href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/demo.css" rel="stylesheet">
<script src="jquery.js" type="text/javascript"></script>
<script>
function check()
{
	
	var id= $('#uid').val();
	var sub= id.substring(0,2);
	if(id==false || (id.length)!=7 || sub!='N1' ){
		alert("Enter proper id");return false;}
	else
		return true;
	
		

}
</script>
</head>
<img src='logo.png' style='position:fixed;top:18%;' />
<img src='1.png' style='position:fixed;top:0px;width:100%;'><br><br><br><br><br>
<h2 style='position:fixed;top:5%;left:6%;color:yellow'>Helping Hands Health Camp Registration</h2>

<div id='form'>
<form method='post' action='' >
<center><table border=0>
<tr>
<td>ID No:-</td><td><input  style="height:30px;"type='text' name='uid' id='uid' maxlength='7'></td>
<tr><td><br>Check on your problem:-</td><td><br>
<input type='checkbox'  name='eye' value='Eye' >Eye<br/>
<input type='checkbox'   name='skin' value='Skin' >Skin<br/>
<input type='checkbox' name='dental' value='Dental' >Dental</td>

</tr>
<tr><td colspan=2>
<center><br/><button type='submit' name='submit' class='ui-button-primary' onclick="return check();">submit</button></center></td></tr>
<tr><td colspan=2><br><br><center><button type='submit' name='all' class='ui-button-primary' >Registered students</button></center></td></tr>
</table></center>

</div>

<?php
mysql_connect("localhost","root","9014734454");
if(!mysql_select_db("help"))echo "not selected";
if(isset($_POST['submit']))
{
	echo "<script>$('#form').hide(1000);</script>";
	

	@$id=$_POST['uid'];
	$eye="";$skin="";$dental="";
	if(@$_POST['eye']!="") $eye="yes";
	if(@$_POST['skin']!="")$skin="yes";
	if(@$_POST['dental']!="")$dental="yes";

	$c=mysql_query("SELECT uid FROM health WHERE uid='$id'") or die(mysql_error());
	$cf=mysql_fetch_array($c);
	if($cf['uid']!=$id)
{
		if($eye=='yes' || $skin=='yes' || $dental=='yes'){
			$q1=mysql_query("INSERT INTO `health`( `uid`, `eye`, `skin`, `dental`) VALUES('$id','$eye','$skin','$dental')");
		if($q1==true)
				echo "<center><h2><font color=green>Registration Done Successfully...</font></h2></center>";}
	else
			echo "<center><h2><font color=red>You did not register for any problem...</font></h2></center>";
}
	else
		echo "<center><h2><font color=red>Already Registered...</font></h2></center>";

		
		
}
if(isset($_POST['all']))
{
	echo "<script>$('#form').hide(1000);</script>";
$q=mysql_num_rows(mysql_query("SELECT * from health"));
	if($q!=0)
	{
		echo "<center><h4><font color=green>Total registered students...</font>$q</h4></center>";
		$q1=mysql_num_rows(mysql_query('select * from health where eye="yes"'));
		echo "<center><h4><font color=green>Students registered for Eye ...</font>$q1</h4></center>";
		$q1=mysql_num_rows(mysql_query('select * from health where skin="yes"'));
		echo "<center><h4><font color=green>Students registered for skin ...</font>$q1</h4></center>";
		$q1=mysql_num_rows(mysql_query('select * from health where dental="yes"'));
		echo "<center><h4><font color=green>Students registered for dental ...</font>$q1</h4></center>";
				
	}
}
?>

        <!--end static dialog-->

        <!--scripts-->

        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
        <!--daterangepicker-->
        <script type="text/javascript" src="third-party/jQuery-UI-Date-Range-Picker/js/date.js"></script>
        <script type="text/javascript" src="third-party/jQuery-UI-Date-Range-Picker/js/daterangepicker.jQuery.js"></script>

        <!--wijmo-->
        <script src="third-party/wijmo/jquery.mousewheel.min.js" type="text/javascript"></script>
        <script src="third-party/wijmo/jquery.bgiframe-2.1.3-pre.js" type="text/javascript"></script>
        <script src="third-party/wijmo/jquery.wijmo-open.1.5.0.min.js" type="text/javascript"></script>


        <!-- FileInput -->
        <script src="third-party/jQuery-UI-FileInput/js/enhance.min.js" type="text/javascript"></script>
        <script src="third-party/jQuery-UI-FileInput/js/fileinput.jquery.js" type="text/javascript"></script>

        <!--init for this page-->
        <script type="text/javascript" src="js/demo.js"></script>

</html>
