<link href='bootstrap.css' rel="stylesheet">
<div style="position:absolute;top:50px;left:90px;">
<form action="faqs.php" method="POST">
<table>
<tr><td>Name</td><td><input type=text placeholder="Enter your Name"  style="height:30px;"name=name id=name></td></tr>
<tr><td>Question</td><td colspan='4'><textarea placeholder="Mention your Question "  id=comment cols=80 rows=3 name=question></textarea></td><td><input class="ink-button blue" type=submit id='but' class="ink-button blue" id="button" value="Post" onclick="return check()"></td></tr>
</table>
</form>
</div>
