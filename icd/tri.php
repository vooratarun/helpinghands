<form action="" method=post>
	<input type=text name="tri">
	<input type=submit name=submit>
</form>
<?php
if(isset($_REQUEST["submit"]))
{
	include("db_conf.php");
	$trin= addslashes($_POST["tri"]);
	echo $trin;
	mysql_query("insert into tri values('$trin')");
}
?>
