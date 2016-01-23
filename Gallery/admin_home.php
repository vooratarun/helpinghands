<?php 
 session_start();
if($_SESSION['user']=='admin' and $_SESSION['pass']=='accessgranted@hh'){
	
?>
<html>
	<head>
	    <title>Gallery Creation</title>
        <script language="javascript">
			//here write checking function for number of images to gallery must be greater than 0;
		</script>
    </head>
	<body>
    <center>
		<form name="Fname"  action = "gallery.php" method='post'>
        <table>
        	<tr>
            <td>Enter Your Gallery Name  :</td><td><input name="FolderName"type="text" /></td>
            </tr>
            <tr>
            <td>Number of Images adding to Gallery :</td><td><input name="Image_no" type="text"/></td>
            </tr><tr><td> </td></tr>
            <tr><td></td>
            <td align="center">
				<input name="submit" type='submit' value="submit">
           </td>
           </tr>
        </table>
		</form>
        </center>
	</body>
</html>

<?php }
else{
header("location:index.html");
}
?>

