<?php
include('/mpdf/mpdf.php');
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
$html='<html><head>
<style>
	#view{
		position:absolute;
		height:auto;
		top:180px;
		left:202px;
		width:1000px;
		background-color:white;
		}
	#tabl{
	height:100px;
	top:50px;
	font-weight:bold;
	border:1px groove green;
	background-color:teal;
	color:yellow;
	font-size:14px;
	text-align:center;
	/*box-shadow:5px 5px 5px 5px #99ff33;*/}
	#style2{background-color:yellow;align:center;color:blue;font-weight:bold;text-align:center;}
	</style>
	</head>
	<body>
	<div style="position:absolute;left:270px;font-size:18px;top:160px;z-index:10;color:red;">
	<p>
	Please take a print out of this application, sign and submit to HH representative to process your request.
	</p>
	</div><br><br>

	<div id="view">
		<!--<h1 style="background-color:orange;color:blue;font-weight:bold;width:300px;text-align:center;margin-left:350px;box-shadow:2px 2px 2px 2px green;">Thank You for your concern.</h1>-->
		<h3 style="text-align:center;"><u>I NEED HELP DECLARATION</u></h3>
		<p style="margin-left:20px;font-size:18px;">
		To<br>
		The Chairperson,<br>
		Helping Hands,<br>
		RGU-IIIT-Nuzvid,<br>
		Krishna District.<br><br>
		Respected Sir,<br>
			<p style="margin-left:80px;font-size:18px;">SUBJECT:<br>
			&nbsp;&nbsp;&nbsp;I,<b>'.$nname.'</b> student of Batch <b>'.$nbatch.'</b>requesting Helping Hands
			to address my problem mentioned here.<br><br>
			&nbsp;&nbsp;&nbsp;My problem is :'.$npblm.'<br>
			<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanking you sir,<br>

			My Details:<br>

			</p>
		<div id="new_details" style="display:block;">
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
 <p style="font-size:18px;">&nbsp;&nbsp;&nbsp;I here by declared that the above mentioned information is true up to my knowledge.<br></p>
 <h5 style="margin-left:20px;">Place: </h5>
  <h5 style="margin-left:20px;">Date: </h5>
	<p style="margin-left:800px;font-size:18px;">
		Yours obediently,<br>('.$name.').</p>
		<br><br><script languge="Javascript"></script>
</div></div><br><br></body></html>';
echo $html;/*
$date = date('d-M-Y');
$mpdf=new mPDF('','A4','','',15,15,20,20,5,5);
$mpdf->SetDisplayMode('fullpage');
$mpdf->useSubstitutions = true;
$mpdf->WriteHTML($html);
$mpdf->Output($name."_".$date.".pdf","D");
	*/
?>


