<?php 
 session_start();
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
$_SESSION['timeout'] = time();
if($_SESSION['user']=='admin'){

?>
<html>
<head>
	<title>Weekly Collection</title>
	       <link href="./css/home2.css" rel="stylesheet">
 	<script type="text/javascript" src="weekly_help.js"></script>
 	<script type="text/javascript" src="jquery.js"></script>
</head>
<body ><div align="right"><form action="destroy.php"><input type="submit" class="ink-button blue" value="Logout"/></form></div>
<center>
	<form action ="index_2.php" method="post" id="submition_money">
	<table id="tab">
        <tr>
        	<td>
            	Date :
            </td>
            <td>
            	<select id="year" name="year" onChange="load_mon();">
                	<option value="">Select</option>
                	<option value="12">2012</option>
                	<option value="13">2013</option>
                    <option value="14">2014</option>
                </select>
            </td>
            <td>
            	<select id="month" name="month" onChange="ChangeDateList();" style="display:none;">
                	<option value="">Select</option>
                	<option value="Jan">January</option>
                    <option value="Feb">February</option>
                   	<option value="Mar">March</option>
                    <option value="Apr">April</option>
                    <option value="May">May</option>
                    <option value="Jun">June</option>
                    <option value="Jul">July</option>
                    <option value="Aug">August</option>
                    <option value="Sep">September</option>
                    <option value="Oct">October</option>
                    <option value="Nov">November</option>
                    <option value="Dec">December</option>
                </select>
            </td>
            <td>
            	<select id="date" name="date" style="display:none;"></select>
            </td>
        </tr>
        <tr>
        	<td>
            	Batch :
            </td>
            <td colspan="3">
            	<select id="batch" onChange="load_div();"> 
                	<option value="">Select</option>
                	<option value="p1">Puc-1</option>
                    <option value="p2">Puc-2</option>
                    <option value="e1">Engg-1</option>
                    <option value="e2">Engg-2</option>
                    <option value="e3">Engg-3</option>
                    <option value="e4">Engg-4</option>
                </select>
            </td>
        </tr>
        <tr>
        	<td colspan="4">
            	<div id="container_div"></div>
            </td>
        </tr>
    </table>
    </form>
    <div id="not"><!--<button onclick="publish_n()">Publish Notification</button>---></div>
    <div id="not_are"></div>
    </center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>

<?php }
else{
header("location:index.html");
}
?>
