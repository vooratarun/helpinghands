<?php
$name=$_POST['name'];
$comment=addslashes(strip_tags($_POST['question']));
$ip=getenv("REMOTE_ADDR");
$d=date("Y-m-d");
mysql_connect("localhost","root","9014734454");
mysql_select_db("helpinghand");
mysql_query("INSERT INTO faqs(name,question,ip,date) VALUES('$name','$comment','$ip','$d')")or die(mysql_error());
?>
<script type="text/javascript">alert("Done. Your Question will be posted after Scrutinizing Thank you.");document.location.href='home.php'</script>
<?php
?>
