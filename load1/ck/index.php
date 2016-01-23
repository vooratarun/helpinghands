<title>+Add New Article</title>
	
<script type="text/javascript" src="ckeditor.js"></script>
<script src="config.js" type="text/javascript"></script>

<script src="default.js" type="text/javascript"></script>

<style>
	body{
		margin:0px;
		}

	#texteditor{
		background:url('/am/images/bg1.jpg');
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
</style>
	
<div id='texteditor'>
	<form action="create_doc.php" method="post">
		<table width="100%" cellpadding=8>
			<tr><td width='50px'>TitleOfArticle</td><td><input type="text" name="title" placeholder="Enter The NAME OF THE ARTICLE here .. .."/></td></tr>
			
			<tr><td colspan=2><textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="100"></textarea></td></tr>
			
			<tr><td>Author</td><td><input type="text" name="author"/></td></tr>
			
			<tr><td colspan=2><input value="Submit" type="submit"></td></tr>
			
		</table>
			
	</form>
	
</div>
	
	<script type="text/javascript">
		CKEDITOR.replace( 'editor1',
			{
				height : 800,
				background:'black'
			});
	</script>
