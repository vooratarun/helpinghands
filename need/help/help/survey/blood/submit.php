<?php
include 'authenticate.php';

$idno = $_POST['idno'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$batch = $_POST['batch'];
@$branch = $_POST['branch'];
$bg = $_POST['bg'];
$phno = $_POST['mob'];
$pphno = $_POST['pmob'];
$willing = $_POST['willing'];



$q = "INSERT INTO blooddetails(ID, Name, Gender, Branch, Class, batch, bg, mob, pmob, willing) VALUES ('$idno','$name','$gender','$branch','$class','$batch','$bg','$phno','$pphno','$willing')";
mysql_query($q);


setcookie('idno', $idno, 0);
echo <<<s
    <script>
        alert("Registration Done Successfully...");
        window.location="index.php";
    </script>
s;

?>