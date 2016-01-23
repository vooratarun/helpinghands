<?php
session_start();
/*if user is not logged in*/
include("db_conf.php");
if(!isset($_SESSION['name']))
{
if(isset($_POST['submit']))
{
if(isset($_POST['name']) && isset($_POST['pass']))
{
$name=strip_tags(htmlentities($_POST['name']));	
$pass=strip_tags(htmlentities($_POST['pass']));	
$che=mysql_query("SELECT * FROM `users` WHERE name='$name' && pass='$pass'");
if(mysql_num_rows($che)==1)
{
	
session_start();
$_SESSION['name']=$name;
header("location:index.php");
}
else
{
echo "<script>alert('Invalid Details');</script>";
}
}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Helping Hand Notifications - Login</title>

<script src="jquery.js"></script>
<!-- Required CSS File-->
<link type="text/css" rel="stylesheet" media="all" href="css/css.css" />
<script>
function login()
{
	name=$("#name").val();
	pass=$("#pass").val();
	if(name=="" && pass=="")
	{
		$("#name").focus();
		$("#name").css("border","3px solid red");
		$("#pass").css("border","3px solid red");
		return false;
	}
	else
	{
		return true;
	}
	}
	</script>
</head>
<body>
<center>
<div class="vpb_main_wrapper">
<br clear="all" /><br clear="all" />
<br clear="all" /><br clear="all" />
<br clear="all" /><br clear="all" />
<br clear="all" /><br clear="all" />





<form onsubmit="return login()" method=POST>
		<table style='background-color:orange;width:400px;height:200px;'><tr style='background-color:black;color:white;'>
			<th colspan=2><h2>Authentication</h2></th></tr><tr style='text-align:center;'>
				<td>Username:</td><td><input type=text name=name id=name></td>
			</tr>
			<tr style='text-align:center;'><td>Password:</td><td><input type=password name=pass id=pass></td></tr>
			<tr style='text-align:center;'><td></td><td><input type="submit" name="submit" value="login"> </td>
			</table>
			</form>

<br clear="all" /><br clear="all" />

<br clear="all" /><br clear="all" />
<br clear="all" /><br clear="all" />
</div>
</center>
</body>
</html>
<?php
}
/*If user is logged in*/
else
{
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Helping Hand Notifications - <?php echo $_SESSION['name'];?></title>

<script src="jquery.js"></script>
<!-- Required CSS File-->
<link type="text/css" rel="stylesheet" media="all" href="css/css.css" />
<script>

function load_page(prathap)
{
	
   // $("html, body").animate({ scrollTop: 0 }, 1000); 
    
	$("#menu a").removeClass("button rosy");
	$("#menu a").addClass("button white");
	$("#menu a").removeClass("button green");
	$("#menu a").addClass("button white");
	$("#"+prathap).addClass("button green");
	$("#content").fadeIn("slow").html("<h3>Loading............</h3>").load(prathap+".php");
	}
	
function deleten(nid)
{
$("#n"+nid+" td").html("<font color='red'>deleting..</font>");
$.post("delete_notice.php",{nid:nid},function(data){$("#n"+nid+" td").fadeOut("slow");});
}


	
function editn(nid,nsubj,ndesc,nattachment)
{
}

function deletes(nid)
{
$("#n"+nid+" td").html("<font color='red'>skipping..</font>");
$.post("delete_suggestion.php",{nid:nid},function(data){$("#n"+nid+" td").fadeOut("slow");});
}


function deletec(nid)
{
$("#n"+nid+" td").html("<font color='red'>deleting..</font>");
$.post("delete_collection.php",{nid:nid},function(data){$("#n"+nid+" td").fadeOut("slow");});
}


function delete_hrmsg(nid)
{
$("#n"+nid+" td").html("<font color='red'>deleting..</font>");
$.post("delete_hrmessage.php",{nid:nid},function(data){$("#n"+nid+" td").fadeOut("slow");});
}


function reply_hrmsg(nid,uid)
{
	var c=prompt("Enter your message to send to "+uid+" ");
	$("#n"+nid+" td").html("<font color='red'>Sending..</font>");
$.post("reply_hrmessage.php",{nid:nid,c:c},function(data){$("#n"+nid+" td").html("<font color='green'>Sent to "+uid+"</font>");});

}

$(document).ready(function(){ 
	$(window).scroll(function(){ 
		if ($(this).scrollTop() > 250) { 
                        $('#menu').css("position","fixed");
                        $('#menu').css("margin-top","-290px");
                        $('#menu').css("margin-left","70px");
                        $('#menu a').removeClass("button white");
                        $('#menu a').addClass("button rosy");
                      
                      
		} else { 
                        $('#menu').css("position","");
                        $('#menu').css("margin-top","");
                        $('#menu').css("margin-left","");
	$("#menu a").removeClass("button rosy");
	$("#menu a").addClass("button white");
                       
		} 

 
	}); 
	
});

</script>
</head>
<body>
<center>
	<span style='position:fixed;right:10px;float:right;font-weight:bold;font-size:16px;'><a class="button blue" href="../">Home</a><br><br><a class="button red" href="logout.php">Logout</a></span>
<div class="vpb_main_wrapper">
	<img src="img/1.jpg" style="border-radius:30px;">
	<u><H1 style='color:green;'>HELPING HANDS NOTIFICATIONS AREA</H1></u>
<br clear="all" /><br clear="all" />
<br clear="all" /><br clear="all" />
<div id="menu">
<a class="button white" id="notifications" onclick="load_page(this.id)" style="cursor:pointer;">Add Notification</a>
<a class="button white" id="editnotices" onclick="load_page(this.id)" style="cursor:pointer;">Edit Notification</a>
<a class="button white" id="collections" onclick="load_page(this.id)" style="cursor:pointer;">Add Collection</a>
<a class="button white" id="editcollections" onclick="load_page(this.id)" style="cursor:pointer;">Edit Collection</a>
<a class="button white" id="suggestions" onclick="load_page(this.id)" style="cursor:pointer;">Suggestions</a>
<a class="button white" id="hrmessages" onclick="load_page(this.id)" style="cursor:pointer;">HR Messages</a>
</div>
<br clear="all" /><br clear="all" />

<div id="content" style="min-height:250px;">
	<br><img src="img/home_logo.png">
</div>
<br clear="all" /><br clear="all" />
<br clear="all" /><br clear="all" />
</div>
</center>
</body>
</html>
<?php
}
?>
