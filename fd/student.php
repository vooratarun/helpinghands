<?php
session_start();
if($_SESSION["user"]!="admin")
		echo <<<s

		<script type="text/javascript">window.location.href="index.php";</script>

s;
if($_SESSION["id_search"]!="en")
	$_SESSION["id_search"]="n";
include("db_conf.php");
$yer=date("Y");
$y1=date("y")+1;
$ye=$yer."-".$y1;
$quee=mysql_query("select * from year where year='$ye'");
if(!mysql_num_rows($quee))
{
	$yer=date("Y")-1;
	$y1=date("y");
	$ye=$yer."-".$y1;
}
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
#text,#total,#text1
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
	text-transform:uppercase;
	
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
	fieldset{
		width:500px;
	}

#blackk,#blackk1{
	background:black;
	opacity:0;
	position:fixed;
	left:0px;
	top:0px;
	width:100%;
	height:200%;
	display:none;
	}
#editp,#editp1{
	position:fixed;
	left:15%;
	top:10%;
	width:70%;
	height:80%;
	opacity:0;
	background:#fff;
	display:none;
	}
#edit_top{
	background:#0087C1;
	height:5%;
	text-align:center;
	color:white;
	cursor: pointer;
	font-weight:bold;
	}
#edit_close
	{
	position:absolute;
	right:1px;
	top:0%;
	background:#FF4545;
	width:5%;
	height:5%;
	border:0;
	cursor: pointer;
	}
#edit_footer{
	position:absolute;
	bottom:35%;
	text-align:center;
	color:#000;
	margin-left:40%;
	}
#ed_error{
	position:absolute;
	bottom:25%;
	margin-left:-30%;
	color:red;
	font-weight:bold;
	font-size:15px;
}
#ed_error1{
	position:absolute;
	bottom:18%;
	margin-left:-30%;
	color:red;
	font-weight:bold;
	font-size:15px;
}
#edit_body
	{
	margin:5% 30%;
	color:#95950D;
	font-size:10pt;
	}
#edit_table
	{
	width:150%;
	}
#edit_table td
	{
	padding:1%;
	}
#edit_but
	{
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
#edit_cancel
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
#edit_table input { 
	width:277px;
	padding:2px 0 2px 3px;
	border:1px solid #d1d1d1;
	color:#70635b;
	}
#edit_table select option { 
	width:260px;
	padding:2px 0 2px 3px;
	border:1px solid #d1d1d1;
	color:#70635b;
	}

#Go{
	height:30px;
	background-color:blue;
	font-size:17px;
	font-weight:bold;
	color:#fff;
	border:0;
	padding: 3px;
	outline: none;
	vertical-align: middle;
	cursor:pointer;"
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
#prof_pic
	{
	border:1px solid blue;
	width:150px;
	height:180px;
	}
#Error
	{
		border:1px solid #FF3366;
		background:#FF99CC;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		font-weight:bold;
		color:#FF0033;
		display:none;
	}
    </style> 

 <script type="text/javascript"> 
 function close_w()
{
	document.getElementById("blackk").style.display="none";
	document.getElementById("editp").style.display="none";
	document.getElementById("blackk").style.opacity=0;
	document.getElementById("editp").style.opacity=0;
}
function close_w1()
{
	document.getElementById("blackk1").style.display="none";
	document.getElementById("editp1").style.display="none";
	document.getElementById("blackk1").style.opacity=0;
	document.getElementById("editp1").style.opacity=0;
}
 var x=8;
function nn(i,kkk)
{
	i1=i;
	if(x>0)
            {
                    var l=[0.7,0.6,0.5,0.4,0.3,0.2,0.1,0];

                    document.getElementById(i1).style.opacity=l[x];
		    document.getElementById(kkk).style.opacity=l[x]+0.4;
			x--;
                    setTimeout("nn('"+i1+"','"+kkk+"')",50);
            }
            else
                    {
                    document.getElementById(i1).style.visibility="show";
                    x=8;
                    }
}
 function show_form()
 {
	document.getElementById("blackk").style.display="block";
	nn("blackk","editp");
	document.getElementById("editp").style.display="block";
 }
  function show_form1()
 {
	document.getElementById("blackk1").style.display="block";
	nn("blackk1","editp1");
	document.getElementById("editp1").style.display="block";
 }
function reduce(id)
{
	document.getElementById(id).style.display="none";
	return true;
}
xx=0
function kk()
		{
			if(xx<10)
			{
				document.getElementById("Error").style.display="block";
				lis=[0,0.2,0.4,0.6,0.7,0.7,0.7,0.6,0.4,0];
				document.getElementById("Error").style.opacity=lis[xx];
				xx++;
				setTimeout("kk()",300);
			}
			else
			{
				xx=0;
				document.getElementById("Error").style.display="none";
				document.getElementById("Error").style.opacity=0;
			}
		}
function Validate_ID()
{
	var id=document.getElementById("text1").value;
	if(id=="")
	{
		document.getElementById("Error").innerHTML="Please Enter ID";
		kk();
		return false;
	}
	else
		return true;
}
function erase()
{
	document.getElementById("ed_error").innerHTML="";
	document.getElementById("ed_error").style.display="none";
}
function valid_edit()

{
	if(!document.getElementById("sid").value)
	{

		document.getElementById("ed_error").innerHTML="Please Enter ID";
		document.getElementById("ed_error").style.display="block";
		setTimeout("erase()",1500);
		return false;
	}
	else
	{
		idv=document.getElementById("sid").value;
		if(idv[0]=='N' && (idv[1]+idv[2])<=13 && ((idv[1]*10)+idv[2])>=8 && idv.length==7)
			var hai;
		else
		{
			document.getElementById("ed_error").innerHTML="Enter Valid ID";
			document.getElementById("ed_error").style.display="block";
			setTimeout("erase()",1500);
			return false;
		}
	}
	ddd=document.getElementById("dat").value;
	if(!document.getElementById("dat").value)
	{

		document.getElementById("ed_error").innerHTML="Please Enter Date";
		document.getElementById("ed_error").style.display="block";
		setTimeout("erase()",1500);
		return false;
	}
	else if(ddd!="")
	{
		if(ddd[0]+ddd[1]+ddd[2]+ddd[3]+"-"+ddd[5]+ddd[6]+"-"+ddd[8]+ddd[9]!=ddd)
		{
		document.getElementById("ed_error").innerHTML="Please follow the date format";
		document.getElementById("ed_error").style.display="block";
		return false;
		}
	}
	if(document.getElementById("cat").value=="Select")
	{

		document.getElementById("ed_error").innerHTML="Please Select a Category";
		document.getElementById("ed_error").style.display="block";
		setTimeout("erase()",1500);
		return false;
	}
	if(!document.getElementById("amt").value ||document.getElementById("amt").value<=0)
	{
		document.getElementById("ed_error").innerHTML="Please Enter amount";
		document.getElementById("ed_error").style.display="block";
		setTimeout("erase()",1500);
		return false;
	
	}
	else
	{
		x=document.getElementById("amt").value;
		var i,n=0;
		for (i=0;i<x.length;i++)
			if (parseInt(x[i])>=0)
				n=(n*10)+parseInt(x[i]);
			else
			{
	
				document.getElementById("ed_error").innerHTML="Enter amount only";
				document.getElementById("ed_error").style.display="block";
				setTimeout("erase()",1500);
				return false
			}
	}
}
function valid_edit1()
{
	
	field=["nname","dat1","cat1","amt1","reason"];
	ddd=document.getElementById("dat1").value;
	if(document.getElementById(field[0]).value=="")
	{
		document.getElementById("ed_error1").innerHTML="Please Enter Name";
		document.getElementById("ed_error1").style.display="block";
		return false;
	}
	else if(document.getElementById(field[1]).value=="")
	{
		document.getElementById("ed_error1").innerHTML="Date must be entered";
		document.getElementById("ed_error1").style.display="block";
		return false;
	}
	else if(ddd!="")
	{
		if(ddd[0]+ddd[1]+ddd[2]+ddd[3]+"-"+ddd[5]+ddd[6]+"-"+ddd[8]+ddd[9]!=ddd)
		{
		document.getElementById("ed_error1").innerHTML="Please follow the date format";
		document.getElementById("ed_error1").style.display="block";
		return false;
		}
	}
	else if(document.getElementById(field[2]).value=="Select")
	{
		document.getElementById("ed_error1").innerHTML="Select a Category";
		document.getElementById("ed_error1").style.display="block";
		return false;
	}
	else if(document.getElementById(field[3]).value=="" ||document.getElementById("amt1").value<=0)
	{
		document.getElementById("ed_error1").innerHTML="Please Enter Amount";
		document.getElementById("ed_error1").style.display="block";
		return false;
	}
	else if(document.getElementById(field[4]).value=="")
	{
		document.getElementById("ed_error1").innerHTML="Reason field is empty";
		document.getElementById("ed_error1").style.display="block";
		return false;
	}
	else
	{
		x=document.getElementById("amt1").value;
		var i,n=0;
		for (i=0;i<x.length;i++)
			if (parseInt(x[i])>=0)
				n=(n*10)+parseInt(x[i]);
			else
			{
	
				document.getElementById("ed_error1").innerHTML="Enter amount only";
				document.getElementById("ed_error1").style.display="block";
				return false
			}
	}
}
 </script>

    <div id="wrapper">
      <div id="header">
	<h1>Helping Hands</h1>
	<h1 style="float: left;margin-left:20%;background-color:#300000;opacity:1; -webkit-border-radius: 5px;
   -moz-border-radius: 5px;">Debit Details</h1>
 
	<ul>
		<li style="background_color:#000;"><a href="next.php"><img src="images/back.png" style="height:15px;width:15px;">back</a></li>
	  <li><a href="logout.php">logout</a></li>

	</ul>
      </div>    
    </div>
<div id="main_body">
	<table align=center>
		<form action="" method=post>
		<tr><td colspan=2 align=middle  style="font-size:17px;font-weight:bold;color:green">Enter Student ID</td></tr>
		<tr><td><input type=text id="text1" name="st_id"></td><td><input type=submit value="Go" name="go" id="Go" onclick="return Validate_ID()"></td></tr>
		<tr><td id="Error" colspan=2></td></tr>
		</form>
	</table>
	<table  id="stu_details" style="margin:2% 25%;">
		<tr><td rowspan=4 width=200px><font size=6px><img src="images/logo.png" id="prof_pic" alt="Not Found" /></font></td><td width=150px>ID</td><td id="stu_id">:</td></tr>
		<tr><td>Name</td><td id="stu_name">:</td></tr>
		<tr><td>Branch</td><td id="stu_branch">:</td></tr>
		<tr><td>Class</td><td id="stu_class">:</td></tr>
	</table>
	<div>
		<table style="margin:2% 25%;">
			<tr><th style="font-size:17px;font-weight:bold;color:green">Previous Details</th></tr>
			<tr><td style="font-size:17px;font-weight:bold;color:orange">Is there any previous records :</td><td id="state"  style="font-size:17px;font-weight:bold;color:green"></td></tr>
			<tr><form action="" method=post><td style="font-size:17px;font-weight:bold;color:blue;border:0.1px dotted blue;display:none" id="sh_mo"><input type=submit  style="border:0px;color:blue;font-size:17px;font-weight:bold;background:transparent;cursor:pointer" value="More Details" name="sh_moo"><img src="images/d1.png"></form></td></tr>
		</table>
<?php
if(isset($_REQUEST["sh_moo"]))
{
	
	$sid=$_SESSION['sid'];
	$bat=$sid[1].$sid[2];
	$quer1=mysql_query("select * from 20".$bat."b where id='$sid'");
	if(!mysql_num_rows($quer1))
		if($bat>=9)
			$bat+=1;
		else
			$bat=$bat[0].($bat[1]+1);
	$quer=mysql_query("select * from students where ID='$sid' and year='$ye' ORDER BY date ");
	$quer1=mysql_query("select * from 20".$bat."b where id='$sid'");
	$d1=mysql_fetch_array($quer1);
	$j=mysql_num_rows($quer);
			echo "<script>document.getElementById('state').innerHTML=' yes';document.getElementById('sh_mo').style.display='block';</script>";
	echo <<<s
		<script type=text/javascript>
			document.getElementById("stu_details").style.display="none";
		</script>
s;
	echo "<table style='margin:2% 25%;'>";
	echo "<tr><td style='font-size:17px;font-weight:bold;color:green;width:100px'>ID</td><td style='font-size:17px;font-weight:bold;color:green'>:".$d1['ID']."</td></tr>";
	echo "<tr><td style='font-size:17px;font-weight:bold;color:green'>Name</td><td style='font-size:17px;font-weight:bold;color:green'>:".$d1['Name']."</td></tr>";
	echo "</table>";
	echo "<table id='stu_details'  style='margin:2% 25%;border-bottom:1px solid #ddd;border-top:1px solid #ddd;width:60%'>";
	echo "<tr><th>S.No</th><th>Date</th><th>Category</th><th>Money</th><th style='width:450px'>Proofs</th></tr>";
	$i=1;
	while($row=mysql_fetch_array($quer))
	{
		echo "<tr style='border-bottom:1px solid #ddd;'><td align=center>".($i++)."</td><td align=center>".$row[2]."</td><td align=center>".$row[3]."</td><td align=center>".$row[4]."</td><td align=center>".$row[5]."</td></tr>";
	}
	echo "</table>";
}
?>

		<a style="font-size:17px;font-weight:bold;color:blue;text-decoration:none;cursor:pointer;margin:2% 25%;"  onclick="show_form()">Application Form (Students)</a>
		<a style="font-size:17px;font-weight:bold;color:blue;text-decoration:none;cursor:pointer;"  onclick="show_form1()">Application Form(For Others)</a>
		</br>
		</br></br></br></br>
	</div>
</div>


	<div  id="blackk" onclick="close_w()"></div>
	<div id="editp">
		<div id="edit_top">Fill the below Form<input type=button  value=X id=edit_close onclick="close_w()"></div>
		<div style="position:absolute;top:0%;background:#0087C1;height:100%;width:3px;"></div>
		<div style="position:absolute;right:0%;top:0%;background:#0087C1;height:100%;width:3px;"></div>
		<div style="position:absolute;bottom:0%;left:0%;background:#0087C1;height:3px;width:100%;"></div>
		<center>
			<h2 style="color:blue;">Helping Hands Form</h2></center>
		<div id="edit_body">
			
			<table id="edit_table">
			<form action="filled_form.php" method=post>
				<tr>
					<td><b>Enter Your ID</b></td><td><input type=text name="student_id" id="sid"></td>
				</tr>
				<tr>
					<td><b>Enter Date</b></td><td><input type=text name="date" id="dat" value=<?php echo date("Y-m-d");?>>(YYYY-MM-DD)</td>
				</tr>
				
				<tr>
					<td><b>Select Category</b></td><td><select name="categ" id="cat">
						<option>FD</option>
						</select></td>
				</tr>
				<tr>
					<td><b>Enter Amount</b></td><td><input type=text name="amount" id="amt"></td>
				</tr>
				<tr>
					<td  align=left>
					<b></b></td>
    					<td colspan=2> </td>


					   
					<td><div id="ed_error"></div></td>
				</tr>
			</table>
		</div>
		<div id="edit_footer"><input type=submit value=Submit id=edit_but name="ed_sub" onclick="return valid_edit()">&nbsp;&nbsp;<input type=button value=Cancel id=edit_cancel onclick="close_w()"></div>
			</form>
			<div id="ed_error"></div>
	</div>

	<div  id="blackk1" onclick="close_w1()"></div>
	<div id="editp1">
		<div id="edit_top">Fill the below Form<input type=button  value=X id=edit_close onclick="close_w1()"></div>
		<div style="position:absolute;top:0%;background:#0087C1;height:100%;width:3px;"></div>
		<div style="position:absolute;right:0%;top:0%;background:#0087C1;height:100%;width:3px;"></div>
		<div style="position:absolute;bottom:0%;left:0%;background:#0087C1;height:3px;width:100%;"></div>
		<center>
			<h2 style="color:blue;">Helping Hands Form</h2></center>
		<div id="edit_body">
			
			<table id="edit_table">
			<form action="filled_form1.php" method=post enctype="multipart/form-data">
				<tr>
					<td><b>Enter Name</b></td><td><input type=text name="other_name" id="nname"></td>
				</tr>
				<tr>
					<td><b>Date</b></td><td><input type="text" name="date123" id="dat1" value=<?php echo date("Y-m-d");?>>(YYYY-MM-DD)</td>
				</tr>
				
				<tr>
					<td><b>Select Category</b></td><td><select name="categ1" id="cat1">
						<option>FD</option>
						</select></td>
				</tr>
				<tr>
					<td><b>Enter Amount</b></td><td><input type=text name="amount1" id="amt1"></td>
				</tr>
				<tr>
					<td><b>Reason </b></td><td><textarea rows=4 cols=35 id="reason" name="reason1"></textarea></td>
				</tr>
				<tr>
					<td><b>Proofs</b></td><td id="proof">: <input type=file name="file"></td>
				</tr>
				<tr>
					<td  align=left>
					<b></b></td>
    					<td colspan=2> </td>


					   
					<td><div id="ed_error1"></div></td>
				</tr>
			</table>
		</div>
		<div id="edit_footer" style="bottom:10%;"><input type=submit value=Submit id=edit_but name="ed_sub" onclick="return valid_edit1()">&nbsp;&nbsp;<input type=button value=Cancel id=edit_cancel onclick="close_w1()"></div>
			</form>
			
	</div>

<?php
include("db_conf.php");
if(isset($_REQUEST["go"])||$_SESSION["id_search"]=="en")
{
	$id=$_POST["st_id"];
	if($id=="")
		$id=$_POST["std_id"];
	$_SESSION["sid"]=$id;
	$bat=$id[1].$id[2];
	$q=mysql_query("select * from 20".$bat."b where id='$id'");
	if(!mysql_num_rows($q))
		if($bat>=9)
			$bat+=1;
		else
			$bat=$bat[0].($bat[1]+1);
	$q=mysql_query("select * from 20".$bat."b where id='$id'");
	if(!mysql_num_rows($q))
	{
		echo <<<S
			<script type=text/javascript>
			document.getElementById("Error").innerHTML="ID doesn't exist";
			kk();
			</script>
S;
	}
	$q1=mysql_query("select * from students where ID='$id' and year='$ye'");
	if(mysql_num_rows($q)!=0)
	{
		$details=mysql_fetch_array($q);
		$cls=trim($details[4]);
		echo <<<s

		<script type="text/javascript">
			document.getElementById('stu_id').innerHTML=": "+'$id'.toUpperCase();
			document.getElementById('stu_name').innerHTML=": "+'$details[1]';
			document.getElementById('stu_branch').innerHTML=": "+'$details[3]';
			document.getElementById('stu_class').innerHTML=": "+'$cls';
//			document.getElementById('prof_pic').src="photos/20"+'$bat'+"/"+'$id'+".jpg";
		</script>

s;
		if(mysql_num_rows($q1)!=0)
		{
			echo "<script>document.getElementById('state').innerHTML=' yes';document.getElementById('sh_mo').style.display='block';</script>";

		}
		else
			echo "<script>document.getElementById('state').innerHTML=' no'</script>";
	}
}

?>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; RGU HELPING HANDS</div></center>
</body>
</html>
