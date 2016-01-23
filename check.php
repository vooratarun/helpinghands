<?php 
 session_start();
	$user=$_POST['name'];
	$pass=$_POST['pass'];
	if($user=='admin' and $pass=='accessgranted@hh' )
	{
		$_SESSION['user']=$user;
		$_SESSION['pass']=$pass;
		header("location:admin_index.php");
	}
	else if($user=='adm' and $pass=='access' )
	{
		$_SESSION['user']=$user;
		$_SESSION['pass']=$pass;
		header("location:notify.php");
	}
	
	else 
	{
		header("location:in.html");
	}
?>
