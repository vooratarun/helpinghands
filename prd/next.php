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

	<script type=text/javascript>
		function show_details_categ(id)
		{
			if(id=="c1")
			{
				<?php
					$qu=mysql_query("select * from details where year='$ye' and cate_name='Medical'");
					$data=mysql_fetch_array($qu);
					echo <<<s1
							document.getElementById("categ_disp").innerHTML="Medical";
							document.getElementById("ast").style.display="block";
							document.getElementById("imgs").style.display="none";
							document.getElementById('tot_all').innerHTML="<td>: Rs "+'$data[3]'+"/-</td>";
							document.getElementById('spent_mon').innerHTML="<td>: Rs "+'$data[4]'+"/-</td>";
							document.getElementById('remain_mon').innerHTML="<td>: Rs "+'$data[5]'+"/-</td>";
							document.getElementById('categ').value="Medical";
s1;
				?>
			}
			else if(id=="c2")
			{
				<?php
					$qu=mysql_query("select * from details where year='$ye' and cate_name='Daily_needs'");
					$data=mysql_fetch_array($qu);
					echo <<<s1
							document.getElementById("categ_disp").innerHTML="Daily Needs";
							document.getElementById("ast").style.display="block";
							document.getElementById("imgs").style.display="none";
							document.getElementById('tot_all').innerHTML="<td>: Rs "+'$data[3]'+"/-</td>";
							document.getElementById('spent_mon').innerHTML="<td>: Rs "+'$data[4]'+"/-</td>";
							document.getElementById('remain_mon').innerHTML="<td>: Rs "+'$data[5]'+"/-</td>";
							document.getElementById('categ').value="Daily_needs";
s1;
				?>
			}
			else if(id=="c3")
			{
				<?php
					$qu=mysql_query("select * from details where year='$ye' and cate_name='Inside_Activities'");
					$data=mysql_fetch_array($qu);
					echo <<<s1
							document.getElementById("categ_disp").innerHTML="Inside Activities";
							document.getElementById("ast").style.display="block";
							document.getElementById("imgs").style.display="none";
							document.getElementById('tot_all').innerHTML="<td>: Rs "+'$data[3]'+"/-</td>";
							document.getElementById('spent_mon').innerHTML="<td>: Rs "+'$data[4]'+"/-</td>";
							document.getElementById('remain_mon').innerHTML="<td>: Rs "+'$data[5]'+"/-</td>";
							document.getElementById('categ').value="Inside_Activities";
s1;
				?>
			}
			else if(id=="c4")
			{
				<?php
					$qu=mysql_query("select * from details where year='$ye' and cate_name='Outside_Activities'");
					$data=mysql_fetch_array($qu);
					echo <<<s1
							document.getElementById("categ_disp").innerHTML="Outside Activities";
							document.getElementById("imgs").style.display="none";
							document.getElementById("ast").style.display="block";
							document.getElementById('tot_all').innerHTML="<td>: Rs "+'$data[3]'+"/-</td>";
							document.getElementById('spent_mon').innerHTML="<td>: Rs "+'$data[4]'+"/-</td>";
							document.getElementById('remain_mon').innerHTML="<td>: Rs "+'$data[5]'+"/-</td>";
							document.getElementById('categ').value="Outside_Activities";
s1;
				?>
			}
			else if(id=="c5")
			{
				<?php
					$qu=mysql_query("select * from details where year='$ye' and cate_name='Aniversary'");
					$data=mysql_fetch_array($qu);
					echo <<<s1
							document.getElementById("categ_disp").innerHTML="Aniversary";
							document.getElementById("imgs").style.display="none";
							document.getElementById("ast").style.display="block";
							document.getElementById('tot_all').innerHTML="<td>: Rs "+'$data[3]'+"/-</td>";
							document.getElementById('spent_mon').innerHTML="<td>: Rs "+'$data[4]'+"/-</td>";
							document.getElementById('remain_mon').innerHTML="<td>: Rs "+'$data[5]'+"/-</td>";
							document.getElementById('categ').value="Aniversary";
s1;
				?>
			}
			else if(id=="c6")
			{
				<?php
					$qu=mysql_query("select * from details where year='$ye' and cate_name='Stationary'");
					$data=mysql_fetch_array($qu);
					echo <<<s1
							document.getElementById("categ_disp").innerHTML="Stationary";
							document.getElementById("imgs").style.display="none";
							document.getElementById("ast").style.display="block";
							document.getElementById('tot_all').innerHTML="<td>: Rs "+'$data[3]'+"/-</td>";
							document.getElementById('spent_mon').innerHTML="<td>: Rs "+'$data[4]'+"/-</td>";
							document.getElementById('remain_mon').innerHTML="<td>: Rs "+'$data[5]'+"/-</td>";
							document.getElementById('categ').value="Stationary";
s1;
				?>
			}
			else if(id=="c7")
			{
				<?php
					$qu=mysql_query("select * from details where year='$ye' and cate_name='Emergency'");
					$data=mysql_fetch_array($qu);
					echo <<<s1
							document.getElementById("categ_disp").innerHTML="Emergency";
							document.getElementById("imgs").style.display="none";
							document.getElementById("ast").style.display="block";
							document.getElementById('tot_all').innerHTML="<td>: Rs "+'$data[3]'+"/-</td>";
							document.getElementById('spent_mon').innerHTML="<td>: Rs "+'$data[4]'+"/-</td>";
							document.getElementById('remain_mon').innerHTML="<td>: Rs "+'$data[5]'+"/-</td>";
							document.getElementById('categ').value="Emergency";
s1;
				?>
			} 
		}
	</script>

    <div id="wrapper">
      <div id="header">
	<h1>Helping Hands</h1>
	<h1 style="float: left;margin-left:20%;background-color:#300000;opacity:1; -webkit-border-radius: 5px;
   -moz-border-radius: 5px;">PRD Details</h1>
 
	<ul>
	  <li><a href="logout.php">logout</a></li>

	</ul>
      </div>    
    </div>
<div id="main_body">
	<div id="prev"><a href="prev_details.php" style="color:blue;font-size:15px;font-weight:bold">Previous Details </a></br></br>
	<a href="Rec_entry.php" style="color:blue;font-size:15px;font-weight:bold">Off Record Entry</a></div>
	<table align=center>
		<tr><td  style="font-size:22px;font-weight:bold;">Total Annual Budget</td><td>:<?php echo $y_data['total']; ?></td></tr>
		<tr><td  style="font-size:17px;font-weight:bold;color:orange">Spent Amount</td><td  style="font-size:17px;font-weight:bold;color:orange">:<?php echo $y_data['spented']; ?></td></tr>
		<tr><td style="font-size:17px;font-weight:bold;color:green">Remaining Amount</td><td  style="font-size:17px;font-weight:bold;color:green">:<?php echo $y_data['remains']; ?></td></tr>
	</table>
	<?php
		$date1=date("D");
		if($date1=="Mon")
			echo "<blink><center><a href='weekly.php'style='color:blue;font-size:17px;font-weight:bold'>Weekly Data Updated</a></center></blink>";
	?>
	<table  style="margin:2% 12%;" width=75%;>
		<tr><td style="font-size:20px;font-weight:bold;color:green;cursor:pointer;width:200px;height:55px" id="c5" onclick="show_details_categ(this.id)">Public Relations Department</td><td rowspan=7 align=center><img src="images/logo.png" id="imgs" style="width:350px;height:300px;display:block;" />

					<table id="ast" style="postion:fixed;display:none;align:left;margin:0px 5%;"  align=left>
						<tr><th colspan=3 id="categ_disp" align=left style="font-weight:bold;color:blue;"></th></tr>
						<tr><td align=left>Total Money Allocated</td><td id="tot_all" height=70px align=left style="font-size:17px;font-weight:bold;color:green">:</td></tr>
						<tr><td align=left>Spent Money</td><td id="spent_mon" align=left height=70px  style="font-size:17px;font-weight:bold;color:green">:</td></tr>
						<tr><td align=left>Money Reamaining</td><td id="remain_mon" align=left height=70px  style="font-size:17px;font-weight:bold;color:green">:</td></tr>
					<form action="show_more.php" method=post>
						<tr><td style="display:none;"><input type=text id="categ" name="category" /></div></tr>
					<tr><td><input type=submit  style="border:0px;color:blue;font-size:17px;font-weight:bold;background:transparent;cursor:pointer" value="More Details" name="sh_moo"><img src="images/d1.png"></td></tr>
					</form>
					</table>

</td><td rowspan=3 align=center width=30% id="tdd">To Enter Annual</br> Budget& percentages </br><center><a href="edit_perc.php" style="text-decoration:none;"><input type=button value="Click Here" id="Btn"></a></td></tr>
		<!--<tr><td   style="font-size:20px;font-weight:bold;color:orange;cursor:pointers;width:240px;height:55px" id="c2" onclick="kshow_details_categ(this.id)"></td></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:orange;cursor:pointer;width:200px;height:55px" id="c3" onclick="show_details_categ(this.id)">2.Internal Care Department</td></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:orange;cursor:pointers;width:200px;height:55px" id="c4" onclick="kshow_details_categ(this.id)"></td><td align=center><hr style="color:green"></hr></td></tr>
		<tr>--><tr><td></td></tr><tr><td></td></tr><tr><td></td><td rowspan=3 align=center id="tdd">To sanction</br>Money</br><center><a href="student.php" style="text-decoration:none;"><input type=button value="Click Here" id="Btn"></a></td></tr><!--
		<tr><td style="font-size:20px;font-weight:bold;color:orange;cursor:pointers;width:200px;height:55px" id="c6" onclick="kshow_details_categ(this.id)"></td></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:orange;cursor:pointer;width:200px;height:55px" id="c7" onclick="show_details_categ(this.id)">4.Finance Department</td></tr>
-->
	</table>
	
</div>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; RGU HELPING HANDS</div></center>
</body>
</html>
