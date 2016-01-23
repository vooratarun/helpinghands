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
	
	<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>

    <style type="text/css">
    @font-face{
    font-family:Adobe Gothic Std;
    src:url('./css/fonts/AdobeGothicStd-Bold.otf');
    }
    @font-face{
    font-family:andlso;
    src:url('./css/fonts/andlso.ttf');
}

			h2{
				text-align:center;				
				color:#0080C0;
				font-size:24px;
				font-family:Adobe Gothic Std;
				}
	</style>
</head>
	<body>
<h2 style='margin-left:200px;'><strong>I Need Help</strong></h2>
    <center>
<iframe width="1000" name="Stack" src="hand_admin_home.php" frameborder="0" scrolling="yes" id="iframe" onload='javascript:resizeIframe(this);' />
        </center>
	</body>
</html>

<?php }
else{
header("location:index.html");
}

?>
