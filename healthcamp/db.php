<?php
$con = mysql_connect("localhost","root","");
$db = mysql_select_db("test");
$q= "SELECT iiitn.ID, iiitn.Name, iiitn.Gender, iiitn.Branch, iiitn.Class, iiitn.batch users.password FROM iiitn INNER JOIN users ON iiitn.ID=users.userID" or die(mysql_error());

$result = mysql_query($q,$con);
while ($row = mysql_fetch_array($result)){
    $id = $row["ID"];
    $pwd = $row["password"];
    $name = $row["Name"];
    $g = $row["Gender"];
    $branch = $row["Branch"];
    $cls = $row["Class"];
    $batch = $row["batch"];
    echo "$id \t |$pwd | \t $name | \t $g | \t $branch | \t$cls | \t $batch<br>";
    //$query = "insert into iiitn(ID,exmpwd, Name, Gender, Branch, Class, batch) values('$id','$exmpwd','$name','$g', '$branch','$cls','$batch')";
    //mysql_query($query) or die(mysql_error());
}
?>
