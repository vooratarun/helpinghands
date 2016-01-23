<?php
session_start();
/*if user is not logged in*/
include("db_conf.php");
if(isset($_SESSION['name']))
{

?>
<script>
function collection()
{
subject=$("#subject").val();
posted=$("#posted").val();
File=$("#File").val();

if(subject=="" || File =="" || posted =="")
{
	$("#status").slideDown("slow").html("<div class='info' style='color:red;'>All Fields are required..</div>");
	return false;
}
else
{
	return true;
}
}

</script>
<div class='notices'>
	<div id="status" style="display:none;"></div>
	<form enctype="multipart/form-data" method="post" action="addcollections.php" onsubmit="return collection()" id='fom'>
<table>
	<th colspan="3">
<h2>ADD COLLECTION</h2></th>
<tr><td>Subject</td><td>:</td><td><input type="text" id="subject" name="subject"></td></tr>
<tr><td>Posted by</td><td>:</td><td><input type="text" id="posted" value="Admin" name="posted"></td></tr>
<tr><td>Attachment</td><td>:</td><td><input type="file" name="File" id="File" ></td></tr>
<tr><td colspan="3"></td></tr>
<tr><td></td><td colspan="3"><input type='submit' name="submit" class="button orange" value="Add Collection"></td></tr>
</table>
</form>
</div>
<?php
	
}
else
{
header("location:index.php");
}
?>
