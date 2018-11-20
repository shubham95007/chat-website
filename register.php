<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<script type="text/javascript">
	function validation1()
	{
		var firstname=document.getElementById("fname").value;
		var lastname=document.getElementById("l_name").value;
		var email=document.getElementById("email").value;
		
		var password=document.getElementById("passwo").value;
		 
		
		if(firstname=="")
			{
		
			document.getElementById("fname1").innerHTML="PLEASE ENTER FRIST_NAME ";
			return false;
			}
			else
			{
			document.getElementById("fname1").innerHTML=" ";
			}
		if(lastname=="")
			{
			document.getElementById("l_name1").innerHTML="PLEASE ENTER LAST_NAME ";
			return false;
			}
			else
			{
			document.getElementById("l_name1").innerHTML=" ";
			}
		
		
			if(email=="")
			{
			document.getElementById("email1").innerHTML="PLEASE ENTER EMAIL";
				return false;
			}

			if(email.indexOf("@")==0)
			{
				document.getElementById("email1").innerHTML="@ SHOULD NOT BE FIRST";
				return false;
			}
			if(email.indexOf(".")==0)
			{
				document.getElementById("email1").innerHTML="DOT SHOULD NOT BE FIRST";
				return false;
			}
			if(email.indexOf("@")==email.length-1)
			{
				document.getElementById("email1").innerHTML="@ SHOULD NOT BE LAST";
				return false;
			}

			if(email.indexOf("@")!=email.lastIndexOf("@"))
			{
				document.getElementById("email1").innerHTML="@ SHOULD NOT BE REAPET";
		return false;
		}
			else
		{
		document.getElementById("email1").innerHTML="";
		}
	}									
	</script>
		
    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
      body
       {
        margin-top: 10px;
       
          }
    </style>
<link rel="stylesheet" type="text/css" href="styl.css">
  </head>

  <body>
    
   
    <div class="container">
<div class="row">
  <div class="col-md-12 col-xs-12 col-lg-12">
  	<div class="header">
         <h1>chat-on</h1>
        </div>
 </div>
</div>  

  <div class="row">
  <div class="col-md-12 col-xs-12 col-lg-12">
    
       <div class="s1 page-heade col-md-12 col-xs-12 col-lg-12"> 
       <ul class="nav nav-pills ">
         <li class="active"><a href="#">Home</a></li>
    	 <li><a href="#">Gallery</a></li>
	 <li><a href="#">Events</a></li>
          <li><a href="#">Contacts</a></li>
       </ul>
       </div>

     
  </div>
</div>
 
    <div class="row">
  <div class="col-md-6 col-xs-6 col-lg-6">
    
      	<?php
				if(isset($_SESSION["message"])&&!empty($_SESSION["message"]))
				{
				 echo $_SESSION["message"];
				 unset($_SESSION["message"]);
				}
				
				?>				
					<form action="dbConnection_candidate.php" method="POST" onsubmit="return validation1();" class="form">
					<label>Frist_name</label>
					<input type="text" name="f_name" id="fname"><span id="fname1" style="color:red"></span><br><br>
					<label>Last_name</label>
					<input type="text" name="l_name" id="l_name"><span id="l_name1" style="color:red"></span><br><br>
					<label>Gender</label>
					<input type="radio" name="gender" value="m" id="gender1">Male
					<input type="radio" name="gender" value="f" id="gender2">Female<span id="gender" style="color:red"></span><br><br>
					<label>Age</label>
					<input type="text" name="Age" id="Age"><span id="Age1" style="color:red"></span><br><br>
					<label>Email</label>
					<input type="email" name="Email" id="email"><span id="email1" style="color:red"></span><br><br>
					<label>Mobile</label>
					
					<input type="password" name="passwo" id="passwo"><span id="passwo1" style="color:red"></span><br><br>
					<label>Address</label>
					
					
					
					<input type="submit" value="submit"><br><br>
					</form>
  </div>
  <div class="col-md-6 col-xs-6 col-lg-6">sfsf
  </div>
</div>  


      
      

     


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    
  </body>
</html>