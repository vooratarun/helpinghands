<html>
<head>
<style type="text/css">
@font-face{
    font-family:andlso;
    src:url('./fonts/andlso.ttf');
}
@font-face{
    font-family:algerian;
    src:url('./fonts/alger.ttf');
}
@font-face{
    font-family:Adobe Gothic Std;
    src:url('./fonts/AdobeGothicStd-Bold.otf');
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
	</script>
</head>
<body>
    <div style="text-align:center;color:#0080C0;font-size:24px;font-family:Adobe Gothic Std;"><B><font face="Adobe Gothic Std">Gratitude Page</font></B></div><br>
<br>If you got any help from helping hands and want to express your gratitude...You can express your thanks in this page. <br><br>
	<div href="#postform" data-toggle="modal">
		<div class="ink-button blue" align="left">Click to Express </div>
	</div>
	<div id="postform" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ques" aria-hidden="true">
		
		<div class="modal-header">								
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			<h5 id="ques">Express your Gratitude</h5>
		</div>
		<div class="modal-body">
			<form action="./gratitude_2.php" method="POST">
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
						<td><center><input type=submit id='but' class="ink-button blue" value="Post" onClick="return check()"></center></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
<?php
	echo "<table class='ink-table bordered alternating hover'>
			<tr style='text-align:center'>
				<td width='8%'>S NO </td>
				<td >Title</td>
				<td >Posted by</td>
                                <td >ID NUMBER</td>
				<td width=10%>Date</td>
			</tr>";



        $d = opendir('posted') or die($php_errormsg);
        $flist =array();
        $i =0;
        while (false !== ($f = readdir($d))) {
            $flist[$i]=$f;
            $i++;
        }
        closedir($d);
		chdir("posted");
		$array = glob("*.txt");
		rsort($array, SORT_NUMERIC);
		$sno = 1;
		foreach($array as $filename)
		{       
            $content = "";
            $readfile = fopen($filename,"r") or ($php_errormsg);
            $content = fgets($readfile);
            $list = explode("#",$content);    
            $title = $list[1];
            $name = $list[0];
            @$idno = $list[2];
            @$date = $list[5];
            @$description = $list[3];
            // $filename."---></count>".$date."\n\n";
            echo '<tr href="#'.$sno.'" data-toggle="modal">
                                <td width=5%>'.$sno.'</td>
                                <td style="text-align:left">'.$title.'</td>
                                <td ><b>'.$name.'</b></td>
                                <td ><b>'.$idno.'</b></td>
                                <td width=20%>'.$date.'</td>

                        </tr>';
                echo '<div id="'.$sno.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="'.$sno.'Label" aria-hidden="true">
                                                <div class="modal-header" style="background-color:#e8e8e8">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                                        <h5 id="'.$sno.'Label">'.$title.'</h5>
                                                </div>
                                                <div class="modal-body">
                                                        <p>'.$description.'</p>														
                                                </div>
                        </div>';

        
            $content = "";
            $sno = $sno +1;
            //fclose($readfile);
        }

        echo "</table></div></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";


?>
</body>
</html>
