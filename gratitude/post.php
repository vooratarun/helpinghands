<?php

$filename = $_GET['sno'];
$act = $_GET['act'];
$old = $filename;
$new = './posted'.substr($old,7);


if ($act == 1){    
	copy($old,$new) or die("couldn't copy $old to $new: $php_errormsg");
        echo '<script>alert("This Gratitude is successfuly posted.");</script>';	
        unlink($filename);
	
}else if ($act == 2){
	unlink($filename);
        echo '<script>alert("This Gratitude is successfuly Deleted.");</script>';
}else{
	echo '<script>alert("Unspecified Action is performed. Please do it once again properly.");</script>';
}
header("Location:".$_SERVER['HTTP_REFERER']);

?>
