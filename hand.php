<html><head>
<style type="text/css">
    body{
       			text-align:justify;

}
@font-face{
    font-family:andlso;
    src:url('./css/fonts/andlso.ttf');
}
@font-face{
    font-family:algerian;
    src:url('./css/fonts/alger.ttf');
}
@font-face{
    font-family:Adobe Gothic Std;
    src:url('./css/fonts/AdobeGothicStd-Bold.otf');
}</style>	       <link href="./css/home1.css" rel="stylesheet">
</head>
		<title>HH : I need Help
		</title>
		<script type="text/javascript">
			function validate(){
				if(document.getElementById("name").value.length<=1){
							alert("Please provide ur name");
							return false;
							}
						
				if(document.getElementById("iid").value.length<=1){
					alert("Please Enter your id");
					return false;
				}
				if(document.getElementById("phone").value.length<=9){
					alert("Please provide your phone no!!");
					return false;
				}
				if(document.getElementById("dorm").value.length<=3){
					alert("Please provide your dorm no!!");
					return false;
				}
				var x,y,z,k,l,m;
				x=document.getElementById("fname").value.length;
				if(x<=1){
					alert("Please enter your father name");
					return false;
					}
				y=document.getElementById("occ").value.length;
				if(y<=1){
					alert("Please enter Occupation");
					return false;
					}
				z=document.getElementById("pblm").value.length;
				if(z<=1){
					alert("Please describe your problem");
					return false;
					}
				k=document.getElementById("income").value.length;
				if(k<=1){
					alert("Please enter your income");
					return false;
					}
				l=document.getElementById("ration").value.length;
				if(l<=1){
					alert("Please enter your ration card no");
					return false;
					}
				m=document.getElementById("address").value.length;
				if(m<=1){
					alert("Please enter your address");
					return false;
					}
				}
			
		</script>
		<style rel=stylesheet type=text/css>
				
		</style>
	</head>
	<body style="background:#ffffff;">
		<div id="de12" style="background:#ffffff;">
    <div style="text-align:center;color:#903;font-size:24px;font-family:Adobe Gothic Std;">I Need Help</div><br>
<p style="font-size:19px;font-family:andlso;text-align:left;color:#000000;text-align:justify;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This column is strictly dedicated to address the problems of people who don’t have a direct approach with the Representatives of Helping Hands. In this column, we provide a direct platform to report your problem. Helping Hands tries to provide a solution for your problems as soon as possible.
				</p>
				<p style="font-size:19px;font-family:andlso;text-align:left;color:#000000;text-align:justify;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please provide the required information through this forum. If you are not a member of RGUKT you can skip University details by entering zero in fields.</p>
				
				<form action="etrial.php" method="POST" enctype="multipart/form-data">
					
					<table style="font-weight:bold;"colspan="3px">
						<tr><td colspan=2 id='head' align="center"><h4 style="text-align:center;font-family:andlso;color: #0080C0;font-size:19px;text-align:left;"><u>UNIVERSITY DETAILS</u></h4></td></tr>
						<tr>
							<td style='width:300px;'>Name of Person:</td><td><input type=text id='name' name='name'></td>
						</tr>
						<tr>
							<td >ID:</td><td><input type=text name=iid id=iid onblur="return jav()"></td>
						</tr>
						<tr>
							<td>Select your <b>batch:</b></td><td><select  name=batch id=batch style="width:150;">
							<option selected="selected">Select</option>
							<option>PUC-I</option>
							<option>PUC-II</option>
							<option>E1</option>
							<option>E2</option>
							<option>E3</option>
							<option>M.Tech</option>
							</select></td>
						</tr>
						<tr><td>Branch:</td><td><select style="width:150;" name=branch id=branch><option selected="selected">None</option>
						<option>CHEM</option>
						<option>CE</option>
						<option>CSE</option>
						<option>ECE</option>
						<option>ME</option>
						<option>MME</option>
						<option>M.Tech-I</option>
						<option>M.Tech-II</option>
						</select></td></tr>
						<tr><td>Class:</td>
						<td><select name=block id=block style="width:150px;">
							<option selected="selected">Select</option>
							<option value="K">Kappa</option>
							<option value="L">Lambda</option>
							<option value="O">Omega</option>
							<option value="M">Mue</option>
							<option>CG</option>
							<option>CF</option>
							<option>CS</option>
							<option>CT</option>
							<option>SG</option>
							<option>SF</option>
							<option>SS</option>
							<option>ST</option>
							<option>A2-G</option>
							<option>A2-F</option>
							<option>A2-S</option>
							<option>A2-T</option>

						</select></td>
						<td><select name=no id=no style="width:100px;">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						</select></td>
						</tr>
						<tr>
						<td>Gender</td>	<td><input type=radio name=gen value="M"> &nbsp;Male&nbsp; &nbsp;<input type=radio  name=gen value="F"> &nbsp;Female</td>
						</tr>
						<tr><td>Dorm:</td><td><input type=text name=dorm id=dorm></td></tr>
						<tr><td colspan=2 ID='head'><h4 style="font-family:andlso;color: #0080C0;font-size:19px;text-align:left;"><u>PERSONAL DETAILS</u></h4></td></tr>
						<tr><td>Name of Father(/Guardian/Mother): </td><td><input type=text name=fname id=fname></td></tr>
						<tr><td>Occupation :</td><td><input type=text name=occ  id='occ' placeholder='specify'></td></tr>
						<tr><td>Annual Income:</td><td><input type=text name=income id='income'></td></tr>
						<tr><td>Ration card no:</td><td><input type=text name=ration id='ration'></td></tr>
							<tr>
							<td>Contact number:</td>
							<td><input type=text name=phone id=phone></td>
						</tr>
						<tr><td>Describe your problem</td>
						<td><textarea name=pblm id='pblm' cols=40 rows=4></textarea></td>
						</tr>
						<tr><td>Native Address: </td>
						<td><textarea name=address id='address' cols=40 rows=4></textarea></td>
						</tr>
						<tr>
						   <td >
							   Upload files(NAME(or ID).zip format) :
						   </td>
						   <td>
							   <input type=file name=file>
		                  </td><td>(Required Documents)</td>
		               </tr><tr><td> </td></tr>
						<tr>
							<td></td>
							<td><input  id="but" type="submit" onclick="return validate()" value="Submit">
						<input type="reset" id="but"></td>
						</tr>
					</table>
				</form>
				</center>
				</div>
                                </body>
</html>
