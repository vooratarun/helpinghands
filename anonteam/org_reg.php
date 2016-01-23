<!DOCTYPE html>
<html lang="en">
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

  </head>

  <body>
<!DOCTYPE HTML>

<script>
var id;
var batch;
function dothis()
{
id=$("#uid").val();
batch="";

if(id.indexOf("N14")==0)
	batch="PUC1";
else if(id.indexOf("N13")==0)
	batch="PUC2";

else if(id.indexOf("N12")==0)
	batch="E1";

else if(id.indexOf("N11")==0)
	batch="E2";
/*
else if(id.indexOf("N10")==0)
	batch="E3";
else if(id.indexOf("N09")==0)
	batch="E4";*/
else
	batch="";
var str="";
if(id.indexOf("N14")==0 || id.indexOf("N13")==0)
	{
	str+="<table border=0><tr><td>Batch</td><td><b>"+batch+"</b></td></tr><tr><td>Class</td><td><select id='cluster'><option value=''>Choose Class</option><option value='kappa'>Kappa</option><option value='lamda'>Lamda</option><option value='mue'>Mue</option><option value='omega'>Omega</option></select></td></tr><tr><td>Class Number</td><td><select id='clusterno'><option value=''>Choose Class no</option><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option><option value=6>6</option><option value=7>7</option><option value=8>8</option><option value=9>9</option><option value=10>10</option><option value=11>11</option><option value=12>12</option><option value='T1'>T1</option><option value='T2'>T2</option><option value='T3'>T3</option><option value='T4'>T4</option><option value='T5'>T5</option><option value='T6'>T6</option><option value='T7'>T7</option><option value='T8'>T8</option><option value='T9>T9</option><option value='T10'>T10</option></select></td></tr>";
	str+="<tr><td>Name </td><td><input type='text' id='uname' name='uname' ></td></tr><tr><tr><td>Password</td><td><input type='password' name='upwd' id='upwd' ></td></tr><tr><td>Confirm Password</td><td><input type='password' id='cupwd' name='cupwd' ></td></tr><tr><td>Contact No.</td><td><input type='text' maxlength=10 id='uph' name='uph' ></td></tr><tr><td>Email</td><td><input type='email' id='uemail' name='uemail' ></td></tr><tr><td>Security Question</td><td><select id='usq'><option value=''>Security Question</option><option value='favc'>Fav Color</option><option value='favb'>Fav Book</option><option value='bf'>Best Friend name</option><option value='favsub'>Fav Subject</option><option value='favp'>Fav Place</option></select></td></tr><tr><td>Answer</td><td><input type='text' name='sqa' id='sqa' ></td></tr><tr><td colspan=2 ><center><button onclick='register()' class='ui-button-primary'>Register</button></center></td></tr></table>";
	


	}

else if(id.indexOf("N12")==0)
{

str+="<table border=0><tr><td>Batch</td><td><b>"+batch+"</b></td></tr><tr><td>Section</td><td><select id='sec'><option val=''>Choose Section</option><option value='secA'>section-A</option><option value='secB'>section-B</option></select></td></tr><tr><td>Block</td><td><select id='cluster'><option value=''>Choose Block</option><option value='A2'>A2</option><option value='A3'>A3</option><option value='A4'>A4</option></select></td></tr><tr><td>Class Number</td><td><select id='clusterno'><option value=''>Choose Class no</option><option value='F1'>F1</option><option value='F2'>F2</option><option value='F3'>F3</option><option value='F4'>F4</option><option value='F5'>F5</option><option value='F6'>F6</option><option value='F7'>F7</option><option value='F8'>F8</option><option value='F9>F9</option><option value='F10'>F10</option><option value='S1'>S1</option><option value='S2'>S2</option><option value='S3'>S3</option><option value='S4'>S4</option><option value='S5'>S5</option><option value='S6'>S6</option><option value='S7'>S7</option><option value='S8'>S8</option><option value='S9>S9</option><option value='S10'>S10</option><option value='T1'>T1</option><option value='T2'>T2</option><option value='T3'>T3</option><option value='T4'>T4</option><option value='T5'>T5</option><option value='T6'>T6</option><option value='T7'>T7</option><option value='T8'>T8</option><option value='T9>T9</option><option value='T10'>T10</option></select></td></tr>";
str+="<tr><td>Name </td><td><input type='text' id='uname' name='uname' ></td></tr><tr><tr><td>Password</td><td><input type='password' name='upwd' id='upwd' ></td></tr><tr><td>Confirm Password</td><td><input type='password' id='cupwd' name='cupwd' ></td></tr><tr><td>Contact No.</td><td><input type='text' maxlength=10 id='uph' name='uph' ></td></tr><tr><td>Email</td><td><input type='email' id='uemail' name='uemail' ></td></tr><tr><td>Security Question</td><td><select id='usq'><option value=''>Security Question</option><option value='favc'>Fav Color</option><option value='favb'>Fav Book</option><option value='bf'>Best Friend name</option><option value='favsub'>Fav Subject</option><option value='favp'>Fav Place</option></select></td></tr><tr><td>Answer</td><td><input type='text' name='sqa' id='sqa' ></td></tr><tr><td colspan=2 ><center><button onclick='register()' class='ui-button-primary'>Register</button></center></td></tr></table>";
			
}
else if(id.indexOf("N11")==0)
{

str+="<table border=0><tr><td>Batch</td><td><b>"+batch+"</b></td></tr><tr><td>Branch</td><td><select id='sec'><option val=''>Choose Branch</option><option value='CSE-1'>CSE1</option><option value='CSE2'>CSE2</option><option value='CSE3'>CSE3</option><option value='ECE-1'>ECE1</option><option value='ECE2'>ECE2</option><option value='ECE3'>ECE3</option><option value='CIVIL1'>CIVIL1</option><option value='CIVIL2'>CIVIL2</option><option value='CIVIL3'>CIVIL3</option><option value='MECH1'>MECH1</option><option value='MECH2'>MECH2</option><option value='MECH3'>MECH3</option><option value='MME1'>MME1</option><option value='MME2'>MME2</option><option value='CHEM1'>CHEM1</option></select></td></tr><tr><td>Block</td><td><select id='cluster'><option value=''>Choose Block</option><option value='A2'>A2</option><option value='A3'>A3</option><option value='A4'>A4</option></select></td></tr><tr><td>Class Number</td><td><select id='clusterno'><option value=''>Choose Class no</option><option value='F1'>F1</option><option value='F2'>F2</option><option value='F3'>F3</option><option value='F4'>F4</option><option value='F5'>F5</option><option value='F6'>F6</option><option value='F7'>F7</option><option value='F8'>F8</option><option value='F9>F9</option><option value='F10'>F10</option><option value='S1'>S1</option><option value='S2'>S2</option><option value='S3'>S3</option><option value='S4'>S4</option><option value='S5'>S5</option><option value='S6'>S6</option><option value='S7'>S7</option><option value='S8'>S8</option><option value='S9>S9</option><option value='S10'>S10</option><option value='T1'>T1</option><option value='T2'>T2</option><option value='T3'>T3</option><option value='T4'>T4</option><option value='T5'>T5</option><option value='T6'>T6</option><option value='T7'>T7</option><option value='T8'>T8</option><option value='T9>T9</option><option value='T10'>T10</option></select></td></tr>";
str+="<tr><td>Name </td><td><input type='text' id='uname' name='uname' ></td></tr><tr><tr><td>Password</td><td><input type='password' name='upwd' id='upwd' ></td></tr><tr><td>Confirm Password</td><td><input type='password' id='cupwd' name='cupwd' ></td></tr><tr><td>Contact No.</td><td><input type='text' maxlength=10 id='uph' name='uph' ></td></tr><tr><td>Email</td><td><input type='email' id='uemail' name='uemail' ></td></tr><tr><td>Security Question</td><td><select id='usq'><option value=''>Security Question</option><option value='favc'>Fav Color</option><option value='favb'>Fav Book</option><option value='bf'>Best Friend name</option><option value='favsub'>Fav Subject</option><option value='favp'>Fav Place</option></select></td></tr><tr><td>Answer</td><td><input type='text' name='sqa' id='sqa' ></td></tr><tr><td colspan=2 ><center><button onclick='register()' class='ui-button-primary'>Register</button></center></td></tr></table>";
			
}

$("#add").html(str);

}

function register()
{
	
		var section=$("#sec").val();		
		var clu=$("#cluster").val();
		var cluno=$("#clusterno").val();
		var name=$("#uname").val();
		var pwd=$("#upwd").val();
		var cpwd=$("#cupwd").val();
		var email=$("#uemail").val();
		var cno=$("#uph").val();
		var sq=$("#usq").val();
		var sqa=$("#sqa").val();
		if(clu==false || cluno==false || name==false || pwd==false || cpwd==false || email==false || cno==false || sq==false || sqa==false)
			alert("Fill Required Fields");
		else
			{
				if(pwd!=cpwd)
					alert("Password,Confirm Password Must be Same");
				else
					{
						$("#status").html("<font color=red><center>Loading<blink>...</blink></font>");
						$.post("reg.php?clu="+clu+"&id="+id+"&bt="+batch+"&section="+section+"&cluno="+cluno+"&name="+name+"&pwd="+pwd+"&email="+email+"&cno="+cno+"&sq="+sq+"&sqa="+sqa,function(data){
							$("#status").html(data);
							});
						$("#mdiv").hide(2000);
					}
			}
		
}
</script>
<img src='logo.png' style='position:fixed;top:18%;' />

<img src='1.png' style='position:fixed;top:0%;width:100%;' /><br><Br><br><Br><Br>
<h2 style='position:fixed;top:5%;left:6%;color:yellow'>Helping Hands</h2>
<h6 style='position:fixed;top:9%;left:90%;color:yellow'>&copy;HH WebTeam</h6>
<div id='status'></div>
<div id='mdiv' align='center'>
<table border=0>
<tr>
<td>
ID NO </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type="text" maxlength=7 id='uid' name='uid' onkeyup="dothis()" /></td></tr>
</table> 
<div id='add'></div>
</div>




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



  </body>
</html>
