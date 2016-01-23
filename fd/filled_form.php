<?php
session_start();
include("db_conf.php");
if($_SESSION["user"]!="admin")
		echo <<<s

		<script type="text/javascript">window.location.href="index.php";</script>

s;
			$yer=date("Y");
			$y1=date("y")+1;
			$ye=$yer.'-'.$y1;
			$que13=mysql_query("select * from year where year='$ye'") or die(mysql_error());
			if(!mysql_num_rows($que13))
			{
			$yer=date("Y")-1;
			$y1=date("y");
			$ye=$yer.'-'.$y1;
			}
	$id1=$_POST['student_id'];
	$dat=$_POST['date'];
	$cat=$_POST['categ'];
	$amt=$_POST['amount'];
	$que0=mysql_query("select * from details where year='$ye' and cate_name='$cat'") or die(mysql_error());
	$dat1=mysql_fetch_array($que0);
	if($dat1['remains']<$amt)
	{
		$emer_mon=$amt-$dat1['remains'];
		$que1=mysql_query("select * from details where year='$ye' and cate_name='Emergency'") or die(mysql_error());
		$dat2=mysql_fetch_array($que1);
		
		if($emer_mon>$dat2['remains'])
		echo <<<S
			<script type=text/javascript>

			alert("Sufficient Money not available");
			setTimeout("",1000);
			window.location.href="student.php";
			</script>
S;
	}
	$bat=$id1[1].$id1[2];
	$q=mysql_query("select * from 20".$bat."b where ID='$id1'");
	if(!mysql_num_rows($q))
		if($bat>=9)
			$bat=$bat+1;
		else
			$bat=$bat[0].($bat[1]+1);
	$q=mysql_query("select * from 20".$bat."b where ID='$id1'");
	if(!mysql_num_rows($q))
			echo <<<S
			<script type=text/javascript>

			alert("There is problem with this ID");
			setTimeout("",1000);
			window.location.href="student.php";
			</script>
S;
	$details=mysql_fetch_array($q);


	
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
		border:1px solid gray;font-size:15px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius:5px;
	}
	#ast tr th {
	border-bottom: 1px solid #ddd;
	padding: 10px;
	line-height: normal;
	text-align: left;
	}
	#det_table tr td
	{
	font-size:17px;
	font-weight:bold;
	color:green;
	height:45px;
	}
	#message
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
		position:absolute;
		left:100px;
		top:100px;
		height:auto;
	}
	#edit_close
	{
	position:absolute;
	right:1px;
	top:10px;
	background:transparent;
	width:5%;
	border:0;
	color:red;
	cursor: pointer;
	}
	#note
	{
	position:absolute;
	left:1px;
	top:10px;
	background:transparent;
	border:0;
	color:red;
	cursor: pointer;
	}
	#ed_body
	{
	position:relative;
	left:60px;
	border:0;
	color:red;
	cursor: pointer;
	}

    </style>

 
  
    <div id="wrapper">
      <div id="header">
	<h1>Helping Hands</h1>
	<h1 style="float: left;margin-left:20%;background-color:#300000;opacity:1; -webkit-border-radius: 5px;
   -moz-border-radius: 5px;">Debit Details</h1>
 
	<ul>
		<li style="background_color:#000;"><a href="student.php"><img src="images/back.png" style="height:15px;width:15px;">back</a></li>
	  <li><a href="logout.php">logout</a></li>

	</ul>
      </div>    
    </div>
    <div id="main_body">
		<center><h2 style="color:blue" id="conf"><blink>Attach Proofs in a Zip file</blink></h2></center>
		<table align=center id="det_table">
		  <tr><td rowspan=4 width=200px><img src="images/logo.png"<?php //echo "photos/20".$bat."/".$id1.".jpg" ?> style="border:1px solid blue;width:150px;height:180px;" id="prof_pic" /></td><td>ID </td><td id="stu_id">:<?php echo $id1;?></td></tr>
		  <tr><td>Name </td><td id="stu_name">:<?php echo $details['Name']; ?></td></tr>
		  <tr><td>Batch </td><td id="stu_branch">:<?php echo $details['Branch']; ?></td></tr>
		  <tr><td>Class </td><td id="stu_class">:<?php echo $details['Class']; ?></td></tr>
		</table>
		</br></br>
		<table align=center id="det_table">
			<form action="" method="post" enctype="multipart/form-data">
			<tr><td>Date</td><td>: <?php echo $dat; ?></td></tr>
			<tr><td>Category</td><td>: <?php echo $cat; ?></td></tr>
			<tr><td>Amount</td><td>: <?php echo $amt; ?></td></tr>
		<input type=text name='student_id' value=<?php echo $id1 ?> style='display:none'>
			<tr><td>Proofs</td><td id="proof">: <input type=file name="file"></td></tr>
			<tr><td></td><td><input type=submit value="Confirm" id="Btn" name="submit" style="display:block"></td></tr>

		<div style="display:none">
			<input type=text value=<?php echo $id1; ?> name="stu_id" />
			<input type=text value=<?php echo $dat; ?> name="date" />
			<input type=text value=<?php echo $cat; ?> name="categ" />
			<input type=text value=<?php echo $amt; ?> name="amount" />
		</div>
			</form>
		</table>

	</div>

<?php
if(isset($_REQUEST["submit"]))
{
	$id1=$_POST["stu_id"];
	$dat=$_POST["date"];
	$cat=$_POST["categ"];
	$amt=$_POST["amount"];

	$fname="No Proofs";
	if (($_FILES["file"]["size"]>=0))
		{
			if($_FILES["file"]["name"]!="")
			{
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				
				$fname=$id1."_".$dat."_".$_FILES["file"]["name"];
				move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/". $fname);


			}
		}


		$qu=mysql_query("select * from students where ID='$id1' and date='$dat';");
		if(mysql_num_rows($qu)==0)
		{

			$q=mysql_query("select * from 20".$bat."b where id='$id1'");
			$details=mysql_fetch_array($q);
			$clss=trim($details[4]);
			
			echo <<<s
			<script type=text/javascript>
				document.getElementById('conf').innerHTML="Data Inserted......";
				document.getElementById('proof').innerHTML=': '+'$fname';
				document.getElementById('Btn').style.display="none";
				document.getElementById('det_table').innerHTML="<tr><td>ID</td><td>:$details[0]</td></tr><tr><td>Name</td><td>:$details[1]</td></tr><tr><td>Branch</td><td>:$details[3]</td></tr><tr><td>Class</td><td>:$clss</td></tr>"
	</script>
s;
			$batch="20".$bat;
			$co=mysql_query("insert into students values('$ye','$id1','$dat','$cat','$amt','$fname',$batch);");
			$qq=mysql_query("select * from details where year='$ye' and cate_name='$cat'") or die(mysql_error());
			$dd=mysql_fetch_array($qq);$spent=$dd['spent_money'];
			$remain=$dd['remains'];

			if($remain<$amt)
			{
				$emer_money=$amt-$remain;
				$remain=0;
				$spent=$dd['alloc_money'];
				$co1=mysql_query("update details set spent_money=$spent,remains=$remain where year='$ye' and cate_name='$cat'") or die(mysql_error());
				$emer_rem=$dat2['remains']-$emer_money;
				$emer_spt=$dat2['spent_money']+$emer_money;
				
				$str="     ";
				$co2=mysql_query("update details set spent_money=$emer_spt,remains=$emer_rem where year='$ye' and cate_name='Emergency'") or die(mysql_error());
				$co3=mysql_query("insert into emergency values('$ye','$dat','$cat',$emer_money,'$id1')") or die(mysql_error());
				echo '<div id=message ><div id=note>Note :</div><div id=ed_body>Insufficient Money in '.$cat.'</br>'.$str.'Succesfully transferred from Emergency &nbsp;&nbsp;&nbsp;<img src="images/success.gif" /></div>
		<input type=button  value=x id=edit_close onclick="disap()">
		</div>';
			}
			else
			{
				
				$spent=$spent+$amt;
				$remain=$remain-$amt;
				$co4=mysql_query("update details set spent_money=$spent,remains=$remain	 where year='$ye' and cate_name='$cat';") or die(mysql_error());
			}
			$qqq=mysql_query("select * from year where year='$ye'") or die(mysql_error());
			$ddd=mysql_fetch_array($qqq);$spent1=$ddd['spented'];$spent1=($spent1+$amt);$remain1=$ddd['remains'];$remain1=($remain1-$amt);
			$co2=mysql_query("update year set spented=$spent1,remains=$remain1 where year='$ye'");
		}
		else
		{
			echo <<<s

			<script>
			alert("Duplicate entry for $id1 in the same day....Please Check");
			setTimeout("",500);
			window.location.href="student.php";
			</script>

s;
		} 
	}
	else
	{
		echo <<<S
			<script type=text/javascript>
			alert("Its an empy file... Try again");
			setTimeout("",1000);
			
			</script>
S;
	}

}
?>
<center><div style="border:1px solid blue;width:90%;color:blue">&copy; RGU HELPING HANDS</div></center></body>
</html>
