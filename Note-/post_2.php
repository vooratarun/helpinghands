<?php
$title=@$_POST['title'];
$s_number=@$_POST['s_no'];
$date=date("d-m-y",mktime(0,0,0,date("m"),date("d"),date("y")));
//$posted_by=$_POST['posted_by'];
$title_array = explode(" ",$title);
$i = 0;
foreach($title_array as $t)
{
	if($i++==0)
		$new_title = $t;
	else
		$new_title = $new_title."_".$t;
}

if($body=@$_POST['body'])
{
	if($title = @$_POST['title'])
	{
		$file=@$s_number."_".$new_title."_".$date.".html";
$output=
"
<html>
<head><title>".$_POST['title']."</title>
<style type='text/css'>a:link {text-decoration:none;color:gray}a:visited {text-decoration:none;color:#000000a:hover {text-decoration:none;color:green}a:active {text-decoration:none;color:#000000}</style>
<body><table width='895'  style='text-align:justify;-moz-box-shadow:0px 0px 3px black;box-shadow:0px 0px 3px black;-moz-border-radius:10px;border-radius:10px;border-top:0px;'><tr><td style='text-align:justify;'>
<h4 style='margin-left:50px;margin-top:10px;margin-right:50px; '>

		".$body." 
	</h4>";
		if ($_FILES["new"]["error"] > 0)
		{
			$output=$output;
		}
		else
		{
			$_FILES["new"]["name"]=$_FILES["new"]["name"];
			if (file_exists("./Note-/files/" . $file))
			  {
					$_FILES["new"]["name"]=$_FILES["new"]["name"."1"];
			  }
			move_uploaded_file($_FILES["new"]["tmp_name"],"./files/" . $_FILES["new"]["name"]);
			$attachement = $_FILES["new"]["name"];
$output.="
	<h4 style='margin-left:50px;margin-top:10px;margin-right:50px; '>
		Attachement : <a href='./Note-/files/".$attachement."' target='_blank'>".$attachement."</a> 
	</h4>";
		}
		
$output.="
	<h3 align='right' style='margin-right:50px;'><font color='green' >Posted by /-</font><br><font color='#903' >Admin</font></h4>

</td></tr></table></body>
</html>";
		
		$findex = fopen("./files/".$file, "w");
		fwrite($findex,$output);
		fclose($findex);
	}
	else
	{
		echo "<script language='javascript'>
				alert('Please provide the Title for the notification');
				</script>
			";
	}
}
else
{
	echo "<script language='javascript'>
  			alert('Please provide the Body of the notification');
			</script>
		";
}
echo "<script language='javascript'>
  			alert('Success full');
			</script>
		";
header("Location:/help/admin_index.php");
?>
