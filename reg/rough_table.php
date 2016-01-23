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
		text-align:center;
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
	.samebutton{background-color:#0080C0;width:150px;color:white;height:30px;}
	.samebutton:hover{background-color:white;color:black;font-weight:bold;border-color:green;}	
	</style>
<table id="customers" >
			<tr>
				<th>Particulars</th>
				<th>Date</th>
				<th>Amount Collected</th>
			</tr>
			<?php
			mysql_connect('localhost','root','9014734454');
			mysql_select_db('money_collection');
			$result=mysql_query("select * from roughbooks");
			$count=0;
			while($row=mysql_fetch_array($result)){
				if($count==1)
				{
					$color="class='alt'";
					$count=0;
				}
				else
				{
					$color="";
					$count=1;
				}
				echo "
				<tr ".$color.">
					<td >".$row['part']."</td>
					<td >".$row['date']."</td>
					<td >".$row['money']."</td>
				</tr>";
			}
			?>
		</table>
