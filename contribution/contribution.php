<html>
<title>HH : Contribution</title>
	<style>
            body{background-color:#ffffff;}
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
text-align:left;
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
.samebutton{background-color:#0080C0;width:150px;color:white;height:30px;}
	.samebutton:hover{background-color:white;color:black;font-weight:bold;border-color:green;}	
	</style>
	</head>
        <body style="background:#ffffff;"><div style="background:#ffffff;">
       
            <h2 align="center"><strong>Money from Contributors</strong></h2>
            

			<p>
				Helping Hands also accompany with social events like health camps,
				Blood donation camps etc.Helping Hands conducted Blood 
				donation camp and made it success.The Rotary Club of Nuzvid had 
				appreciated our social service and gave donation. likewise some other contributors also showing their interest and coming forward 
				</p><h4>The perticulars...</h4>
            </p>
<?php
mysql_connect('localhost','root','9014734454');
			mysql_select_db('money_collection');
			$result=mysql_query("select * from contribution");
			$total=0;
			while($row=mysql_fetch_array($result))
$total+=$row['money'];
echo "<h5>Total Money :- <b>".$total."Rs/-</b></h5>";
?>
&nbsp;&nbsp;&nbsp;
<a  style='text-decoration:none;' target='frame' href='contribution/contri_table.php' >
<button class="samebutton">View Details</button>
		

<iframe  name='frame' src ="" width="100%" height="300px" style="border:0px;">
  <p>Your browser does not support iframes.</p>
</iframe>
		
		</div>
	</body>
</html>
