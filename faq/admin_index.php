<?php 
 session_start();
if($_SESSION['user']=='admin' and $_SESSION['pass']=='accessgranted@hh'){
	
?>
<html>
<head>
	
	<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>

</head>
	<body>
    <div style="margin-left:-25px;">
<iframe width="1100" name="Stack" src="./faq/admin_home.php" frameborder="0" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);' />
   </div>
	</body>
</html>

<?php }
else{
header("location:index.html");
}
?>
