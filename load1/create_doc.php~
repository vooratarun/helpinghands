<?php
$title=addslashes($_POST['title']);
$author=addslashes($_POST['author']);
$a=($_POST['info']);
$b=($_POST['obj']);
$c=($_POST['p1']);
$d=($_POST['p2']);
$e=($_POST['bs']);

$dop = date("Y-m-d H:i:s");
$kk=$_COOKIE['ur'];

$text=$a.$b.$c.$d.$e;

require("db.php");
$n=mysql_fetch_array(mysql_query("SELECT MAX(id) as c FROM articles"));
		
		$n['c']=$n['c']+1;
		
		$file=$n['c'].".html";
		$fname="./afiles/".$file;
		$fhandle=fopen($fname,'w');
		fwrite($fhandle,$text);
		fclose($fhandle);

mysql_query("INSERT INTO articles VALUES('','$title','$author','$kk','$file','$dop')") or die (mysql_error()) or die(mysql_error());		
sleep(2);
header("location:home.php?note=Ur ARTICLE has been published.. .. ");
?>
