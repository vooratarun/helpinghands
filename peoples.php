<html>
    <head>

	<script>
	function ourfun2(mine)
	$(document).ready(function(){
	$("#s1").html("<br><br><br><br><font color=green>Loading<blink>.....</blink></font>");
	$("#s1").load(mine+".php");
	});	
function goto(){  window.scrollTo(100,420);}
       function resizeIframe(obj){obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';}</script>
    	<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }


	</script>
        <style>
	.samebutton{background-color:#0080C0;width:150px;color:white;height:30px;}
	.samebutton:hover{background-color:white;color:black;font-weight:bold;border-color:green;}
			@font-face{
    font-family:andlso;
    src:url('./css/fonts/andlso.ttf');
}
@font-face{
    font-family:algerian;
    src:url('./css/fonts/alger.ttf');
}
@font-face{
    font-family:Adobe Gothic Std;
    src:url('./css/fonts/AdobeGothicStd-Bold.otf');
}
		#p{
			font-family:andalus;
			position: relative;
			width:1200px;
			text-align:justify;
			height:auto;
			background-color:#ffffff;
			color:black;
			font-size:16px;
			}
			h2{
				text-align:center;
				color:#0080C0;
				font-size:24px;
				font-family:Adobe Gothic Std;
				}
				p{
					font-size:19px;
                                        font-family:andlso;
					}
				h4{
					color:#0080C0;
					font-family:Adobe Gothic Std;
					font-weight:bold;
					font-size:20px;
					text-align:left;
					}
			ol li{
				font-size:18px;
				margin-left:100px;
				}

	</style>
    </head>
    <body bgcolor="#ffffff" style="text-align: justify;">
   <center>
   
<a style="text-decoration:none" href="./people/president.php" target="main" onclick="goto()"><button class="samebutton">President</button></a>
   
<a style="text-decoration:none" href="./people/people_excmt.php" target="main" onclick="goto()"><button class="samebutton">Ec Committee</button></a>

&nbsp;&nbsp;
 
<a style="text-decoration:none" href="./people/people_repr.php" target="main" onclick="goto()"><button class="samebutton">Representatives</button></a></center>
<br><div id='s1'></div>
<iframe bgcolor="#ffffff" id="main" name="main" frameborder="no" width="950"  scrolling="no"  onload='javascript:resizeIframe(this);' style="left:100px;" onload="javascript:resizeIframe(this);"></iframe>
	<br>
<br><BR><br><BR>

   </body>
</html>
