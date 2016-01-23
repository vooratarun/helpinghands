<?php
session_start();
include("db_conf.php");
if($_SESSION["user"]!="admin")
		echo <<<s

		<script type="text/javascript">window.location.href="index.php";</script>

s;
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
#text,#total,#text1,#text2,#text3,#text4,#text5,#text6,#text7
{
	width: 210px;
	background: #fefefe;
	border: 1px solid #bbb;
	font-family: "Lucida Grande", Verdana, sans-serif;
	font-size: 14px;
	color: #333;
	padding: 7px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	outline: none;
	vertical-align: middle;
	
}
#text1:focus,#text2:focus,#text3:focus,#text4:focus,#text5:focus,#text6:focus,#text7:focus
{
	border:1px solid #498AF3;
}
#Btn,#Btn1{
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
#Error
	{

		background:#FFFFCC;
		border:1px solid orange;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		font-weight:bold;
		color:#FF0033;
		display:block;
		width:50%;
		margin:5px;
		height:30px;
	}

    </style> 

 
 <?php
 	$y=date("Y");
 	$y1=date("y")+1;
 	$ye=$y.'-'.$y1;
	$qr=mysql_query("select * from year where year='$ye'");
	$y_data=mysql_fetch_array($qr);
	$yy=$y_data["total"];

 ?>
  
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
	<center><div id=Error onmouseover="disap()">Enter percentages of below Categories </div></center>
	<center><form action="" method=post onsubmit="return Check()"><h1>Total Annual Allotement of <?php echo $ye; ?><div id="total1">
		<?php 
		if ($yy=="")
		{	
			?>
			<input type=text id="total" name="tot_amt"><input type=submit  id=Btn value="Confirm" name="conf_but" />
		<?php
		}

		
		else
		{
			echo $yy;
		}
		?>
		</div></h1></form></center>
	<center>
	<form action="" method=post onsubmit="return check_perc()">
	<table style="width:60%" id="table1">
		<tr><th></th><th></th><th>Allocated Money</th></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:green;">Percentage to Health Care Department</td><td id="cat11p"><input type=text value=0 id="text1" onkeyup="calculate(this.value,'cat1')" name="cat1p"></td><td id="cat1" align=middle style="font-size:20px;font-weight:bold;color:green;"></td></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:orange;"><!----></td><!--<td id="cat21p"><input type=text value=0 id="text2" onkeyup="calculate(this.value,'cat2')" name="cat2p"></td><td id="cat2" align=middle style="font-size:20px;font-weight:bold;color:orange;"></td>--><tr>

		<tr><td style="font-size:20px;font-weight:bold;color:orange;">Percentage to Internal Care Department</td><td id="cat31p"><input type=text value=0 id="text3" onkeyup="calculate(this.value,'cat3')" name="cat3p"></td><td id="cat3" align=middle style="font-size:20px;font-weight:bold;color:green;"></td></tr>



		<tr><td style="font-size:20px;font-weight:bold;color:orange;"><!----></td><!--<td id="cat41p"><input type=text value=0 id="text4" onkeyup="calculate(this.value,'cat4')" name="cat4p"></td><td id="cat4" align=middle style="font-size:20px;font-weight:bold;color:orange;"></td>--></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:green;">Percentage to Public Relation Department</td><td id="cat51p"><input type=text value=0 id="text5" onkeyup="calculate(this.value,'cat5')" name="cat5p"></td><td id="cat5" align=middle style="font-size:20px;font-weight:bold;color:green;"></td></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:orange;"><!----></td><!--<td id="cat61p"><input type=text value=0 id="text6" onkeyup="calculate(this.value,'cat6')" name="cat6p"></td><td id="cat6" align=middle style="font-size:20px;font-weight:bold;color:green;"></td>--></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:orange;">Percentage to Finance Department</td><td id="cat71p"><input type=text value=0 id="text7" onkeyup="calculate(this.value,'cat7')" name="cat7p"></td><td id="cat7" align=middle style="font-size:20px;font-weight:bold;color:green;"></td></tr>
		<tr><td style="font-size:20px;font-weight:bold;color:blue;"><!----></td></td><td style="font-size:20px;font-weight:bold;color:blue;"><p id="remain1"></p></td><td align=middle style="font-size:20px;font-weight:bold;color:blue;"><p id="remain2"></p></td></tr>
		<tr><td></td><td  style="font-size:20px;font-weight:bold;color:blue;" id="sub_buts"></form><input type=submit value="Save" id="Btn1" name="catp_data"></td></tr>
		
		<tr><td></td><td></td></tr>
	</table>
	<div style="border:1px dotted blue;width:50%;height:100px;color:#008ED6;font-weight:bold;font-size:17px">
		<img src="images/success.gif"  />&nbsp;&nbsp;Details of this Year were already given.</br><img src="images/success.gif"  />&nbsp;&nbsp;If you want to Reset All Data Click Here
		<form action="reset_all_annual.php" method=post onsubmit="return Check1()">
			<input type=submit value="Reset" id="Btn" name="reset_but">	<input type=text style="display:none" id="remains" name="remain">
		</form>
	</div></br>
	</center>
	<input type=text style="display:none" id="cat1_val">
	<!--<input type=text style="display:none" id="cat2_val">-->
	<input type=text style="display:none" id="cat3_val">
	<!--<input type=text style="display:none" id="cat4_val">-->
	<input type=text style="display:none" id="cat5_val">
	<!--<input type=text style="display:none" id="cat6_val">-->
	<input type=text style="display:none" id="cat7_val">

</div>
<?php
	if(isset($_REQUEST["conf_but"]))
	{
		$tot_amt=$_POST["tot_amt"];
		 if($tot_amt>0)
			$quer=mysql_query("insert into year values('$ye',$tot_amt,0,$tot_amt)");
		if($quer==0)
			echo <<<s

			<script type="text/javascript">alert("Sorry... Try Again");window.location.href="edit_perc.php";</script>

s;
		else
			echo "<script>document.getElementById('total1').innerHTML=$tot_amt;</script>";
	}
	$qu=mysql_query("select * from year where year='$ye'");
	$dda=mysql_fetch_array($qu);
	$total_money=$dda[1];
	if($dda=="")
		$total_money=0;
	echo <<<s1
	 <script type="text/javascript">
	 var total=$total_money;
	 var tot_perc=100;
	 var remain=0;
	 function Check()
	 {
		 total=document.getElementById("total").value;
		 remain=total;
		 r=confirm("Confirm "+total+" as a Annual Allotement");
		 if(r==true)
		{
			return true;
		}
		 else
			return false;
	 }
	 function Check1()
	 {
	 	r1=confirm("Are you Want to Reset Annual Data");
		if(r1==true)
			return true;
		else
			return false;
	}
	 
	 function calculate(value,cat)
	 {
		var v1=total/100;
		var value_p=value;
		var value=v1*value;
		tot_perc=tot_perc-value_p
		document.getElementById(cat).innerHTML="Rs "+value.toFixed(2)+"/-";
		document.getElementById(cat+"_val").value=value_p;
//		document.getElementById("remain1").innerHTML=(tot_perc)+"%";
		calc_remain(cat+"_val");
	 }
	 function cal_remain(cat1)
	 {
		 var get_amt=document.getElementById(cat1+"_val").value;
		 remain=remain-get_amt;
		 document.getElementById("remain2").innerHTML=remain;
	 }
	 function calc_remain(idd)
	 {
		 var i=1;
		 var pp=0,v=0,mon=0,mn=total/100;
		 for(i=1;i<=7;i++)
		 {
			if(document.getElementById("cat"+i+"_val").value!="")
			{
				v=parseInt(document.getElementById("cat"+i+"_val").value);
				mon=mon+(mn*v);
				pp=pp+v;
			}
		 }
		if((100-pp)>=0)
		{
		 document.getElementById("remain1").innerHTML=(100-pp)+" %";
		 document.getElementById("remains").value=(100-pp);
		 document.getElementById("remain2").innerHTML="Rs "+(total-mon).toFixed(2)+"/-";
		}
		else
		{
		 document.getElementById("Error").innerHTML="Percentage Exceeding.....(Max 100)";
		 document.getElementById("Error").style.opacity=1;
		 document.getElementById("Error").style.display="block";
		 setTimeout("disap()",1500);
		 document.getElementById(idd).value=0;
		 document.getElementById("text"+idd[3]).value=0;
		 document.getElementById("cat"+idd[3]+"p").value=0;
		}
	 }
	yy=0;
	function disap()
	{
		if(yy<10)
		{
			lis=[0.9,0.8,0.7,0.6,0.5,0.4,0.3,0.2,0.1,0];
			document.getElementById("Error").style.opacity=lis[yy];
			yy++;
			setTimeout("disap()",60);
		}
		else
		{
			document.getElementById("Error").style.display="none";
			yy=0;
		}
	}
	setTimeout("disap()",2000);
	 </script>
s1;
	if(isset($_REQUEST["catp_data"]))
	{

		$c1p=$_POST["cat1p"];
		//$c2p=$_POST["cat2p"];
		$c3p=$_POST["cat3p"];
		//$c4p=$_POST["cat4p"];
		$c5p=$_POST["cat5p"];
		//$c6p=$_POST["cat6p"];
		$c7p=$_POST["cat7p"];
		$rem=$_POST["remain"];
		
		echo <<<s
		<script type=text/javascript>
			total=$total_money;
			var v1=total/100;
			var value1=(v1*$c1p).toFixed(2);
			
			var value3=(v1*$c3p).toFixed(2);
		
			var value5=(v1*$c5p).toFixed(2);
			
			var value7=(v1*$c7p).toFixed(2);
			document.getElementById('cat11p').innerHTML=$c1p+" %";
		
			document.getElementById('cat31p').innerHTML=$c3p+" %";
		
			document.getElementById('cat51p').innerHTML=$c5p+" %";
	
			document.getElementById('cat71p').innerHTML=$c7p+" %";
			document.getElementById('cat1').innerHTML=value1+" /-";
			
			document.getElementById('cat3').innerHTML=value3+" /-";
		
			document.getElementById('cat5').innerHTML=value5+" /-";
	
			document.getElementById('cat7').innerHTML=value7+" /-";
			document.getElementById('sub_buts').innerHTML="Percentages & Money Allocated";

		</script>
		
s;
		$c1=(($total_money/100)*$c1p);
		echo "<script>alert('".$c1."');</script>";
		//$c2=(($total_money/100)*$c2p);
		$c3=(($total_money/100)*$c3p);
		//$c4=(($total_money/100)*$c4p);
		$c5=(($total_money/100)*$c5p);
		//$c6=(($total_money/100)*$c6p);
		$c7=(($total_money/100)*$c7p);
		$quer=mysql_query("insert into details values('$ye','ICD','$c1p','$c1',0,'$c1')") or die(mysql_error());
		//$quer=mysql_query("insert into details values('$ye','Daily_needs',$c2p,$c2,0,$c2)") or die(mysql_error());
		$quer=mysql_query("insert into details values('$ye','HCD','$c3p','$c3',0,'$c3')") or die(mysql_error());
		//$quer=mysql_query("insert into details values('$ye','Outside_Activities',$c4p,$c4,0,$c4)") or die(mysql_error());
		$quer=mysql_query("insert into details values('$ye','FD','$c5p','$c5',0,'$c5')") or die(mysql_error());
		//$quer=mysql_query("insert into details values('$ye','Stationary',$c6p,$c6,0,$c6)") or die(mysql_error());
		$quer=mysql_query("insert into details values('$ye','PRD','$c7p','$c7',0,'$c7')") or die(mysql_error());


	}

?>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; RGU HELPING HANDS</div></center>
</body>
</html>
