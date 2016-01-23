<html>
	<head>
		<title>HH : Total</title>
		<style>
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
	</head>
	<?php
	$connection=mysql_connect("localhost","root","9014734454");
	mysql_select_db("money_collection", $connection);
	$query_d=mysql_query("select SUM(money) from dropbox where year=2014 ") or die(mysql_error());
	$query_c=mysql_query("select SUM(money) from contribution");
	$query_b=mysql_query("select SUM(money) from roughbooks");
	$drop_sum = mysql_result($query_d,0);
	$contribution_sum = mysql_result($query_c,0);
	$books_sum = mysql_result($query_b,0);
	$query_w_e4 = mysql_query("SELECT sum(money) FROM `engg-4`");
	$query_w_e3 = mysql_query("SELECT sum(money) FROM `engg-3`");
	$query_w_e2 = mysql_query("SELECT sum(money) FROM `engg-2`");
	$query_w_e1 = mysql_query("SELECT sum(money) FROM `engg-1`");
	$query_w_p2 = mysql_query("SELECT sum(money) FROM `puc-2`");
	$query_w_p1 = mysql_query("SELECT sum(money) FROM `puc-1`");
	$wc_e4_sum = mysql_result($query_w_e4,0);
	$wc_e3_sum = mysql_result($query_w_e3,0);
	$wc_e2_sum = mysql_result($query_w_e2,0);
	$wc_e1_sum = mysql_result($query_w_e1,0);
	$wc_p2_sum = mysql_result($query_w_p2,0);
	$wc_p1_sum = mysql_result($query_w_p1,0);
	$week_sum = $wc_e4_sum + $wc_e3_sum + $wc_e2_sum + $wc_e1_sum + $wc_p2_sum + $wc_p1_sum;
	$total = $drop_sum + $contribution_sum + $books_sum + $week_sum ;
	
?>
<?php

$me=mysql_query("select SUM(money) from dropbox where year=2014 ") or die(mysql_error());
$mer=mysql_fetch_array($me) or die(mysql_error());

?>
    <body style="background:#ffffff;">
		<div style="background:#ffffff;">
			<h2 align="center"><strong>Credit Details (2013-14)</strong></h2>
			<p>The total money from all the sources till today. </p><h4>The details...</h4>
			 </p>
			<table id="customers" >
				
				<tr>
					<th>Particulars</th>
					<th>Amount Collected ( &#8377; )</th>
				</tr>
			
				<tr>
					<td>Drop Boxes</td>
					<td><?php echo $mer[0];?>/-</td>

				</tr>
				
				<tr class="alt">
					<td>Contributors</td>
					<td><?php echo 0;/*$contribution_sum;*/ ?>/-</td>
				</tr>
				<tr>
					<td>Rough Books</td>
					<td><?php echo 0;/*$books_sum;*/ ?>/-</td>

				</tr>
				
				<tr class="alt">
					<td>Weekly Collection</td>
					<td><?php echo $week_sum; ?>/-</td>
				</tr>
	
