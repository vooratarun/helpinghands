<?php
	$file=$_POST['file_body'];
	$file_name=$_POST['file_name'];
	$findex = fopen("./files/".$file_name, "w");
	fwrite($findex,$file);
	fclose($findex);
	echo "<script language='javascript'>
            alert('Success..!');
  			window.location.replace('/help/admin_index.php');
			</script>
		";
?>
