<?php 
 session_start();
 $_SESSION['timeout'] = time();
 $inactive = 3600;
 if (isset($_SESSION['timeout']))
	{
		$session_life = time() - $_SESSION['timeout'];
	}
 if($session_life > $inactive )
	{
		session_destroy();
		header("Location:destroy.php");
	 }

if($_SESSION['user']=='admin' and $_SESSION['pass']=='accessgranted@hh'){

?>
<html>
<head> 
       <link type="text/css" href="index.css" rel="stylesheet" />
       <script type="text/javascript" src="./js/jquery.js"></script>
       <script type="text/javascript" src="./js/menu.js"></script>
       <link href="./css/home2.css" rel="stylesheet">
       <link href="./css/home1.css" rel="stylesheet">
       <script type="text/Javascript">
		function load(id)
			{
				$("#maindiv").load(id);
                	}
             function load_home()
             {
             $("#maindiv").load("home.php");
		  }
		var c=0;
		var an= new Array ('"In this life we cannot always do great things.But we can do small things with great love."','" Let us always meet each other with smile, and the smile is the beginning of love -MOTHER TERESA"', '"Do not wait for leaders; do it alone person to person. -MOTHER TERESA"', '"If we cannot love the person whom we see, how can we love god, whom we cannot see?"', '"Be faithful in small things because it is in them that your strength lies."','If you start judging people you will be having no time to love them..."','"Joy is a net of love by which you can catch souls."','"You should never lose heart. God is merciful and kind. He has endowed you with the best gift-SMILE, which can make millions happy."','"Peace begins with a smile."')
		var t;
		var timer_is_on=0;
		function timedCount()
			{
				document.getElementById('txt').innerHTML=an[c];
				c=c+1;
				if(c==5)
					c=0;
				t=setTimeout("timedCount()",8000);
			}
		function doTimer()
			{
				if (!timer_is_on)
					{
						timer_is_on=1;
						timedCount();
					}
			}
		</script>
</head>
<?php
		$i=0;$j=0;$k=1;
		chdir("./Note-/files");
		$array = glob("*.html");
		arsort($array);
		$today=date("d-m-y",mktime(0,0,0,date("m"),date("d"),date("y")));
		$yesterday=date("d-m-y",mktime(0,0,0,date("m"),date("d")-1,date("y")));
		$day_before_yesterday=date("d-m-y",mktime(0,0,0,date("m"),date("d")-2,date("y")));
		$new_status=0;
        foreach($array as $file)
		{
			$tmp_file=substr($file,3,-5);
			$original_file=substr($tmp_file,0,-9);
			$date=substr($tmp_file,-8,8);
			if(($date===$today)||($date===$yesterday)||($date===$day_before_yesterday)){
				$new_status+=1;}
								
		}
		?>
<body onLoad="load_home();doTimer();" background="background.jpg" bgproperties="fixed"><div align="right"><form action="destroy.php"><input type="submit" class="ink-button blue" value="Logout" /></form></div>
	<table id="nothing" cellspacing="0px" style="border:0px solid grey;border-radius:0em;-moz-border-radius:0em; -moz-box-shadow: 1px 1px 10px 10px gray;box-shadow: 1px 1px 10px 10px gray;-webkit-box-shadow: 0px 10px 10px 10px #888888;background:#ffffff;" align="center" width="1070">
		<tr>
			<td>
			</td>
		</tr>
		<tr>
			<td align="center">
				<div id="help" >
					<div id="banner">
						<iframe src="./load/demo-3d.html" style="margin-left:-4px;margin-top:16px;border-radius:1.5em;-moz-border-radius:1.5em"width="96%" height="180px" frameborder="0" scrolling="no">
						</iframe>
					</div>
					<div id="txt" align="center" style="margin-top:0px;font-size:14px;color: darkblue"></div>
					<div id="menu" style="background-color:#0080C0;/*#0E9EC7;#3333B3;*/;text-shadow:0px;width:1006px;align:center; " >
                		<ul class="menu" style="margin-left:0%;">
							<li><a href="#" onClick="load('home.php')"><span>Home</span></a></li>
							<li><a href="#" class="parent" ><span>Structure</span></a>
								<div class="column">
									<ul class="one">
                                			<li><a href="#" onClick="load('people.php')"><span>People</span></a></li>
                                			<li><a href="#" onClick="load('function.php')"><span>Functioning</span></a></li>
                            		</ul>
                        		</div>
                    		<li><a href="#" class="parent" ><span>Finance</span></a>
                        		<div class="column">
                            			<ul class="one">
											<li><a href="#" class="parent" ><span>Process</span></a>
								<div class="column">
                                        <ul class="two">
                                            <li><a href="#" onClick="load('./load/Money_coll.php')"><span>Money Collection </span></a></li>
                                            <li><a href="#" onClick="load('./load/Money_dist.php')"><span>Money Issuing</span></a></li>
                                        </ul>
                                </div>
                            </li>
                                <li><a href="#" class="parent"><span>Money Collection</span></a>
                                    <div class="column">
                                        <ul class="two">
                                            <li><a href="#" onClick="load('./wc/admin_index.php')"><span>Weekly Money Collection Details</span></a></li>
                                            <li><a href="#" onClick="load('./dropbox/admin_dropbox.php')"><span>Collections from Drop Boxes</span></a></li>
                                            <li><a href="#" onClick="load('./contribution/admin_contribution.php')"><span>Contributions to HH</span></a></li>
                                            <li><a href="#" onClick="load('./books/admin_books.php')"><span>Rough books & News Papers Money</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" class="parent"><span>Money Transactions</span></a>
                                <div class="column">
                                        <ul class="two">
                                            <li><a href="#" onClick="load('trance.php')"><span>2012-13</span></a></li>
                                            <li><a href="#" class="parent"><span> &nbsp;&nbsp; &nbsp;&nbsp; 2013-14</span></a>
                                            <div class="column">
                                        <ul class="two">
                                            <li><a href="#" onClick="load('./total/show_total.php')"><span>Credit</span></a></li>
                                            <li><a href="#" onClick="load('./debit/')"><span>Debit</span></a>
                                          </li>
                                        </ul>
                                    </div>
                                          </li></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                     <li><a href="#" class="parent" ><span>R&R</span></a>
                        <div class="column">
                            <ul class="one">
                                <li><a href="#" onClick="load('rr_n.php')"><span>Rules & Regulations</span></a></li>
                                <li><a href="#" onClick="load('dm.php')"><span>Discipline</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" onClick="load('./Gallery/admin_index.php')"><span>Gallery</span></a></li>
                    <li><a href="#" onClick="load('hand_admin_index.php')"><span>I Need Help</span></a></li>
                    <li><a href="#" onClick="load('./faq/admin_index.php')"><span>FAQ'S</span></a></li>
                    <li><a href="#" onClick="load('./gratitude/admin_index.php')"><span>Gratitude</span></a></li>
                    <li><a href="#" onClick="load('./Note-/admin_index.php')"><span>Notifications
                    <?php 
                    if($new_status>0)
                    {
						echo "<sup><b style='background:red' width='5' height='2'>&nbsp;<font color='white'>";
						echo $new_status;
						echo "</font>&nbsp;</b></sup>";
					} 
					?>
                    </span></a></li>
                    <li><a href="#" onClick="load('./contact/admin_contact.php')"><span>Contact Us</span></a></li>


                </ul>
            </div>
<div id="maindiv" ></div>
</div></table>
<div id="copyright"><a href="http://apycom.com/"></a></div>
</body>
</html>
<?php }
else{
header("location:index.html");
}

?>
