<?php
session_start();
include('admin_notifications/db_conf.php');
$vis=mysql_query("SELECT * FROM visits");

if(mysql_num_rows($vis)<1)
{
	mysql_query("INSERT INTO visits(visits) VALUES('1')");
	header("location:../help");
}
else
{
mysql_query("UPDATE visits SET visits=visits+1");
}

?>
<html>
<head> 
       <link type="text/css" href="index.css" rel="stylesheet" />
       <script type="text/javascript" src="./js/jquery.js"></script>
       <script type="text/javascript" src="./js/menu.js"></script>
       <link href="./css/home2.css" rel="stylesheet">
       <link href="./css/buttons.css" rel="stylesheet">
       <link href="./css/home1.css" rel="stylesheet">
       <link rel="icon" href="images/home_logo.png">
       <title>Helping Hands</title>
       <style>
		   body {	background-image:url(background.jpg);background-attachment:fixed;}
       #suggestions {
	display: block;
	padding: 0;
	z-index: 99999;
	position: fixed;
}
.fbpl_right {
	right: 0;
}
.fbpl_right .fbplbadge {
	display: block;
	height: 190px;
	top: 50%;
	margin-top: -55px;
	position: absolute;
	left: -25px;
	width: 31px;
	background-image: url(images/suggest.png);
	background-repeat: no-repeat;
	overflow: hidden;
	-webkit-border-top-left-radius: 8px;
	-webkit-border-bottom-left-radius: 8px;
	-moz-border-radius-topleft: 8px;
	-moz-border-radius-bottomleft: 8px;
	border-top-left-radius: 8px;
	border-bottom-left-radius: 8px;
}
</style>
       <script type="text/Javascript">
		function ourfun(mine)
		$(document).ready(function(){
			
    $("html, body").animate({ scrollTop: 0 }, 1000); 
		$("#s1").html("<br><br><br><br><font color=green>Loading<blink>.....</blink></font>");
		$("#s1").load("Docs/"+mine+".php");
		});	
	
		function load(id)
			{
				
    $("html, body").animate({ scrollTop: 0 }, 1000); 
				$("#maindiv").html("<center><br><br><br><br><img src='images/ajax-loader.gif'><br><font color=green>Loading<blink>.....</blink></font></center>").load(id);
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
	$(document).ready(function(){
$(window).load(function(){
$("#loader").hide();
});
});



jQuery(document).ready(function(){
								
	var dur = "medium"; // Duration of Animation
	var offset = jQuery("#suggestions").attr("data-offset"); // Offset 
	if (jQuery("#suggestions").hasClass("fbpl_right")) {
		var margin = "-" + jQuery("#suggestions").attr("data-width"); // Width of Likebox
		jQuery("#suggestions").css({
			marginRight: margin,
			top: offset
		});
		jQuery("#suggestions").hover(function () {
			jQuery(this).stop().animate({
				marginRight: 0
			}, dur);
		}, function () {
			jQuery(this).stop().animate({
				marginRight: margin
			}, dur);
		});
	}
	// Show the Likebox
	jQuery("#suggestions").show();
});
</script>
</head>
<?php
$date=date("Y-m-d");
$noti=mysql_query("SELECT * FROM notifications WHERE visibility='1' && posted_date='$date' ORDER BY sno DESC");
$new_status=mysql_num_rows($noti);




		?>
		
<body onLoad="doTimer();" >
	<div style="float:right;"><?php
if(isset($_SESSION['hrid']))
{
	echo "<a href='logout.php' class='button10'>Logout</a>";
}

if(isset($_SESSION['name']))
{
	echo "<a href='admin_notifications' class='button blue'>Admin</a><br><br>";
	echo "<a href='logout.php' class='button red'>Logout</a>";
}
?>
</div><br>


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
                		<ul class="menu" style="margin-left:0%;padding-left:1%;">
							
							<li><a style="cursor:pointer;" onClick="load('home.php')"><span>Home</span></a></li>
							<li><a style="cursor:pointer;" class="parent" ><span>Structure</span></a>
								<div class="column">
                            			<ul class="one">
<li><a style="cursor:pointer;" onClick="load('Docs/constitution.php')"><span>Constitution</span></a></li>
<li><a style="cursor:pointer;" onClick="load('peoples.php')"><span>People</span></a></li>

<!--
 <li><a style="cursor:pointer;" class="parent" ><span>People</span></a>
                        <div class="column">
                            <ul class="one">
                                <li><a style="cursor:pointer;" onClick="load('president.php')"><span>President</span></a></li>
                                <li><a style="cursor:pointer;" onClick="load('gensec.php')"><span>General Secretary</span></a></li>
                                <li><a style="cursor:pointer;" onClick="load('people.php')"><span>Representatives</span></a></li>
                                <li><a style="cursor:pointer;" onClick="load('ec.php')"><span>EC Committee Members</span></a></li>
                      
                                            <li><a style="cursor:pointer;" onClick="" class="parent"><span>Departments</span></a>
                                            
                                            
                                            
                                            <div class="column">
                                        <ul class="two">
                                            <li><a style="cursor:pointer;" onClick="load('icd.php')"><span>ICD</span></a></li>
                                            <li><a style="cursor:pointer;" onClick="load('hcd.php')"><span>HCD</span></a></li>
                                            <li><a style="cursor:pointer;" onClick="load('fd.php')"><span>FD</span></a></li>
                                            <li><a style="cursor:pointer;" onClick="load('prd.php')"><span>PRD</span></a></li>
                                            <li><a style="cursor:pointer;" onClick="load('webdept.php')"><span>Web Dept </span></a></li>
						 
                                            </ul>
</li>
                            </ul>
                        </div>
                    </li>
		-->				<li><a style="cursor:pointer;" class="parent" ><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Functioning</span></a>

					<div class="column">
                                        <ul class="two">
					  <li><a style="cursor:pointer;" onClick="load('function.php')"><span>Overall  </span></a></li>
 					<li><a style="cursor:pointer;" onClick="" class="parent"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In Detail</span></a>
                                            
                                            
                                            
                                            <div class="column">
                                        <ul class="two">
                                            <li><a style="cursor:pointer;" onClick="load('Docs/fd.php')"><span> Finance (FD) </span></a></li>
	<li><a style="cursor:pointer;" onClick="load('Docs/hcd.php')"><span> HealthCare (HCD) </span></a></
	<li><a style="cursor:pointer;" onClick="load('Docs/icd.php')"><span> Internel Care (ICD) </span></a></
	<li><a style="cursor:pointer;" onClick="load('Docs/prd.php')"><span> Public RelationShip (PRD) </span></a></li>
						 
                                            </ul>
</li>





                                        </ul>
                                </div>
<div class="column">
                                        </li> 
								
						
                                			
                            		</ul>
                        		</div>
                    		<li><a style="cursor:pointer;" class="parent" ><span>Transactions</span></a>
                        		<div class="column">
                            			<ul class="one">
                                <li><a style="cursor:pointer;" class="parent"><span>Credit</span></a>
                                    <div class="column">
                                        <ul class="two">
<li><a style="cursor:pointer;" onClick="load('./total/show_total.php')"><span>Total</span></a></li>
                                            <li><a style="cursor:pointer;" onClick="load('./wc/load_index.php')"><span>Weekly Money Collection Details</span></a></li>
                                            <li><a style="cursor:pointer;" onClick="load('./dropbox/dropbox.php')"><span>Collections from Drop Boxes</span></a></li>
                                            <li><a style="cursor:pointer;" onClick="load('./contribution/contribution.php')"><span>Contributions to HH</span></a></li>
                                            <li><a style="cursor:pointer;" onClick="load('./books/books.php')"><span>Rough books & News Papers Money</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </li>


			<!--dd-->
                                <li><a style="cursor:pointer;" class="parent"><span>Debit</span></a>
									<div class="column">
                                        <ul class="two">
                      
                                            <li><a style="cursor:pointer;" onClick="" class="parent"><span>Old Records</span></a>
                                            
                                            
                                            
                                            <div class="column">
                                        <ul class="two">
                                            <li><a style="cursor:pointer;" onClick="load('trance.php')"><span>2012-13</span></a></li>
                                            <li><a style="cursor:pointer;" onClick="load('2013-14.php')"><span>2013-14</span></a></li>
						 
                                            </ul>
					
                                </div>
<!---->
				 <li><a style="cursor:pointer;" onClick="load('./details/')" class='parent'><span> 2014-15 </span></a>
					<div class="column">
					 <ul class="two">
                                            <li><a style="cursor:pointer;" onClick="load('./details/')"><span>Overall Details</span></a></li>
                                            <li><a style="cursor:pointer;" onClick="load('./details/prev_details.php')"><span>Complete Details</span></a></li>
						 
                                            </ul>
					</div>
				
				</li>

<!---->
</li>
                                            
                                        
                                            </li>
                                        </ul>
                                    </div>
                                </li>

			<!---->
				


                            </ul>
                        </div>
                    </li>

                     <li><a style="cursor:pointer;" class="parent" ><span>R&R</span></a>
                        <div class="column">
                            <ul class="one">
                                <li><a style="cursor:pointer;" onClick="load('rr_n.php')"><span>Rules & Regulations</span></a></li>
                                <li><a style="cursor:pointer;" onClick="load('dm.php')"><span>Discipline</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a style="cursor:pointer;" onClick="load('./Gallery/load_gallery.php')"><span>Gallery</span></a></li>
                    <li><a style="cursor:pointer;" onClick="load('hand_index.php')"><span>I Need Help</span></a></li>
                    <li><a style="cursor:pointer;" onClick="load('./faq/')"><span>FAQ'S</span></a></li>
                    <li><a style="cursor:pointer;" onClick="load('./gratitude/load_index.php')"><span>Gratitude</span></a></li>
                    <li><a style="cursor:pointer;" onClick="load('./Note-/notify.php')"><span>Notifications
                                      

                    <?php 
                    if($new_status>0)
                    {
						echo "<sup><b style='background:red' width='5' height='2'>&nbsp;<font color='white'>";
						echo $new_status;
						echo "</font>&nbsp;</b></sup>";
					}
					?>
					
                    </span></a></li>
                    
                    <li><a style="cursor:pointer;" onClick="load('./contact/contact.php')"><span>Contact us</span></a></li>
                    <li><a style="cursor:pointer;" onClick="load('./hrs.php')"><span>For HR's</span></a></li>


                </ul>
            </div><div id="suggestions" class="fbpl_right" style="display:none;width:300px; height:300px;" data-offset="150px" data-width="300px" data-height="300px">
				<div class="fbplbadge" style="background-color:;color:white;font-size:20px;padding-left:10px;line-height:25px;"></div>
				<iframe src="suggestions.php" scrolling="yes" frameborder="0" style="border:none; overflow:scroll; width:300px; height:380px;background:#FFFFFF;" allowTransparency="true"></iframe>
			</div>
		
			<div id="loader"><img src="images/ajax-loader.gif"></div>

<div id="maindiv" style="z-index: 1;min-height:300px;">
	<script>
$("#maindiv").load("home.php");
</script></div>
</div></table>
<div style='float:right;margin-right:150px;font-weight:bold;color:#4682B4;font-size:17px;'>Visits : <?php  while($vis_c=mysql_fetch_array($vis))
{
$visit=$vis_c['visits'];
} echo $visit;?></div>
<div id="copyright"><a href="http://apycom.com/"></a></div>
</body>
</html>

