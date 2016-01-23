<?php
include 'authenticate.php';

$idno = $_POST['idno'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$pwd = $_POST['pwd'];

$k=mysql_query("SELECT name FROM usersdata WHERE ID='$idno'");
$ok=mysql_num_rows($k);
if($ok!=0)
	{
	echo <<<s
    <script>
        alert("Already Registred...");
        window.location.href="index.php";
    </script>
s;

	}
else{
$q = "INSERT INTO usersdata(ID, Name, Gender, Branch, Class, batch,pwd) VALUES ('$idno','$name','$gender','','$class','','$pwd')";
mysql_query($q);


$_SESSION['healthcampid']=$idno;
echo <<<s
    <script>
        alert("Registration Done Successfully...");
        window.location.href="index.php";
    </script>
s;
}
?>
