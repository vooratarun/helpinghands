<html>
<head>
	<title>Contact Us</title>
	<script src="feed.js"></script>
	<style>

	#class input[type='text']{
		padding:5px;
		border:1px solid #C5C5C5;
		width:305px;
		}
	#class input[type='submit']{
		padding:3px;
		width:75px;
		border:1px solid #C5C5C5;
		cursor:pointer;
		}
	#class textarea{
		padding:5px;
		border:1px solid #C5C5C5;
		width:750px;
		height:150px;
		}
	</style>
</head>

<body>
<center>

				<div style="width:100%;border:0px solid blue;background:#EEEDFC;padding:15px;font-family:arial;letter-spacing:.5px;" id="class">
					<form onsubmit="return feed(this);" action="ufeedback.php" method='POST'>
						<table >
							<tr>
								<td colspan=2>
									<text style="font-size:18px;"><b>Contact Us :</b></text><br><br>
									<text style='font-size:15px;'>If you have any questions or comments,or if you would like to contact us for a quote,please use the given form and we will get back to you as soon as possible</text>
								</td>
							</tr>
							</table>
							<table >
								<tr><td colspan='2'><b>&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td rowspan="7"><img src="./images/Maps/Manoj.jpg"></td></tr>	
								<tr><td colspan='2'>UseMailID: <b>rguhelpinghands@gmail.com</b></td></tr>	
								<tr><td colspan='2'><b><br>[ OR ]<br><br></b></td></tr>								
								<tr><td colspan='2' id='same'>YourName : </td></tr>
								<tr><td colspan='2'><input type='text' id="aa" name='aa'></td></tr>
								<tr><td colspan='2' id='same'>Mail ID : </td></tr>
								<tr><td colspan='2'><input type='text' id="bb" name='bb'></td></tr>
							</table>
							<table style="margin-left:-100px;">
								<tr><td colspan='2'><br>How can we Help?</td></tr>
								<tr><td colspan='2'><textarea name='cc' id="cc"></textarea></td></tr>
								<tr><td colspan='2'><b>&nbsp;&nbsp;&nbsp;&nbsp;</b></td></tr>	
								<tr><td colspan='2'><input type="submit" value="Submit"/></td></tr>
							</table>
						</form>
							
					</div>
				</td>

			</td>
		</tr>
	
</table>
</center>
</body>
</html>

