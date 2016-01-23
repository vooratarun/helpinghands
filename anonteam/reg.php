<script>
function goback()
{
window.location.href='org_reg.php';
}
</script>
<div id='mdiv2'></div>
<?php
session_start();

@include "db.php";
$clu=$_GET['clu'];
$bt=$_GET['bt'];
$id=$_GET['id'];
$sec=$_GET['section'];
$cluno=$_GET['cluno'];
$name=$_GET['name'];
$pwd=$_GET['pwd'];
$email=$_GET['email'];
$class=$clu."-".$cluno;
$ph=$_GET['cno'];
$sq=$_GET['sq'];
$sqa=$_GET['sqa'];
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set("Asia/Kolkata");
setlocale(LC_ALL,"hu_HU.UTF8");
$time=(strftime("%Y. %B %d. %A."))." ".date("h:i:sa");
$c=mysql_query("SELECT id FROM org_reg WHERE id='$id'") or die(mysql_error());
$cf=mysql_fetch_array($c);
if($cf['id']!=$id){
$q1=mysql_query("INSERT INTO `help`.`org_reg` (`sno`, `id`, `batch`,`section`,`name`,`class`, `phone`, `email`, `sq`, `sqa`, `ip`, `time`) VALUES ('', '$id','$bt','$sec', '$name', '$class', '$ph', '$email', '$sq', '$sqa', '$ip', '$time')") or die(mysql_error());
if($q1==true)
	echo "<center><h2><font color=green>Registration Done Successfully...</font></h2></center>";}
else
	echo "<center><h2><font color=red>Already Registered...</font></h2><br><button onclick='goback()'>Back</button></center>";

?>
