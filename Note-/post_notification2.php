<?php
	chdir("files");
	$array = glob("*.html");
	$s_number=count($array)+1;
	if($s_number<10)
		$s_number="0".$s_number;
?>
<html>
	<head>
    	<title>Posting a New Notification</title>
               <link href="bootstrap.css" rel="stylesheet">        <link href="ink_n.css" rel="stylesheet">
 <script language='javascript'>function back(){window.location.reload();}</script>

               

    </head>
    <body><div class="ink-button blue" onClick="back();">Back</div>
    <center>

    <form action="./Note-/post_2.php" method="post" enctype='multipart/form-data'>
    	<table>
             <tr>
                <td>
                	Title of Notification : 
                </td>
                <td>
                	<input type="text" name="title" />
                </td>
             </tr>
             <tr>
             	<td>
                	Body of Notification : 
                </td>
                <td>
                	<textarea name="body" rows="4" cols="20"></textarea>
                </td>
            </tr>
            <!--<tr>
            	<td>
                	Posted by :
              	</td>
                <td>
                	<input type="text" name="posted_by"/>
                </td>
             </tr>-->
             <tr>
            	<td>
                	Attachement :
              	</td>
                <td>
                	<input type='file' name='new' id='file'/>
                </td><td> &nbsp;[optional]</td>
             </tr>
             <tr>
             	<td colspan="2" align="center">
                	<input type="hidden" name="s_no" value="<?php echo $s_number;?>"/>
                	<input type="submit" value="Publish Notification"/>
                </td>
             </tr>
        </table>
    </form>
        
    </center>
    </body>
</html>
