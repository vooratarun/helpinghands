<?php
session_start();
include("authenticate.php");
$idno = $_POST['idno'];
$pwd = $_POST['pwd'];
$juffa=0;
if(substr_count($idno,"N14"))
{
$q1 = mysql_query("SELECT ID FROM usersdata WHERE ID='$idno'");
$k=mysql_num_rows($q1);
if($k==0)
	$juffa=1;
}
if($juffa==1)
	{
	echo "<center><h2 style='color:red;top:50%'>Register first</h2></center>";
	echo "<center><button onclick=\"window.location.href='./index.php'\">Go Back</button></centre>";
	}
else
	{
$q1 = "SELECT ID FROM usersdata WHERE ID='$idno'";
$result = mysql_query($q1,$con);
$row = mysql_fetch_array($result);
	$q="SELECT userID,password FROM users WHERE userID='$idno'";
	$result = mysql_query($q,$con);
	$row = mysql_fetch_array($result);
	if ($row[0]==$idno && $row[1] == $pwd){
		$_SESSION['healthcampid']=$idno;
		echo "<script>window.location.href='new.php'</script>";
		
		
	}else{
		echo "
		<script>
			alert('Invalid Credentials Entered. Please Try Again...');

	   </script>";
	echo "<script>window.location.href='home.php';</script>";

    
	}
	
		
	}


?>
