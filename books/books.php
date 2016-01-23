<html>
<title>HH : Contribution</title>
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
	</head>
    <body>
		<div id="s1">
        <h2 align="center"><strong>Money Collected from selling Rough books & News Papers</strong></h2>
		<p>
			Apart from contributors and organisations Helping Hands also gets money by selling rough books,newspapers and text books.The books,newspapers might be useful if you contribute them to Helping Hands instead of throwing them off.As we are more in number our small contribution works great as a whole.Hope you will help us with your valuable participation.Once have a glance at the statistics of money collected through selling those stuff in the past years.
		</p>
<br>
		<font color="red"><blink>Note :</blink></font>  Please observe the money collected by selling rough books. So every one cooperate for this activity while we are going to take rough books.
		<br><br><br>
<?php
			mysql_connect('localhost','root','9014734454');
			mysql_select_db('money_collection');
			$result=mysql_query("select * from roughbooks");
			$total=0;
			while($row=mysql_fetch_array($result))
			$total+=$row['money'];
	echo "<h5>Total Money :- <b>".$total."Rs/-</b></h5>";			
?>&nbsp;&nbsp;&nbsp;
<a  style='text-decoration:none;' target='frame' href='books/rough_table.php' ><button class="samebutton">View Details</button>

<iframe  name='frame' src ="" width="100%" height="300px" style="border:0px;">
  <p>Your browser does not support iframes.</p>
</iframe>
		
	</body>
</html>
