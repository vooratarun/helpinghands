<?php

session_start();
	include("db_conf.php");

if(isset($_SESSION['name'])) 
{

if(isset($_POST['submit'])) 
{
	//form variables
	
	$subject=$_POST['subject'];
	$description=$_POST['description'];
	$posted=$_POST['posted'];
	$ip=$_SERVER['REMOTE_ADDR'];
	
	
	//file variables
     $filename = $_FILES['File']['name'];
     if($filename=="")
     {
		 
		 $query = mysql_query("INSERT INTO `notifications`(subject,description,posted,posted_date,posted_time,fulldate,posted_ip) VALUES ('$subject','$description','$posted',CURDATE(),CURTIME(),NOW(),'$ip')") or die(mysql_error());
if($query){
	
    echo "<script>alert('Notification titled ".$subject." added successfully');window.location='index.php';</script>";
    }
    
	 }
	 else
	 {
    $tmpname  = $_FILES['File']['tmp_name'];
    $filesize = $_FILES['File']['size'];
    $filetype = $_FILES['File']['type'];
    $fp = fopen($tmpname, 'r');
    $file = fread($fp, filesize($tmpname));
    $file = addslashes($file);
    fclose($fp);
    
		$fileName = $_FILES['File']['name'];
		$tmpName  = $_FILES['File']['tmp_name'];
		$fileSize = $_FILES['File']['size'];
		$fileType = $_FILES['File']['type'];
		$uploadDir = '../new_hh/notice_files/';
		
		$fil=mysql_query("SELECT * FROM notifications WHERE attachment='$filename'");
		
		if(mysql_num_rows($fil)<1)
		{
			$filePath = $uploadDir . $filename;
$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {
echo "Error uploading file";
exit;
}


$query = mysql_query("INSERT INTO `notifications`(subject,description,posted,attachment,posted_date,posted_time,fulldate,posted_ip) VALUES ('$subject','$description','$posted','$filename',CURDATE(),CURTIME(),NOW(),'$ip')") or die(mysql_error());
if($query){
    echo "<script>alert('Notification titled ".$subject." added successfully');window.location='index.php';</script>";
   
    }
}
else
{
	  echo "<script>alert('Please Change File Name before uploading..');window.location='index.php';</script>";
}
}
}
}
else
{
	header("location:index.php");
}
?>
