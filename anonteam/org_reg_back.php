<!DOCTYPE HTML>

<script>
function dothis()
{
var id=$("#uid").val();
var batch="";

if(id.indexOf("N14")==0)
	batch="PUC1";
else if(id.indexOf("N13")==0)
	batch="PUC2";
/*
else if(id.indexOf("N12")==0)
	batch="E1";
else if(id.indexOf("N11")==0)
	batch="E2";
else if(id.indexOf("N10")==0)
	batch="E3";
else if(id.indexOf("N09")==0)
	batch="E4";*/
else
	batch="";
var str="";
if(id.indexOf("N14")==0 || id.indexOf("N13")==0)
	{
	str+="<select id='cluster'><option value='kappa'>Kappa</option><option value='lamda'>Lamda</option><option value='mue'>Mue</option><option value='omega'>Omega</option></select><select id='clusterno'><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option><option value=6>6</option><option value=7>7</option><option value=8>8</option><option value=9>9</option><option value=10>10</option><option value=11>11</option><option value=12>12</option></select><br>";
	str+="Name <input type='text' id='uname' name='uname' ><br>Password<input type='password' name='upwd' id='upwd' ><br>Confirm Password<input type='password' id='cupwd' name='cupwd' ><br>Contact No.<input type='text' maxlength=10 id='uph' name='uph' ><br>Email <input type='email' id='uemail' name='uemail' ><select id='usq'><option value='favc'>Fav Color</option><option value='favb'>Fav Book</option><option value='bf'>Best Friend name</option><option value='favsub'>Fav Subject</option><option value='favp'>Fav Place</option></select><br>Answer<input type='text' name='sqa' id='sqa' ><Br><button onclick='register()'>Register</button>";
	


	}




$("#add").html(str);

}


</script>



ID NO <input type="text" maxlength=7 id='uid' name='uid' onkeyup="dothis()" />
<div id='add'></div>



<?php
?>
