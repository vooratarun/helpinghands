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
						<center><U><h3 style="font-family:Adobe Gothic Std">HR MESSAGES</h3></U></center><BR>
<table class="table2" style='width:80%;margin-left:60px;'>
	<thead>
	<tr class='broom_heading'>
		<th style='font-weight:bold;text-align:center;color:#eee;'>S.NO</th>
		<th style='font-weight:bold;text-align:center;color:#eee;'>STU ID</th>
		<th style='font-weight:bold;text-align:center;color:#eee;'>TO</th>
		<th style='font-weight:bold;text-align:center;color:#eee;'>MESSAGE</th>
		<th style='font-weight:bold;text-align:center;color:#eee;'>ACTION</th>
	</tr>
        </thead>
        <?php
        $note=mysql_query("SELECT * FROM `hrmessages` WHERE reply_status='0'  ORDER BY sno DESC");
        while($note_fet=mysql_fetch_array($note))
        {
		$nt=$note_fet['sno'];
        ?>
	<tr  class='odd' id="n<?php echo $nt;?>"><td><?php echo $note_fet['sno'];?></td><td><?php echo $note_fet['Userid'];?></td><td><?php echo $note_fet['msgto'];?></td><td><?php echo $note_fet['description'];?></td><td><a style='cursor:pointer;' class='button blue medium' onclick=reply_hrmsg("<?php echo $note_fet['sno'];?>","<?php echo $note_fet['Userid'];?>")>Reply</a>  <a style='cursor' class="button rosy medium" onclick=delete_hrmsg("<?php echo $note_fet['sno'];?>")>Delete</a><br> <?php if($note_fet['sno']==""){}else{echo "<u>You sent :</u><b> ".$note_fet['response']."</b>";}?><?php } ?></td></tr>
	<tr><td></td><td></td><td></td><td></td><td></td></tr>
</table>
<?php
}

?>
