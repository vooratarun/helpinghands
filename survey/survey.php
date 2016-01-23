
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>

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
height: 630px;
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
padding: 1px;
font-family: "times new roman";
font-size:18px;
font-weight:bold;
color:black;
}
.head{
    font-family: "Arial";
    font-size:38px;
    font-weight:bold;
    color: green;
    position: absolute;
    left:30%;
    font-style: underline;
}
    </style>

  </head>

  <body>
      <div class="main">
          <h2 class="head">Health Camp Survey</h2>
          <body>
<?php
include('authenticate.php');
$idno = $_COOKIE['idno'];

$q = "SELECT Name,Gender from usersdata WHERE ID='$idno'" or die(mysql_error());
$result = mysql_query($q);
$row = mysql_fetch_array($result);
if (count($row)==1){
    echo <<<s0
   <script>
       alert("You have not completed Registration. Please complete that first and login for survey...");
       window.location="./reg/index.php"
       </script>
s0;
}
if ($idno== ""){
	header("Location:index.php");
}else{
	echo '<div style="position:absolute;left:150px;top:90px;font-family:times new roman; font-size:20px;color:#606060">Welcome '.$row['Name'].',</div>';
	echo <<<s
            <div style="position:absolute;left:150px;top:140px;font-family:times new roman; font-size:18px;color:#505050">
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are glad to inform&nbsp; you that our &nbsp; RGUKT &nbsp;"HELPING HANDS"&nbsp; is going to<br>
                conduct a Second Edition of <b>MEGA HEALTH CAMP</b> in our campus soon. We would   <br>
                like to arrange the Medical experts provisionally in the following categories.
             </div>
             <form action="submit_survey.php" method="post">
             <div style="position:absolute; top:250px;left:400px;font-family:times new roman; font-size:18px;color:#606060;border:1px">
		<input type="checkbox" name="option1" value="1.SKIN">  1.Skin Problems  <br>
		<input type="checkbox" name="option2" value="2.ENT Problems">  2.ENT Problems<br>
s;
        if($row['Gender']=="F"){
            echo<<<ss
                <input type="checkbox" name="option3" value="3.Gynocology">  3.Gynocology<br>
ss;
        }else{
            echo "";
        }
echo <<<s1
              </div>

            <div style="position:absolute;left:150px;top:360px;font-family:times new roman; font-size:18px;color:#505050">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           We here by requesting you to enroll your self in any of the above categories, to  <br>
           utilize this opportunity.<br><br>
           <b style="color:red;">Note:</b><br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Consultancy is provided for all the students of RGUKT. Prescriptions suggested by <br>
            doctors are to be bought by students only. (Those who are under the daily needs  criteria,<br>
            they can approach to the HELPING HANDS for medicine).
           
          <br><br><br>
          </div>
          <div style="position:absolute;left:350px;top:560px;width:200px">
            <button class="btn btn-lg btn-primary btn-block"  type="submit" size="20">Submit My Survey ! ! !</button>
          </div>
       </form>
s1;

}


?>