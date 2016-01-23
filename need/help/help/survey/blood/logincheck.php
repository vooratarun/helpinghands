<?php
include "authenticate.php";
$idno = $_POST['idno'];
$pwd = $_POST['pwd'];

$expire=time()+ 60*60*24*30*365;
setcookie('idno', $idno, $expire);



$q="SELECT ID FROM blooddetails WHERE ID='$idno'";
$result = mysql_query($q,$con);
$row = mysql_fetch_array($result);
$cc = count($row);
if ($cc != 2){
    $q="SELECT ID,pwd FROM usersdata WHERE ID='$idno'";
    $result = mysql_query($q,$con);
    $row = mysql_fetch_array($result);
    $c = count($row);
    if(  $c != 4 ){
         echo <<<s
        <script>
            alert("You have not done registration process. Please complete that and login for survey...");
            window.location="./blood/";
       </script>
s;
    }else{
        if ($row['ID']==$idno && $row['pwd'] == $pwd){
            header("Location:blood.php");
        }else{
            echo <<<s1
            <script>
                alert("Invalid Credentials Entered. Please Try Again...");
                window.location="index.php";
           </script>'
s1;
        }
    }
}else{
     echo <<<s2
    <script>
        alert("You have already submitted Your Blood Details...");
        window.location="http://10.11.2.92/help";
   </script>
s2;
}



?>
