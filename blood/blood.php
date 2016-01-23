<?php
include "authenticate.php";
$idno = $_COOKIE['idno'];

if ($idno==""){
    header("Locaiton:index.php");
}
$q="SELECT Name, Class, Branch, batch, Gender FROM iiitn WHERE ID='$idno'";
$result = mysql_query($q,$con);
$row = mysql_fetch_array($result);
$name = $row['Name'];
$class = $row['Class'];
$branch = $row['Branch'];
$batch = $row['batch'];
$gender = $row['Gender'];


print <<<s

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Blood Details</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet">
    <style type="text/css">
       .main{
position:absolute;
top: 5%;
left: 15%;
width:70%;
height: 1000px;
padding: 0px;

border-radius: 3em;
-moz-border-radius: 3em;
-webkit-border-radius: 3em;
-ms-border-radius: 3em;
-o-border-radius: 3em;
box-shadow: 1px 1px 15px 15px white;
-moz-box-shadow: 1px 1px 15px 15px white;
-webkit-box-shadow: 1px 1px 15px 15px white;
-ms-box-shadow: 1px 1px 15px 15px white;
-o-box-shadow: 1px 1px 15px 15px white;

}

#regtable{
 position:absolute;
top: 100px;
left: 13%;
width:700px;
height: 400px;
padding: 10px;
border: 2px #000000 none;

}
#regtable td , input{
padding: 10px;
font-family: "comic sans ms";
font-size:18px;
font-weight:bold;
color:black;
}
.head{
    font-family: "arial black";
    font-size:38px;
    font-weight:bold;
    color: green;
    position: absolute;
    top:2%;
    left:28%;
}
#yesno
{
 display:none;
 position:absolute;
 top:100%;
 left:35%;
}
    </style>
    <script language="javascript" src="jquery.js"></script>
    <script type="text/javascript">
        function validate(){

            var idno=document.getElementById("idno").value;
            if (idno==null || idno=="")
            {
              alert("Please Enter Your idno.");
              return false;
            }
            var name=document.getElementById('name').value;
            if (name=="" || name == null){
                alert("Please Enter Your Name.");
                return false;
            }
             var g=document.getElementById('gender').value;
            if (g=="" || g == null){
                alert("Please Enter Your Gender.");
                return false;
            }
             var cls=document.getElementById('class').value;
            if (cls=="" || cls == null){
                alert("Please Enter Your Class.");
                return false;
            }
             var batch=document.getElementById('batch').value;
            if (batch=="" || batch == null){
                alert("Please Enter Your Batch.");
                return false;
            }
             var branch=document.getElementById('branch').value;
            if (branch=="" || branch == null){
                alert("Please Enter Your Branch.");
                return false;
            }
             var bg=document.getElementById('bg').value;
            if (bg=="" || bg == null || bg=="empty"){
                alert("Please Select Your Blood Group.");
                return false;
            }
             var phno=document.getElementById('mob').value;
            if (phno=="" || phno == null){
                alert("Please Enter Your Mobile Number.");
                return false;
            }
            var pphno=document.getElementById('pmob').value;
            if (pphno=="" || pphno == null){
                alert("Please Enter Your Parent's Mobile Number.");
                return false;
            }
        }
          function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
             return false;
          return true;
       }

        function show_conditions(){
            $("#yesno").slideToggle();
            $("#yesno").css("z-index","10");

        }
        function hide_conditions(){
            $("#yesno").css("display","none");
            //$("#yesno").css("z-index","10");

        }
</script>

  </head>

  <body>
      <div class="main">
          <h2 class="head"><u>Blood Details of IIITN'S</u></h2>
          <table id="regtable">
              <form class="form-signin" action="submit.php" method="post">

              <tr>
                   <td align="left" width="30%">ID NO:</td><td width="70%">  <input type="text" class="input-block-level" name="idno" id="idno" value="$idno" readonly>    </td>
              </tr>
              <tr>
                    <td align="left">Name :</td><td><input type="text" class="input-block-level" name="name" id="name" value="$name" readonly></td>
              </tr>
              <tr>
                  <td align="left">Gender :</td><td><input type="text" class="input-block-level" name="gender" id="gender" value="$gender" readonly></td>
              </tr>
              <tr>
                  <td align="left">Class :</td><td><input type="text" class="input-block-level" name="class" id="class" value="$class" readonly></td>
              </tr>
               <tr>
                  <td align="left">Batch : </td><td><input type="text" class="input-block-level" name="batch" id="batch" value="$batch" readonly ></td>
              </tr>
s;
if ($batch=="P1" || $batch=="P2"){
    echo "";
}  else {
echo <<<s1
                 <tr>
                  <td align="left">Branch :</td><td><input type="text" class="input-block-level" name="branch" id="branch" value="$branch" readonly> </td>
              </tr>
s1;
}
echo <<<p
            <tr>
                  <td align="left">Blood Group :</td>
                  <td>
                      <select name="bg" id="bg">
                          <option value="empty">Select Your Blood Group</option>
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                          <option value="none">Don't Know</option>

                     </select>
                  </td>
              </tr>
              <tr>
                  <td align="left">Mobile Number :</td><td><input type="text" class="input-block-level" name="mob" id="mob" placeholder="Enter Your Mobile Number..." onkeypress="return isNumberKey(event)" maxlength="10"></td>
              </tr>
              <tr>
                  <td align="left">Parent's Number :</td><td><input type="text" class="input-block-level" name="pmob" id="pmob" placeholder="Enter Your Parents Mobile Number..." onkeypress="return isNumberKey(event)" maxlength="10"></td>
              </tr>
              
              <tr>
                  <td colspan="2">Are you willing to donate blood???&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="willing" id="wilyes" value="yes" checked>  Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="willing" id="wilno" value="no">  No </td>
              </tr>
              <tr>
                  <td>&nbsp;</td><td><p onmouseover="show_conditions();" onmouseout="hide_conditions();" style="font-size:14px;">(Please Read this before you select)</p></td>
              </tr>
              <tr>
                    <td colspan="2"><div style="position:absolute;left:40%;width:150px;font-size:18px"><button class="btn btn-lg btn-primary btn-block" onclick="return validate();"  type="submit">Register Me!!!</button></div></td>
               </tr>
            </form>
          </table>
      </div>
      <div id="yesno" style="background-color: grey;padding:10px;border-radius:10px;color:white;"> Conditions : <br>
       1. Student has to go be available at any time.<br>
       2. All the expanses are to be bared by beneficiary, not by the student.<br>
       3. Student has to go any where in the state according to the emergency.<br>
      </div>
  </body>
</html>
p;
?>


