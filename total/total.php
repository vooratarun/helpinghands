<?php
	$connection=mysql_connect("localhost","root","9014734454");
	mysql_select_db("money_collection", $connection);
	$query_d=mysql_query("select SUM(money) from dropbox where year=2014 ");
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
	mysql_close($connection);
?>
<html>
	<head>
		<title>Total Money Collection</title>
	</head>
	<body>
		<?php 
			echo '
				Drop Box : '.$drop_sum.' <br>
				Contributors : '.$contribution_sum.' <br>
				Rough Books : '.$books_sum.' <br>
				Weekly Collection : '.$week_sum.' <br>
				<hr>
				Total : '.$total.' <br>
				<hr>
			';
		?>
	</body>
</html>
