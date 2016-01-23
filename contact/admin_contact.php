<?php 
 session_start();
if($_SESSION['user']=='admin' and $_SESSION['pass']=='accessgranted@hh'){
	
?>
<html>
<head>
	<title>HH : FAQ's</title>
</head><center>
<body><div style="margin_left:150px;">
<table border='1' width="950" ><th >SNO</th><th >Name</th><th >Mail Id</th><th >Comment</th><th >Date</th><th >IP</th>
<?php
mysql_connect('localhost','root','9014734454');
mysql_select_db('helpinghand');
$result=mysql_query("select * from ufeedback");
$count=1;
while($row=mysql_fetch_array($result)){
	echo "
	<tr>
		<td align='center'>".$count.".</td>
		<td >".$row['Name']."</td>
		<td >".$row['Mail']."</td>
		<td >".$row['Comment']."</td>
		<td >".$row['Date']."</td>
		<td >".$row['IP']."</td>
	</tr>";
	$count++;
}
echo "</table>";
?>

</body>
</html>

<?php }
else{
header("location:index.html");
}
?>
</div>
</center>
