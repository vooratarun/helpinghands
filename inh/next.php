<?php 
 session_start();
 $_SESSION['timeout'] = time();
 $inactive = 3600;
 if (isset($_SESSION['timeout']))
	{
		$session_life = time() - $_SESSION['timeout'];
	}
 if($session_life > $inactive )
	{
		session_destroy();
		header("Location:destroy.php");
	 }

if($_SESSION['user']=='admin' and $_SESSION['pass']=='accessgranted@hh'){

?>
<html>
<head>
<title> I need Help</title>
<style>
#load{
	position:absolute;
	left:0px;
	top:100px;
	border:1px solid blue;
	color:black;
	text-align:center;
}
td{
	border:1px solid blue;
}
</style>
</head>

<body style='background-color:#f2f2f2;'>
		<?php
	mysql_connect("localhost","root","9014734454");
	mysql_select_db("helpinghand");
	$result=mysql_query("select * from need ORDER BY date DESC");
	echo "<table id='load'><th>Name</th><th>ID</th><th>Batch&Branch&Class</th><th>Dorm</th><th>Phone</th><th>Gen</th><th>Problem
	</th><th>Address</th><th>Father Name & Occupation</th><th>Income</th><th>Ration Card</th><th>Date</th><th>IP</th>";
	while($row=mysql_fetch_array($result)){
		echo "<tr><td>".$row['name']."</td><td>".$row['id']."</td><td>".$row['batch']."<br>".$row['branch']."<br>".
			$row['class']."</td><td>".$row['dorm']."</td><td>".$row['phone']."</td><td>".$row['gen']."</td><td>".
			$row['pblm']."</td><td>".$row['address']."</td><td>".$row['fname']."<br>".$row['occ']."</td><td>".$row['income']."</td><td>".$row['ration']."</td><td>".$row['date']."</td><td>".$row['ip']."</td></tr>";
	}
	echo "</table>";
	?>
</body>
</html>

<?php }
else{
header("location:index.php");
}

?>
