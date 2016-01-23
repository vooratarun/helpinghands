	
<script type="text/javascript" src="ck/ckeditor.js"></script>
<script src="ck/config.js" type="text/javascript"></script>

<script src="ck/default.js" type="text/javascript"></script>

<style type="text/css">
@font-face{
font-family:Adobe Gothic Std;
src:url('./css/fonts/AdobeGothicStd-Bold.otf');
}
@font-face{
font-family:andlso;
src:url('./css/fonts/andlso.ttf');
}
	body{
		margin:0px;
		overflow-x:hidden;
		}
	#texteditor{
		padding:5px;
		width:100%;
		!background:url('/am/images/bg1.jpg');
		background:url('images/bg1.jpg');
		font-family:arial;
		font-size:12px;
		}
	#texteditor table{
		font-size:15px;
		font-weight:bold;
		letter-spacing:.5;
		color:#E1E1E1;
		}
	#texteditor table tr td input[type='text']{
		background:white;
		border:0px solid grey;
		padding:8px;
		width:60%;
		opacity:.8;
		letter-spacing:.5;
		}
	#texteditor table tr td input[type='submit']{
		background:#408080;
		border:0px solid grey;
		padding:4px;
		color:white;
		letter-spacing:.5;
		width:175px;
		}
</style>
<center>
<b style="color:#0080C0;font-size:30px;font-weight:bold;text-align:center;font-family:Adobe Gothic Std;"><u>Thought of the Month</u></b><br>
</center>
<br>
<div id='texteditor'>
	<form action="create_doc.php" method="post">
		<table width="98%" cellpadding=8 cellspacing='0'>
			<tr><td width='50px'><span style='width:100%'>Title</span></td><td><input type="text" name="title" placeholder="Enter The Title of your thought here .. .."/></td></tr>
			
			<tr><td colspan=2><textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="40"><?include('./afiles/1.html');?></textarea></td></tr>
			
			<tr><td>Author</td><td><input type="text" name="author"/></td></tr>
			
			<tr><td></td><td></td></tr>
			
			<tr><td></td><td><input value="Submit .." type="submit"></td></tr>
			
		</table>
			
	</form>
	
</div>
	
	<script type="text/javascript">
		CKEDITOR.replace( 'editor1',
			{
				height : 400,
				background:'black'
			});
	</script>
