<html>
<head>
<title>HH:Transcations</title>
</head>
<body>
<?php

	$year=$_POST['year'];
	$month=$_POST['month'];
	$date=$_POST['date'];
	$full_date=$year."-".$month."-".$date;
	if (($_FILES["pdf_file"]["error"] > 0)||($_FILES["pdf_file"]["type"] != "application/pdf"))
		{
			echo "<script language='javascript'>
				alert('Please upload Pdf...');
				window.location.replace('/help/finance/admin_index.php');
				</script>";
		}
	else
		{
			$_FILES["pdf_file"]["name"]=$full_date.".pdf";
			move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"./download/" . $_FILES["pdf_file"]["name"]);
			mysql_connect("localhost","root","9014734454");
			mysql_select_db("helpinghand");
			mysql_query("INSERT INTO weekly(year,month,date) VALUES('".$year."','".$month."','".$date."')") or die(mysql_error());
			echo "<script language='javascript'>
				alert('Successfully Uploaded...');
				window.location.replace('/help/finance/admin_index.php');
				</script>";
		}
?>
</body>
</html>
