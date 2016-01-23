<?php 
 session_start();
?>
<html>
<head>
<title> I need Help</title>
<style>
#load{
	position:absolute;
	left:0px;
	top:150px;
	width:100%;
	border:1px solid blue;
	color:black;
	text-align:center;
}
td{
	border:1px solid blue;
}
 #wrapper {
        border: 1px solid gray;
	margin-left:150px;
	
	background-color:#000;
	opacity:0.7;
	color:#fff;
        }
 	#main_body{
	  border:1px solid blue;
	  width:90%;
	  height:100%;
	  margin:20px auto 0;
	}
      #header {
        overflow: hidden;
        }
 
      #header h1 {
        float: left;
        margin-left: 60px;
        }
 
      #header ul {
        padding: 0;
        text-align: right;
        }
 
      #header li {
        border: 1px solid black;
        display: inline-block;
        margin: 1em .5em;
        text-align: left;
        margin:20px;
        }
                #header li a{
			text-decoration:none;
			color:#fff;
			font-size:17px;
		}
			section#content {
		float:left;
		width:691px;
		clear:right;
		overflow:none;
		height:auto;
	}
	table tr
	{
		 font-size:19px;font-weight:bold;
	}
	
	#Btn{
   font-family: calibri;
   font-size:15px;
   width: 80px;
   height:30px;
   border-width:1px;
   margin:5px;
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius:5px;
   text-align: center;
   background-image: url(images/btn.gif);
   cursor:pointer;
}
	#tdd
	{
		border:1px dotted blue;font-size:15px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius:5px;
		width:30%;
		height:150px;
	}
	#ast tr th {
	border-bottom: 1px solid #ddd;
	padding: 10px;
	line-height: normal;
	text-align: left;
	}
	#ast tr td{
		border-bottom: 1px solid #ddd;
	}
	#prev
	{
		position:absolute;
		right:0px;
		margin:1% 10% 1%;
		text-align:right;
	}
</style>
</head>

<body style='background-color:#f2f2f2;'>
   <div id="wrapper" >
      <div id="header">
	<h1>Helping Hands</h1>
	<h1 style="float: left;margin-left:5%;background-color:#300000;opacity:1; -webkit-border-radius: 5px;
   -moz-border-radius: 5px;">I NEED HELP ADMIN PANEL</h1>
 
	<ul>
	  <li><a  style="float:left;"  href="logout.php">logout</a></li>

	</ul>
      </div>    
    </div>
		<?php
	mysql_connect("localhost","root","9014734454");
	mysql_select_db("helpinghand");
	$result=mysql_query("select * from need ORDER BY date DESC");
	echo "<table id='load'><th>Name</th><th>ID</th><th>Batch&Branch&Class</th><th>Dorm</th><th>Phone</th><th>Gen</th><th>Problem
	</th><th>Address</th><th>Father Name & Occupation</th><th>Income</th><th>Ration Card</th><th>Date</th><th>IP</th>";
	while($row=mysql_fetch_array($result)){
		echo "<tr><td>".$row['name']."</td><td>".$row['id']."</td><td>".$row['batch']."<br>".$row['branch']."<br>".
			$row['class']."</td><td>".$row['dorm']."</td><td>".$row['phone']."</td><td>".$row['gen']."</td><td>".
			$row['pblm']."</td><td>".$row['address']."</td><td>".$row['fname']."<br>".$row['occ']."</td><td>".$row['income']."</td><td>".$row['ration']."</td><td>".$row['date']."</td><td>".$row['ip']."</td></tr>";
	}
	echo "</table>";
	?>
</body>
</html>


