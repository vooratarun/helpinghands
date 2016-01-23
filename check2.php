<?php 
 session_start();
	$user=$_POST['name'];
	$pass=$_POST['pass'];
	if($user=='admin' and $pass=='accessgranted@hh')
	{
		$_SESSION['user']=$user;
		$_SESSION['pass']=$pass;
		header("Location:Note-/admin_index.php");
	}
	else 
	{
		header("location:index.html");
	}
?>
