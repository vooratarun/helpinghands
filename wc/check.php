<?php 
 session_start();
	$user=$_POST['name'];
	$pass=$_POST['pass'];
	if($user=='admin' and $pass=='iiithhCredit')
	{
		$_SESSION['user']=$user;
		header("location:admin_home.php");
	}
	else 
	{
		header("location:index.html");
	}
?>
