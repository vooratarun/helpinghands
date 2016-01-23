
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>

<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"prweek",
			dateFormat:"%d-%M-%Y"

		});
	};
</script>
<script type="text/javascript">
	function next(){
		new JsDatePick({
			useMode:2,
			target:"crweek",
			dateFormat:"%d-%M-%Y"

		});
	};
</script>
<html>
<button style='cursor:pointer;background-color:black;color:yellow;width:100px;height:30px;' onclick="window.location.href='next.php';">Back</button>

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
		function load_next_drop()
		{
			var evnt = $("#crweek").val();
			var amnt = $("#amount").val();
			var parts = $("#part").val();
			var cbt= $("#conb").val();
			$.post("./contribution_admin_2.php",{part:parts,conb:cbt,crweek:evnt,amount:amnt},function(text)
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
		<h2 align="center"><strong>Money from Contributions</strong></h2>
		<div id="cont_d">
			<table id="customers" >
				<tr>
					<th>Enter Particulars</th>
					<th><textarea rows=5 cols=30 name="part" id="part" onclick="next()" placeholder=""/></th>
				</tr>
				<tr>
					<td>Contributor</td>
					<td><input type="text"  name="conb" id="conb" onclick="next()" placeholder=""/></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="text"  name="c_week" id="crweek" onclick="next()" readonly placeholder=""/></td>
				</tr>
				<tr>
					<td>Enter Amount</td>
					<td><input type="text" id="amount" placeholder="1000"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Submit" onclick="load_next_drop();" /></td>
				</tr>
			</table>
			</form>
		</div>
	<div id="div_cont" style="display:none;"></div>


