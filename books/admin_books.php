<?php 
 session_start();
if($_SESSION['user']=='admin' and $_SESSION['pass']=='accessgranted@hh'){
	
?>
<html>
<title>HH : DrawBox</title>
	<style type="text/css">
		#p{
		font-family:andalus; 
		position: relative;	
		width:1200px;
		text-align: justify;
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
		h4{
		color:#903;
		font-family:Adobe Gothic Std;
		font-weight:bold;
		font-size:18px;
		text-align:left;
		}
		#customers
		{
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		width:100%;
		border-collapse:collapse;
		}
		#customers td, #customers th
		{
		text-align:center;
		font-size:1em;
		border:1px solid #98bf21;
		padding:3px 7px 2px 7px;
		}
		#customers th
		{
		font-size:1.1em;
		text-align:left;
		padding-top:5px;
		padding-bottom:4px;
		background-color:#A7C942;
		color:#ffffff;
		text-align:center;
		}
		#customers tr.alt td
		{
		color:#000000;
		background-color:#EAF2D3;
		}
	</style>
	<script type="text/javascript">
		function load_next_books()
		{
			var evnt = $("#dat").val();
			var amnt = $("#amount").val();
			$.post("./books/books_admin_2.php",{dat:evnt,amount:amnt},function(text)
			{
				$("#div_cont").html(text);
			});
			$("#cont_d").hide();
			$("#div_cont").show();
		}
	</script>
	</head>
        <body style="background:#ffffff;">
     <div style="background:#ffffff;">
        <h2 align="center"><strong>Money from RoughBooks</strong></h2>
		<div id="cont_d">
			<table id="customers" >
				<tr>
					<th>Date</th>
					<th><input type="text" id="dat" placeholder="Third Time"/></th>
					</tr>
				<tr>
					<td>Enter Amount</td>
					<td><input type="text" id="amount" placeholder="1000"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Submit" onclick="load_next_books();" /></td>
				</tr>
			</table>
			</form>
		</div>
	<div id="div_cont" style="display:none;"></div>

<?php }
else{
header("location:index.html");
}
?>
