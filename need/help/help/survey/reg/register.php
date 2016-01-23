<?php
include 'authenticate.php';

$idno = $_POST['idno'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$batch = $_POST['batch'];
@$branch = $_POST['branch'];
$pwd = $_POST['pwd'];

if($batch == "E4"){
    $mail = $_POST['mail'];
    $village = $_POST['village'];
    $mandal = $_POST['mandal'];
    $dist = $_POST['dist'];
    $pin = $_POST['pin'];
    $q = "INSERT INTO usersdata(ID, Name, Gender, Branch, Class, batch, mail, village, mandal, district,pin, pwd) VALUES ('$idno','$name','$gender','$branch','$class','$batch','$mail','$village','$mandal','$dist','$pin','$pwd')";
    mysql_query($q);
}else{
    $q = "INSERT INTO usersdata(ID, Name, Gender, Branch, Class, batch,pwd) VALUES ('$idno','$name','$gender','$branch','$class','$batch','$pwd')";
    mysql_query($q);
}

setcookie('idno', $idno, 0);
echo <<<s
    <script>
        alert("Registration Done Successfully...");
        window.location="index.php";
    </script>
s;

?>