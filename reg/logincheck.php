<?php
include("authenticate.php");
$idno = $_POST['idno'];
$pwd = $_POST['pwd'];


$q1 = "SELECT ID FROM usersdata WHERE ID='$idno'";
$result = mysql_query($q1,$con);
$row = mysql_fetch_array($result);
if (count($row) != 2){
	$q="SELECT userID,password FROM users WHERE userID='$idno'";
	$result = mysql_query($q,$con);
	$row = mysql_fetch_array($result);

	if ($row[0]==$idno && $row[1] == $pwd){
		$expire=time()+ 60*60*24*30*365;
		setcookie('idno', $idno, $expire) or die(mysql_error());
		//echo $row[0]."  ".$row[1];
		header("Location:user_reg.php");
	}else{
		echo <<<s
		<script>
			alert("Invalid Credentials Entered. Please Try Again...");
			window.location="../reg/index.php";
	   </script>
s;
    
	}
	
}else{
     echo <<<s2
    <script>
        alert("You have already Registered...");
        window.location="../";
   </script>
s2;
}

?>
