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

if($_SESSION['user']=='adm' and $_SESSION['pass']=='access'){

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
             $("#maindiv").load("./Note-/admin_index2.php");
		  }
		
		</script>
</head>

<body onLoad="load_home();doTimer();" background="background.jpg" bgproperties="fixed"><div align="right"><form action="destroy.php"><input type="submit" class="ink-button blue" value="Logout" /></form></div>
	<table id="nothing" cellspacing="0px" style="border:0px solid grey;border-radius:0em;-moz-border-radius:0em; -moz-box-shadow: 1px 1px 10px 10px gray;box-shadow: 1px 1px 10px 10px gray;-webkit-box-shadow: 0px 10px 10px 10px #888888;background:#ffffff;" align="center" width="1070">
		<tr>
			<td>
			</td>
		</tr>
		<tr>
			<td align="center">
				<div id="help" >
					
					<div id="txt" align="center" style="margin-top:0px;font-size:14px;color: darkblue"></div>
					<div id="menu" style="background-color:#0080C0;/*#0E9EC7;#3333B3;*/;text-shadow:0px;width:1006px;align:center; " >
                		<ul class="menu" style="margin-left:50%;">
							
					 <center> <li><a href="#" onClick="load('./Note-/admin_index2.php')"><span>Notifications		
                            		</ul>
                            		
                        		</div>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                   
                   

                  
                    </span></a></li>


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
