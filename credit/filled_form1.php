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
	$id1=addslashes($_POST['other_name']);
	$dat=$_POST['date123'];
	$cat=$_POST['categ1'];
	echo "<script>alert('".$cat."');</script>";
	$amt=$_POST['amount1'];
	$reason=addslashes($_POST['reason1']);
	
	
	$que0=mysql_query("select * from details where year='$ye' and cate_name='$cat'") or die(mysql_error());
	$dat1=mysql_fetch_array($que0);
	$fname="No proofs";
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
	if ($_FILES["file"]["name"]!="")
		{
			
			$fname=$id1."_".$dat."_".$_FILES["file"]["name"];
			
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				$_FILES['file']['name']=$fname;
				move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/". $_FILES["file"]["name"]);


			}
			
		}
	
	$que3=mysql_query("insert into others values('$ye','$id1','$dat','$cat','$amt','$reason','$fname')")or die(mysql_error());
	$qq=mysql_query("select * from details where year='$ye' and cate_name='$cat'") or die(mysql_error());
	$dd=mysql_fetch_array($qq);$spent=$dd['spent_money'];
	$remain=$dd['remains'];
	if($remain>=$amt)
	{
		$spent=$spent+$amt;
		$remain=$remain-$amt;
		$co1=mysql_query("update details set spent_money=$spent,remains=$remain where year='$ye' and cate_name='$cat'") or die(mysql_error());
	}
	else
	{
		$emer_money=$amt-$remain;
		$que1=mysql_query("select * from details where year='$ye' and cate_name='Emergency'") or die(mysql_error());
		$dat2=mysql_fetch_array($que1);
		$remain=0;
		$spent=$dd['alloc_money'];
		$co1=mysql_query("update details set spent_money=$spent,remains=$remain where year='$ye' and cate_name='$cat'") or die(mysql_error());
		$emer_rem=$dat2['remains']-$emer_money;
		$emer_spt=$dat2['spent_money']+$emer_money;
		$co2=mysql_query("update details set spent_money=$emer_spt,remains=$emer_rem where year='$ye' and cate_name='Emergency'") or die(mysql_error());
		$co3=mysql_query("insert into emergency values('$ye','$dat','$cat',$emer_money,'$id1')") or die(mysql_error());
	}
$qqq=mysql_query("select * from year where year='$ye'") or die(mysql_error());
			$ddd=mysql_fetch_array($qqq);$spent1=$ddd['spented'];$spent1=($spent1+$amt);$remain1=$ddd['remains'];$remain1=($remain1-$amt);
			$co2=mysql_query("update year set spented=$spent1,remains=$remain1 where year='$ye'");
		echo <<<s
		<script type="text/javascript">
			alert("Data Inserted Successfully.....");
			setTimeout("",1000);
			window.location.href="next.php";
		</script>
s;
	
?>

