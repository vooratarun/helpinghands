<html>
<head>
<title>Gallery Creation</title>
</head>
<body>
<?php
	session_start();
	if(@$_POST['FolderName'])
	{
		$dir_name=@$_POST['FolderName'];
		$img_no=@$_POST['Image_no'];
		$_SESSION['dir_name']=$dir_name;
		$_SESSION['Image_no']=$img_no;
		if(file_exists($dir_name))
		{
			echo "Gallery Exits.Try another.";
		}
		else
		{
			
			mkdir($dir_name);
			chdir($dir_name);
			mkdir('Image');
			mkdir('Thumb');
		
		
		echo "<center><table><tr><th>Upload images to gallery $dir_name
			<form action='upload_file.php' method='post' enctype='multipart/form-data'></th></tr>";
			for($i=0;$i<$img_no;$i++)
			{
				echo "
						<tr><td><input type='file' name='new$i' id='file'/></td></tr>
					";
			}
			echo "
						<tr><td><input type='submit' value='upload'/></td></tr>
					</form></table></center>";
		}
	}
	else
	{
		echo "Please create Gallery First.";
	}

?>
</body></html>
