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
    <div style="margin:30px;">
<iframe width="950" name="Stack" src="./gratitude/gratitude_admin.php" frameborder="0" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);' />
   </div>
	</body>
</html>

<?php }
else{
header("location:index.html");
}
?>
