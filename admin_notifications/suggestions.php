<?php
session_start();
include("db_conf.php");
if(isset($_SESSION['name'])) 
{
	?>
	
<link type="text/css" rel="stylesheet" media="all" href="css/table.css" />
<style>
.broom_heading
	{
		color:#CC3300;
		font-weight:bold;
		height:30px;
		font-size:1.1em;
		text-align:center;
		border-bottom:1px solid #B8B8B8 ;
	}
	table.broom_table td {
	vertical-align:middle;
	text-align:center;
    padding: 20px 10px 0px 20px;}
</style>
	
<div class='container1 separator' style='width:100%;margin-left:30px;'></div>
						<center><U><h3 style="font-family:Adobe Gothic Std">SUGGESTIONS</h3></U></center><BR>
<table class="table2" style='width:80%;margin-left:60px;'>
	<thead>
	<tr class='broom_heading'>
		<th style='font-weight:bold;text-align:center;color:#eee;'>S.NO</th>
		<th style='font-weight:bold;text-align:center;color:#eee;'>STU ID</th>
		<th style='font-weight:bold;text-align:center;color:#eee;'>TO</th>
		<th style='font-weight:bold;text-align:center;color:#eee;'>MESSAGE</th>
	</tr>
        </thead>
        <?php
        $note=mysql_query("SELECT * FROM `suggestions` ORDER BY sno DESC");
        while($note_fet=mysql_fetch_array($note))
        {
		$nt=$note_fet['sno'];
        ?>
	<tr  class='odd' id="n<?php echo $nt;?>"><td><?php echo $note_fet['sno'];?></td><td><?php echo $note_fet['Userid'];?></td><td><?php echo $note_fet['sugto'];?></td><td><?php echo $note_fet['description'];?><?php } ?></td></tr>
	<tr><td></td><td></td><td></td><td></td></tr>
</table>
<?php
}

?>
