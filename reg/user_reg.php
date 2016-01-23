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

    <title>Registration for Helping Hands</title>

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
padding: 5px;
border: 2px #000000 none;

}
#regtable td , input{
padding: 5px;
font-family: "comic sans ms";
font-size:18px;
font-weight:bold;
color:black;
}
.head{
    font-family: "comic sans ms";
    font-size:38px;
    font-weight:bold;
    color: dodgerblue;
    position: absolute;
    top:2%;
    left:22%;
}
    </style>
    <script type="text/javascript">
        function validate(){

            var idno=document.getElementById("idno").value;
            if (idno==null || idno=="")
            {
                document.getElementById("idno").focus();
              alert("Please Enter Your idno.");
              return false;
            }
            var name=document.getElementById('name').value;
            if (name=="" || name == null){
                document.getElementById('name').focus();
                alert("Please Enter Your Name.");
                return false;
            }
             var g=document.getElementById('gender').value;
            if (g=="" || g == null){
                document.getElementById('gender').focus();
                alert("Please Enter Your Gender.");
                return false;
            }
            var cls=document.getElementById('class').value;
            if (cls=="" || cls == null){
                document.getElementById('class').focus();
                alert("Please Enter Your Class Name.");
                return false;
            }
            var branch=document.getElementById('branch').value;
            if (branch=="" || branch == null){
                document.getElementById('branch').focus();
                alert("Please Enter Your Branch.");
                return false;
            }
             var batch=document.getElementById('batch').value;
            if (batch=="" || batch == null){
                document.getElementById('batch').focus();
                alert("Please Enter Your Batch.");
                return false;
            }
             var mail=document.getElementById('mail').value;
            if (mail=="" || mail == null){
                document.getElementById('mail').focus();
                alert("Please Enter Your Mail-ID.");
                return false;
            }
            var x=document.getElementById('mail').value;
            var atpos=x.indexOf("@");
            var dotpos=x.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
              alert("Not a valid e-mail addreess");
              return false;
            }
             var village=document.getElementById('village').value;
            if (village=="" || village == null){
                document.getElementById('village').focus();
                alert("Please Enter Your village Name.");
                return false;
            }
             var mandal=document.getElementById('mandal').value;
            if (mandal=="" || mandal == null){
                document.getElementById('mandal').focus();
                alert("Please Enter Your mandal name.");
                return false;
            }
            var dist=document.getElementById('dist').value;
            if (dist=="" || dist == null){
                document.getElementById('dist').focus();
                alert("Please Enter Your district name.");
                return false;
            }
            var pin=document.getElementById('pin').value;
            if (pin=="" || pin == null){
                document.getElementById('pin').focus();
                alert("Please Enter Your Pin Code.");
                return false;
            }
             var pwd=document.getElementById('pwd').value;
 
            if (pwd=="" || pwd == null){				
                document.getElementById('pwd').focus();
                alert("Please Enter Your password.");
                return false;
            }
             var rpwd=document.getElementById('rpwd').value;
            if (rpwd=="" || rpwd == null){
                document.getElementById('rpwd').focus();
                alert("Please Re-Enter Your Password");
                return false;
            }
            if (pwd != rpwd ){
                document.getElementById('rpwd').focus();
                alert("Re entered Password does not match..");
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

    </script>

  </head>

  <body>
      <div class="main">
          <h2 class="head"><U>Registration for Helping Hands</U></h2>
          <table id="regtable">
              <form class="form-signin" action="register.php" method="post">

              <tr>
                   <td align="left" width="30%">ID NO:</td><td>  <input type="text" class="input-block-level" name="idno" id="idno" value="$idno" size="7" readonly>    </td>
              </tr>
              <tr>
                    <td align="left">Name :</td><td><input type="text" class="input-block-level" name="name" id="name" value="$name" readonly></td>
              </tr>

               <tr>
                  <td align="left">Gender : </td><td><input type="text" class="input-block-level" name="gender" id="gender" value="$gender" size="1" readonly></td>
              </tr>
              
              <tr>
                  <td align="left">Class :</td><td><input type="text" class="input-block-level" name="class" id="class" value="$class" readonly></td>
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
                  <td align="left">Batch :</td><td><input type="text" class="input-block-level" name="batch" id="batch" value="$batch" readonly></td>
             </tr>
p;
if ( $batch=="E4"){
echo <<<s2
            <tr>
                  <td align="left">Mail-ID :</td><td><input type="text" class="input-block-level" name="mail" id="mail" placeholder="Enter Your Mail-ID."></td>
             </tr>
             <tr>
                <td>&nbsp;</td
              </tr>
             <tr>
                  <td align="left">Permanent Address </td><td>&nbsp;</td>
             </tr>
             <tr>
                  <td align="left">Village : </td><td><input type="text" class="input-block-level" name="village" id="village" placeholder="Enter Your Village Name."></td>
             </tr>
             <tr>
                  <td align="left">Mandal : </td><td><input type="text" class="input-block-level" name="mandal" id="mandal" placeholder="Enter Your Mandal Name."></td>
             </tr>
             <tr>
                  <td align="left">District : </td><td><input type="text" class="input-block-level" name="dist" id="dist" placeholder="Enter Your District Name."></td>
             </tr>
             <tr>
                  <td align="left">Pin Code : </td><td><input type="text" class="input-block-level" name="pin" id="pin" placeholder="Enter Your Village Pin Code." onkeypress="return isNumberKey(event)" maxlength="6"></td>
             </tr>

s2;
}else{
    echo "";
}
echo <<<s3
              <tr>
                  <td align="left">New Password :</td><td><input type="password" class="input-block-level" name="pwd" id="pwd" placeholder="Enter Your New Password."></td>
              </tr>
              <tr>
                  <td align="left">Re-Type Password :</td><td><input type="password" class="input-block-level" name="rpwd" id="rpwd" placeholder="Re-Type Your New Password."></td>
              </tr>
              <tr>
                <td>&nbsp;</td
              </tr>
              <tr>
                  <td></td>  <td><div style="position:absolute;left:45%;width:150px;font-size:18px"><button class="btn btn-lg btn-primary btn-block" onclick="return validate()"  type="submit" width="20">Register Me ! ! !</button></div></td>
               </tr>
            </form>
          </table>
      </div>
  </body>
</html>
s3;
?>
