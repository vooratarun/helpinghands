<?php
session_start();
include("db_conf.php");
if($_SESSION["user"]!="admin")
		echo <<<s

		<script type="text/javascript">window.location.href="index.php";</script>

s;
$_SESSION["id_search"]="s";
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
        border: 2px dotted green;
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
	table tr
	{
		 font-size:19px;font-weight:bold;
	}
	
	#Btn{
   font-family: calibri;
   font-size:15px;
   width: 80px;
   height:30px;
   border-width:1px;
   margin:5px;
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius:5px;
   text-align: center;
   background-image: url(images/btn.gif);
   cursor:pointer;
}
	#tdd
	{
		border:1px dotted blue;font-size:15px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius:5px;
		width:30%;
		height:150px;
	}
	#ast tr th {
	border-bottom: 1px solid #ddd;
	padding: 10px;
	line-height: normal;
	text-align: left;
	}
	#ast tr td{
		border-bottom: 1px solid #ddd;
	}
	#prev
	{
		position:absolute;
		right:0px;
		margin:1% 10% 1%;
		text-align:right;
	}
	
    </style>

<script src='jq.js'></script>
<script>
function creditload(key)
{
$("#main_body").html("<br><Br><Br><centeR>Loading<blink>....</center></blink>");
$("#main_body").load(key);
}

</script>
<?php
	$y=date("Y");
	$y1=date("y")+1;
 	$ye=$y.'-'.$y1;
	$qr=mysql_query("select * from year where year='$ye'");
	if(mysql_num_rows($qr)==0)
	{
		$y=date('Y')-1;
		$y1=date('y');
		$ye=$y.'-'.$y1;
		$qr=mysql_query("select * from year where year='$ye'");
	}
	$y_data=mysql_fetch_array($qr);
?>

    <div id="wrapper">
      <div id="header">
	<h1>Helping Hands</h1>
	<h1 style="float: left;margin-left:20%;background-color:#300000;opacity:1; -webkit-border-radius: 5px;
   -moz-border-radius: 5px;"><font color=white>Credit Details</font></h1>
 
	<ul>
	  <li><a href="logout.php">logout</a></li>

	</ul>
      </div>    
    </div>

<div id="main_body">
	<div  style='position:absolute;left:45%;top:30%;'><img src="images/logo.png" id="imgs" style="width:350px;height:300px;display:block;" /></div>
	<table  style="margin:2% 12%;" width=75%;>
		<tr><td  style="font-size:20px;font-weight:bold;color:green;cursor:pointer;width:200px;height:55px" id="c1" onclick="creditload('./admin_home.php')">1.Weekly Money Collection Details<Br><Br></td><td rowspan=7 align=center><div id='loadingdiv>'<img src="images/logo.png" id="imgs" style="width:350px;height:300px;display:block;" /></div>
					
</td><td></td></tr><tr><td ></td><Td></td></tr>
	<tr><td style="font-size:20px;font-weight:bold;color:orange;cursor:pointer;width:200px;height:55px" id="c3" onclick="creditload('admin_dropbox.php')">2.Collections from Drop Boxes</td></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:orange;cursor:pointers;width:200px;height:55px" id="c4" onclick="creditload('')"><!----></td><td align=center><hr style="color:green"></hr></td></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:green;cursor:pointer;width:200px;height:55px" id="c5" onclick="creditload('admin_contribution.php')">3.Contributions to HH</td></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:orange;cursor:pointers;width:200px;height:55px" id="c6" onclick="creditload('')"><!----></td></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:orange;cursor:pointer;width:200px;height:55px" id="c7" onclick="creditload('admin_books.php')">4.Rough books & News Papers Money</td></tr>
	</table>
	
</div>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; RGU HELPING HANDS</div></center>
</body>
</html>
