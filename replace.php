<?php
session_start();
$date = date('d-M-Y');
$name=$_POST['name'];
$iid=$_POST['iid'];
$batch=$_POST['batch'];
$branch=$_POST['branch'];
$block=$_POST['block'];
$no=$_POST['no'];
$dorm=$_POST['dorm'];
$gen=$_POST['gen'];
$phone=addslashes($_POST['phone']);
$pblm=addslashes($_POST['pblm']);
$address=addslashes($_POST['address']);
$fname=$_POST['fname'];
$occ=$_POST['occ'];
$income=$_POST['income'];
$ration=$_POST['ration'];
mysql_connect("localhost","root","9014734454")or die(mysql_error());
mysql_select_db("helpinghand");
$result=mysql_query("select * from need where name like '$name'") or die(mysql_error());
$row=mysql_fetch_array($result);
$nname=$_POST['name'];
$nbatch=$_POST['batch'];
$npblm=$row['pblm'];
$nadrs=$row['address'];
$html = '
    <style>
        @page {
                margin-top: 0.5cm;
                margin-bottom: 2.0cm;
                margin-left: 2.3cm;
                margin-right: 1.7cm;
                margin-header: 8mm;
                margin-footer: 8mm;
                footer: html_myHTMLFooter;
                background-color:#ffffff;
                font-family: \'norasi\';
                font-size:16px;
              }
    </style><head>
           <link href="button.css" rel="stylesheet">
    </head>
    <body>
        <table style="margin-top:0%;font-family: \'norasi\';border-bottom:0.2mm solid #000000;padding-bottom:2px;">
            <tr colspan=3>
                <td style="text-align:left;font-size:20px;font-weight:bold;">
                    I NEED HELP DECLARATION
                </td>
            </tr>
            <tr>
                <td style="font-size:12px;">
                    <i></i>
                </td>
                <td width="80%">
                </td>
                <td style="text-align:right;">
                    <i>'.$date.'</i>
                </td>
            </tr>
        </table>
<br><br>
    <font style="margin-left:120px;text-align:left;font-size:18px;">To<br>
The Chairperson,<br>
Helping Hands,<br>
RGU-IIIT-Nuzvid,<br>
Krishna District.<br><br>Respected Sir,<br>
			<p style="margin-left:80px;font-size:18px;">SUBJECT:<br>
                        &nbsp;&nbsp;&nbsp;I,<b>'.$nname.'</b> student of Batch <b>'.$nbatch.'</b>requesting Helping Hands
			to address my problem mentioned here.<br><br>
			&nbsp;&nbsp;&nbsp;My problem is :'.$npblm.'<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanking you sir,<br>

			My Details:<br></p>


<center><table border=1 id="tabl">
			<tr>
				<td>NAME:</td><td>ID:</td>
				<td>BATCH <br>
				BRANCH <br>
				BLOCKNO<br>
				DORM</td>
				<td>Name of Father:</td>
				<td>Occupation:</td>
				<td>INCOME:</td>
				<td>RATION CARD NO:</td>
				<td>Phone no:</td>
				<td>GENDER:</td>
				<td>PROBLEM</td>
				<td>ADDRESS</td>
			</tr>
			<tr>
			<td>'.$name.'</td><td>'.$iid.'</td><td>'.$batch.'<br>'.$branch.'<br>'.$block.$no.'<br>'.$dorm.'</td><td>'.$fname.'</td>
			<td>'.$occ.'</td><td>'.$income.'</td><td>'.$ration.'</td><td>'.$phone.'</td><td>'.$gen.'</td><td>'.$npblm.'</td><td>'.$nadrs.'</td>
			</tr>
		</table></center>

<h4 style="margin-left:20px;">Declaration:</h4>
 <p style="font-size:18px;">&nbsp;&nbsp;&nbsp;I here by declared that the above mentioned information is true up to my knowledge.<br></P>
<h5 style="margin-left:20px;">Place: </h5>
  <h5 style="margin-left:20px;">Date: </h5></font>
 <p style="margin-left:500px;font-size:18px;">Yours obediently,<br>'.$name.'</p>



<htmlpagefooter name="myHTMLFooter">
<table width="100%" style="border-top: 0.1mm solid #000000; vertical-align: top; font-size: 9pt; color: #000055;font-family: \'norasi\';"><tr>
<td width="25%" align="left"><b>Helping Hands</b></td>
<td width="25%" align="right"><b></b></td>
</tr></table>
</htmlpagefooter>
<div style="font-family: \'norasi\';">
<table style="border-collapse:collapse;font-family: \'norasi\';width:100%;margin-left:0%;font-size:14px;text-align:center;" border=1></table>
</div>
</body>';
$_SESSION['html']=$html;
$_SESSION['iid']=$iid;
echo '<center><h4><font color="green">Please take a print out of this application, sign and submit to HH representative to process your request.</font></h4></center>';
echo $html;
echo
'	<center>
    <form action="pdf.php" align="center">
    <input type="submit" name="submit" value="Save & Submit" class="ink-button blue"></input>
    </form>
    </center>
';

?>
