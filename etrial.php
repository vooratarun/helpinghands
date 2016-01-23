<html><head><center><h1 style='background-color:orange;color:blue;font-weight:bold; width:300px;text-align:center;'>Thank You!!</h1></center><style>#tabl{
	width:400px;
	height:500px;
	font-weight:bold;
	border:1px groove green;
	background-color:teal;
	color:yellow;
	font-size:18px;
	box-shadow:15px 15px 20px 20px blue;}
	#style2{background-color:yellow;align:center;color:blue;font-weight:bold;text-align:center;}
	</style><script type=text/javascript>
	function subm()
	{
		document.getElementById('fm1').submit();
		}</script>
	</head></html>
<?php
$name=$_POST['name'];
$iid=$_POST['iid'];
$batch=$_POST['batch'];
$branch=$_POST['branch'];
$block=$_POST['block'];
$no=$_POST['no'];
$dorm=$_POST['dorm'];
$gen=$_POST['gen'];  
$phone=addslashes($_POST['phone']); 
$pblm=addslashes($_POST['pblm']);
$address=addslashes($_POST['address']);
$fname=$_POST['fname'];
$occ=$_POST['occ'];
$income=$_POST['income'];
$ration=$_POST['ration'];
$d=date("Y-m-d");
$ip=getenv("REMOTE_ADDR");
$mac=false;
$arp=`arp -a $ip`;
$lines=explode("\n",$arp);
foreach($lines as $line){
	$cols=preg_split('/\s+/',trim($line));
	if($cols[0]==$ip)
	{
		$mac=$cols[1];
	}
}
echo $mac;
echo "<pre>";

  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
	
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "need/" . $_FILES["file"]["name"]); 
    }
 
  

  echo "<pre>";
mysql_connect("localhost","root","9014734454") or die(mysql_error());
mysql_select_db("helpinghand");
mysql_query("INSERT INTO need VALUES('1','$name','$iid','$batch','$branch','$block$no','$dorm','$phone','$gen','$pblm','$address','$fname','$occ','$income','$ration','$ip','$mac','$d')") or die("<B>SORRY!! YOU HAVE ALREADY SUBMITTED.</B>");

echo "<body onload='return subm()'><form action='replace.php' id='fm1' method='post'>
<input type='hidden' value=\"$name\" name='name'>
<input type='hidden' value=$iid name='iid'>
<input type='hidden' value=$branch name='branch'>
<input type='hidden' value=$batch name='batch'>
<input type='hidden' value=$block name='block'>
<input type='hidden' value=$no name='no'>
<input type='hidden' value=$dorm name='dorm'>
<input type='hidden' value=$phone name='phone'>
<input type='hidden' value=$gen name='gen'>
<input type='hidden' value=$pblm name='pblm'>
<input type='hidden' value=$fname name='fname'>
<input type='hidden' value=$occ name='occ'>
<input type='hidden' value=$income name='income'>
<input type='hidden' value=$ration name='ration'>
<input type='hidden' value=$address name='address'>
</form></body>";
?>
