<?php
include('../admin_notifications/db_conf.php');
$date=date("Y-m-d");
$noti=mysql_query("SELECT * FROM notifications WHERE visibility='1' && posted_date='$date' ORDER BY sno DESC");
$new_status=mysql_num_rows($noti);

?>
<html>
    <head>
    	<title>HH:Notifications</title>
        <link href="ink_n.css" rel="stylesheet">
        <style type="text/css">
			a:link {text-decoration:none;color:#000000}
                        a:visited {text-decoration:none;color:#000000}
                        a:hover {text-decoration:none;color:#000000}
                        a:active {text-decoration:none;color:#000000}

			#close{display:none;
			}
			
			
.button {
	display: inline-block;
	zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */
	*display: inline;
	vertical-align: baseline;
	margin: 0 2px;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
.button:hover {
	text-decoration: none;
}
.button:active {
	position: relative;
	top: 1px;
}

.bigrounded {
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;
	border-radius: 2em;
}
.medium {
	font-size: 12px;
	padding: .4em 1.5em .42em;
}
.small {
	font-size: 11px;
	padding: .2em 1em .275em;
}

.big {
	font-size: 30px;
	padding: .5em 2em .6em;
}



.pink {
	color: #feeef5;
	border: solid 1px #d2729e;
	background: #f895c2;
	background: -webkit-gradient(linear, left top, left bottom, from(#feb1d3), to(#f171ab));
	background: -moz-linear-gradient(top,  #feb1d3,  #f171ab);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#feb1d3', endColorstr='#f171ab');
}
.pink:hover {
	background: #d57ea5;
	background: -webkit-gradient(linear, left top, left bottom, from(#f4aacb), to(#e86ca4));
	background: -moz-linear-gradient(top,  #f4aacb,  #e86ca4);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4aacb', endColorstr='#e86ca4');
}
.pink:active {
	color: #f3c3d9;
	background: -webkit-gradient(linear, left top, left bottom, from(#f171ab), to(#feb1d3));
	background: -moz-linear-gradient(top,  #f171ab,  #feb1d3);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f171ab', endColorstr='#feb1d3');
}

		</style>
        <script language="javascript">
			function load_notification(v,p,a)
			{  
				
    $("html, body").animate({ scrollTop: 0 }, 1000); 
				$("#container").css("display","block");
				
			$("#container").html("<table width='895'  style='text-align:justify;-moz-box-shadow:0px 0px 3px black;box-shadow:0px 0px 3px black;-moz-border-radius:10px;border-radius:10px;border-top:0px;'><tr><td style='text-align:justify;'><h4 style='margin-left:50px;margin-top:10px;margin-right:50px; '></h4><br><h4 style='margin-left:50px;margin-top:10px;margin-right:50px; '> <img width='10px' src='new_hh/collection_files/"+a+"'></h4><br><br><h3 align='right' style='margin-right:50px;'><font color='green' >Posted by /-</font><br><font color='#903' >"+p+"</font></h4></td></tr></table>");
				
			
				$("#close").css("display","block");
				$("#title_name").html('<table width="900" style="margin-left:5px;text-align:justify;-moz-box-shadow:0px 0px 3px black;box-shadow:0px 0px 3px black;-moz-border-radius:10px;border-radius:10px;border-top:0px;"><tr><td><h2 style="text-align:center;color:#0080C0;font-family:Adobe Gothic Std;font-size:18px;">'+v+'</h2></td></tr>');
				$("#notifications").css("display","none");
			}
			function load_table()
			{
				load('Note-/collections.php');
			}
		</script>
    </head>
    <body bgcolor="white" style="background-color:white"><div  style="background-color:white">
    <div id="close" onClick="load_table();" align="right" width="150" style="font-size:20px;color:#D0D0D0;cursor:pointer;margin-right:50px;margin-top:-10px;" onMouseOver="this.style.color='#A8A8A8';" onMouseOut="this.style.color='#D0D0D0'"><img src="./Note-/close.gif"></div>

    <div id="title_name" style="margin-left:34px;">
		<center><a style="cursor:pointer;" onClick="load('Note-/notify.php')" class="button pink">Click here for Notification Details <?php 
                    if($new_status>0)
                    {
						echo "<sup><b style='background:green' width='5' height='2'>&nbsp;<font color='white'>";
						echo $new_status;
						echo "</font>&nbsp;</b></sup>";
					}
					?></a></center>
	    <h2 style="text-align:center;color:#0080C0;font-family:Adobe Gothic Std">Collections</h2>
    </div>
    <table class="ink-table bordered alternating hover" id="notifications" style="text-align:left;" width="100%">
    	<tr align="center" >
        	<th align="center" width="10%" height="10px;">S No</th><th width="80%">Title</th><th align="center" width="110%">Posted on</th>
        </tr>
        <?php
        $not=mysql_query("SELECT * FROM collections WHERE visibility='1' ORDER BY sno DESC");
        while($not_r=mysql_fetch_array($not))
        {
			

			if($not_r['posted_date']==date("Y-m-d"))
			{
				 $new_status="&nbsp;&nbsp;<b style='background:red' width='15' height='2'>&nbsp;<font color='white'><blink>New</blink></font>&nbsp;</b>";
			
			}
			else
			{
			}
			
			if($not_r['attachment']=="")
			{
				 $attachment="";	
			}
			else
			{
				$attachment=$not_r['attachment'];
			}
				echo '<tr>
				  				<td align="center">'.$not_r['sno'].'</td>
								<td onclick="load_notification(\''.$not_r['subject'].'\',\''.$not_r['posted'].'\',\''.$attachment.'\');" style="cursor:pointer;">
									<b>'.$not_r['subject'].$new_status.'</b>
								</td>
								<td>'.$not_r['posted_date'].'</td>
							</tr>';
			
								
		}
		?>
        </table>
        <div id="container" style="display:none;margin-left:40px;">
			
        </div></div><br><br><br><br>
    </body>
</html>
