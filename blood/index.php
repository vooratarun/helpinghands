<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Blood Details for Helping Hands</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
     <script type="text/javascript">
	function validate(){
		var uname = document.getElementById("idno").value;
		if (uname == "" || uname== null){
			alert("Please Enter Your Username...");
			return false;
		}
		
		var pwd = document.getElementById("pwd").value;
		if (pwd == "" || pwd== null){
			alert("Please Enter Your Password...");
			return false;
		}
			return true;
	}
	</script>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="logincheck.php" method="post">
          <h2 class="form-signin-heading">Blood Details Registration</h2>
        <input type="text" class="input-block-level" name="idno" id="pwd" placeholder="Universtiy ID NO" maxlength="7">
        <input type="password" class="input-block-level" name="pwd" id="pwd" placeholder="Helping Hands Password">
        
        <button class="btn btn-large btn-primary" type="submit" onclick="return validate();">Login to Enter </button>
      </form>

    </div> <!-- /container -->

    <

  </body>
</html>
