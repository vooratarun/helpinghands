<html>
<head>
<link href="ink.css" rel="stylesheet">
</head>
	<body bgcolor="#ffffff">
    <center>
    <table align="center"><tr>
		<?php
			session_start();
			mysql_connect("localhost","root","9014734454");
			mysql_select_db("helpinghand");
			$query=mysql_query("Select * from gname");
			$i=0;
			while($row=mysql_fetch_array($query))
			{
				$g_name = $row['GName'];
				$g_pic = $row['Gpic'];
				if($i<2)
				{
					$i++;
					echo "
						<td align='center'><a href='".$g_name."' style='a{text-decoration:none;color:red;}'><img src='./".$g_name."/Image/".$g_pic."' width='200' height='200' style='box-shadow:0px 0px 10px 5px black;-moz-box-shadow:0px 0px 10px 5px black;border-radius:1.5em;-moz-border-radius:1.5em;' value='".$g_name."'/><br>
						<div class='ink-button blue'>".$g_name."</div>
						</a>
						</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
				}
				else
				{
					$i=0;
						echo "
						<td align='center'><a href='".$g_name."' style='a{text-decoration:none;color:red;}'><img src='./".$g_name."/Image/".$g_pic."' width='200' height='200' style='box-shadow:0px 0px 10px 5px black;-moz-box-shadow:0px 0px 10px 5px black;border-radius:1.5em;-moz-border-radius:1.5em;' value='".$g_name."'/><br>
						<div class='ink-button blue'>".$g_name."</div>
						</a>
					</td>
                    </tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr>";
					
				}
			}
		?>
        </tr></table>
        </center>
	</body>
</html>
