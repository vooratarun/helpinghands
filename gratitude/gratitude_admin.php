<html>
<head>
<style type="text/css">

    @font-face{
    font-family:Adobe Gothic Std;
    src:url('.../1copy/css/fonts/AdobeGothicStd-Bold.otf');
    }#hed{
        text-align:center;
        color:#0080C0;
        font-size:24px;
        font-family:Adobe Gothic Std;
}
</style>
	<title>HH : Gratitude</title>
	<link href="ink.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
	<script src="jquery.js"></script>
    <script src="bootstrap-modal.js"></script>
	<script type="text/javascript">
		function check(){
			var x= document.getElementById('name').value;
			if(x.length<=0){
				alert("Please Enter your name");
				return false;
				}
			var y=document.getElementById('discription').value;
			if(y.length<=0){
				alert("Please type your discription");
				return false;
				}
			}
			function postgrat(x,act){
				document.location.href='post.php?sno='+x+"&act="+act;
			}
	</script>
</head>
<body>
    <div style="text-align:center;color:#0080C0;font-size:24px;font-family:Adobe Gothic Std;"><B><font face="Adobe Gothic Std">Gratitude Page</font></B></div><br>

	<div id="postform" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ques" aria-hidden="true">

		
		<div class="modal-body">
			<form action="gratitude_2.php" method="POST">
				<table>
					<tr>
						<td>Name</td>
						<td><input type=text placeholder="Your name " name=name id=name></td>
					</tr>
					<tr>
						<td>Id No</td>
						<td><input type=text placeholder="Enter Id Number " name=id_no></td>
					</tr>
                                        <tr>
						<td>Title</td>
						<td><textarea placeholder="title for your gratitude " cols=60 rows=3 name=title></textarea></td>
					</tr>
                                        <tr>
						<td>Discription</td>
						<td><textarea placeholder="describe your gratitude "  id=discription cols=60 rows=5 name=discription></textarea></td>
					</tr>
					<tr>
						<td><center><input type=submit id='but' value="Post" onClick="return check()"></center></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
<?php
	echo "<table class='ink-table bordered alternating hover'>
			<tr style='text-align:center'>
				<td width='8%'>S NO </td>
				<td width='20%'>Title</td>
				<td width='15%'>Posted by</td>
                                <td width='10%'>ID NUMBER</td>
				<td width='20%'>Date</td>
			</tr>";


        $d = opendir('files') or die($php_errormsg);
        $flist =array();
        $i =0;
        while (false !== ($f = readdir($d))) {
            $flist[$i]=$f;
            $i++;
        }
        closedir($d);
        for ($i=2;$i<count($flist)-1;$i++){
            $filename = './files/'.$flist[$i];
            $content = "";
            $readfile = fopen($filename,"r");
            $content = fgets($readfile);
            $list = explode("#",$content);

            $title = $list[1];
            @$name = $list[0];
            @$idno = $list[2];
            @$date = $list[5];
            @$description = $list[3];
            $sno = ($i-1);
             echo '<tr href="#'.$sno.'" data-toggle="modal">
                                <td width=5% style="text-align:center"> '.$sno.'</td>
                                <td style="text-align:center">'.$title.'</td>
                                <td style="text-align:center"><b>'.$name.'</b></td>
                                <td style="text-align:center"><b>'.$idno.'</b></td>
                                <td width=20% style="text-align:center">'.$date.'</td>

                        </tr>';
                echo '<div id="'.$sno.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="'.$sno.'Label" aria-hidden="true">
                                                <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                                        <h5 id="'.$sno.'Label">'.$title.'</h5>
                                                </div>
                                                <div class="modal-body">
                                                        <p>'.$description.'</p>													
                                                        <button type="button" class="ink-button green" onClick="postgrat(\''.$filename.'\',1);">Post it !</button>
							<button type="button" class="ink-button red" onClick="postgrat(\''.$filename.'\',2);">Delete it !</button>

                                                </div>
                                        </div>';


            $content = "";
            fclose($readfile);
        }

        echo "</table></div></center>";


?><br><br><br><br>
</body>
</html>
