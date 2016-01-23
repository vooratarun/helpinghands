<?php 
 session_start();
	
?>
<html>
    <head>
    	<title>Notifications [Admin view]</title>
        <link href="ink_n.css" rel="stylesheet">
        <style type="text/css">
			a:link {text-decoration:none;color:#000000}
                        a:visited {text-decoration:none;color:#000000}
                        a:hover {text-decoration:none;color:#000000}
                        a:active {text-decoration:none;color:#000000}

			#close{display:none;
			}
		</style>
        <script language="javascript">
			function post_notification()
			{
				$("#posting").css("display","none");
				$("#edit_pane").css("display","none");
				$("#title_name").css("display","none");
				$("#container").css("display","block");
				$("#close").css("display","none");
				$("#notifications").css("display","none");
			}
			function edit_notification()
			{
				$("#posting").css("display","none");
				$("#edit_pane").css("display","none");
				$("#title_name").css("display","none");
				$("#container").css("display","block");
				$("#close").css("display","none");
				$("#notifications").css("display","none");
			}
			function load_notification(v,w)
			{  
				$("#container").css("display","block");
				$("#container").load(w);
				$("#close").css("display","block");
				$("#title_name").html('<table width="900" style="margin-left:5px;text-align:justify;-moz-box-shadow:0px 0px 3px black;box-shadow:0px 0px 3px black;-moz-border-radius:10px;border-radius:10px;border-top:0px;"><tr><td><h2 style="text-align:center;color:#0080C0;font-family:Adobe Gothic Std;font-size:18px;">'+v+'</h2></td></tr>');
				$("#notifications").css("display","none");
				$("#postnew").css("display","none");
				$("#edit_pane").css("display","none");
			}
			function load_table()
			{
				$("#edit_pane").css("display","block");
				$("#title_name").html('<h2 style="text-align:center;color:#0080C0;font-family:Adobe Gothic Std">Notifications</h2>');
				$("#container").css("display","none");
				$("#close").css("display","none");
				$("#notifications").css("display","block");
				$("#posting").css("display","block");
				$("#postnew").css("display","inline");
				$("#edit_pane").css("display","block");
			}
		</script>
    </head>
    <body bgcolor="white">
	<div id="close" onClick="load_table();" align="right" width="150" style="font-size:20px;color:#D0D0D0;cursor:pointer;margin-right:0px;margin-top:-10px;" onMouseOver="this.style.color='#A8A8A8';" onMouseOut="this.style.color='#D0D0D0'"><img src="./Note-/close.gif"></div>
	<div id="title_name">
	<h2 style="text-align:center;color:#0080C0;font-family:Adobe Gothic Std">Notifications [Admin]</h2>    </div>
    <center>
    <div id="posting" onClick="post_notification();">
    
    <div class="ink-button blue" id="postnew" style="display:inline;"onclick="load('./Note-/post_notification.php')">Post a New Notification</div>
       
    </div>
    </center><br>
    <form action="./Note-/edit_notification.php" method="post" target="_self">
        <?php
		$output="<form action='edit_notification.php' method='post' target='_self'><table class='ink-table bordered alternating hover' id='notifications'><tr ><th align='center' width='10%'>S No</th><th width='110%'>Title</th><th align='center' width='80%'>Posted on</th><th width='20%'>Edit</th>";
		$i=0;$j=0;$k=1;
		chdir("files");
		$array = glob("*.html");
		arsort($array);
		$today=date("d-m-y",mktime(0,0,0,date("m"),date("d"),date("y")));
		$yesterday=date("d-m-y",mktime(0,0,0,date("m"),date("d")-1,date("y")));
		$day_before_yesterday=date("d-m-y",mktime(0,0,0,date("m"),date("d")-2,date("y")));
        foreach($array as $file)
		{
			$new_status="";
			$tmp_file=substr($file,3,-5);
			$original_file=substr($tmp_file,0,-9);			
			$new_title_name=str_ireplace("_"," ",$original_file);
			$original_file = $new_title_name;
			$date=substr($tmp_file,-8,8);
			if(($date===$today)||($date===$yesterday)||($date===$day_before_yesterday))
                                $new_status="&nbsp;&nbsp;<b style='background:red' width='15' height='2'>&nbsp;<font color='white'><blink>New</blink></font>&nbsp;</b>";
			if(($file===".")||($file===".."))
				 continue;
			else
			{
				$output .= '<tr>
				  				<td align="center">'.$k++.'</td>
								<td onclick="load_notification(\''.$original_file.'\',\'./Note-/files/'.$file.'\');" style="cursor:pointer;">
									<b>'.$original_file.$new_status.'</b>
								</td>
								<td>'.$date.'</td>
								<td>
									<input type="radio" name="edit_this" value="'.$file.'"/>
								</td>
						</tr>';
			}
		}
		$output .= "</table></div>";
		echo $output;
		//feof() checks end of file
		?>
        <center>
       
        </center>
                <div id="container" style="display:none;margin-left:6px;"></div> <div id="edit_pane" style="display:block"><br>
            <input type="submit" class="ink-button blue"value="Edit selected notification"/>
            </form>
       	</div>

    </body>
</html>

