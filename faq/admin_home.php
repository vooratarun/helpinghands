<?php 
 session_start();
if($_SESSION['user']=='admin' and $_SESSION['pass']=='accessgranted@hh'){
	
?>
<html>
<head>
    <style type="text/css">

    @font-face{
    font-family:Adobe Gothic Std;
    src:url('/1copy/fn/css/fonts/AdobeGothicStd-Bold.otf');
    }#hed{
        text-align:center;
        color:#0080C0;
        font-size:24px;
        font-family:Adobe Gothic Std;
}
</style>
<head>
	<title>HH : FAQ's</title>
	<link href="css/ink.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
	<script src="jquery.js"></script>
    <script src="bootstrap-modal.js"></script>
	
<script>
var x;
function validate(x){
	if(document.getElementById(x).value.length<=0){
		alert("Please provide answer!!");
		return false;
	}
}
</script>

</head>
<body>
<table border="1" style="width:100px;" ><th >SNO</th><th >Queson</th><th >Posted by</th><th >Answer</th><th >Current Status</th><th >Reply</th><th >Action</th>
<?php
mysql_connect('localhost','root','9014734454');
mysql_select_db('helpinghand');
$result=mysql_query("select * from faqs ORDER BY sno desc");
$count=1;
while($row=mysql_fetch_array($result)){
	echo "
	<tr>
		<td align='center'>".$count.".</td>
		<td >".$row['question']."</td>
			<form action='check.php' method='POST'>
			<input type=hidden name=sno value=".$row['sno'].">
			<input type=hidden name=hid value=".$row['status'].">
		<td >".$row['name']."</td>
		<td >".$row['answer']."</td>
		<td align='center'>".$row['status']."<input type=submit value='POST/HIDE' id=but></form></td>
		<td style='width:50px;'>
<form action='faqans.php' method='POST'><textarea placeholder='answer' id=".$row['sno']." name=ans rows=4 cols=9></textarea>
			<input type=hidden name=sno value=".$row['sno'].">
			<input type=submit value='Reply/Edit' id=but  onclick='return validate(".$row['sno'].")'></form></td><td style='width:10px;'>
			<form action='faqdel.php' method='POST'><input type=submit value='Delete' id=but>
			<input type=hidden name=sno value=".$row['sno'].">
			</form>
		</td>
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
