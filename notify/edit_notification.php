<?php
$file_name=@$_POST['edit_this'];
if($file_name=="")
{
	echo "<script language='javascript'>
            alert('Please Select any one notification to edit..!');
  			window.location.replace('/help/admin_index.php');
			</script>
		";
}
?>
<html>
	<head>
    	<title>Editing previous Notification</title>
         <script language='javascript'>
		 function back()
		 {
			  window.history.back()
		 }
         </script>

     <link href="ink_n.css" rel="stylesheet"></head>
    <body>
    <center>
    <form action="edit_2.php" method="post" target="_self">
    <textarea rows="10" cols="150" name="file_body">
   <?php
   $file = fopen("./files/".$file_name, "r");
   while(!feof($file))
	  {
	  	echo fgets($file)."\n";
	  }
   fclose($file);
   ?>
   </textarea border="2">
   <BR>
   <?php
   echo '<input type="hidden" name="file_name" value="'.$file_name.'" />';
   ?>
   <input type="submit" value="Save"/>
   </form><div class="ink-button blue" onClick="back();">Back</div>
    </center>
    </body>
</html>
