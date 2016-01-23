<?php
include("authenticate.php");
$idno = $_POST['idno'];
$pwd = $_POST['pwd'];



$q="SELECT userID,password FROM users WHERE userID='$idno'";
$result = mysql_query($q,$con);
$row = mysql_fetch_array($result);
//echo $row[0]."  ".$row[1];


if ($row[0]==$idno && $row[1] == $pwd){
    $expire=time()+ 60*60*24*30*365;
    setcookie('idno', $idno, $expire) or die(mysql_error());
    //echo $row[0]."  ".$row[1];
    header("Location:user_reg.php");
}else{
    echo <<<s
    <script>
        alert("Invalid Credentials Entered. Please Try Again...");
        window.location="index.php";
   </script>'
s;
    
}
?>
