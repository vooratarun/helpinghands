<?php 
 session_start();
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
$_SESSION['timeout'] = time();
if($_SESSION['user']=='admin'){

?>
<html>
<head>
	
	<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>

</head>
	<body><br>
    <center>
<iframe width="970" name="Stack" src="./wc/admin_home.php" frameborder="2" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);' />
        </center>
	</body>
</html>

<?php }
else{
header("location:index.html");
}

?>
