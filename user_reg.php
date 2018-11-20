]<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		
			document.getElementById("fname1").innerHTML="PLEASE ENTER FIRST NAME ";
			return false;
			}
			else
			{
			document.getElementById("fname1").innerHTML=" ";
			}
		  if(lastname=="")
			{
			document.getElementById("l_name1").innerHTML="PLEASE ENTER LAST NAME";
			return false;
			}
			else
			{
			document.getElementById("l_name1").innerHTML=" ";
			}
		
		


			

	}									
	</script>
		
    <title>chat</title>

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
<link rel="stylesheet" type="text/css" href="stylo.css">    <!-- ************css included************* -->
  </head>

  <body style="background-color:#;overflow;auto">
    
   
    <div class="container" style="overflow;auto">
 
				<nav class="navbar navbar-default navbar-fixed-top" style="overflow;auto">
				  <div class="container-fluid" style="overflow;auto">
					
					<ul class="nav navbar-nav">
					<li class="#"><a href="#"><span class="glyphicon glyphicon-home";style="padding:0%" ></span></a></li>
					  <li class="#" style="border-right:1px solid black"><a href="home.php" >Home</a></li>
					  <li class="active"><a href="#"><span class="glyphicon glyphicon-plus";style="padding:0%" ></span></a></li>

					  <li class="active" style="border-right:1px solid black"><a href="#">Register</a></li>
					 
					</ul>
				  </div>
				   </nav>

 
    <div class="row" style="">
  <div class="col-md-12 col-xs-12 col-lg-12" style="margin-top:10%";>
  	<?php
				       if(isset($_SESSION["message"])&&!empty($_SESSION["message"]))
				       {
				        echo "<div class='hover'><a href='home.php' style='text-decoration:none' ><h3 style='text-align: center; color:#ff4d94;'>".$_SESSION["message"]."</h3></a></div>";
				        unset($_SESSION["message"]);
				       }
				?>	
                 <form action="reg_php.php" autofocus method="POST" onsubmit="return validation1();" class="form" style="overflow-y:scroll;" id="style-1">
					<span style="margin-left:19%; color:black;font-size:25px; text-shadow:0.5px 0.5px ;font-family:Times New Roman">Register Here</span><br>
					<br>
					<div class=="form-group">
					<label style="margin-top:0%; margin-left:22%">First name</label><br>
					<input style="margin-left:22%;width:auto" class="form-control" type="text" name="f_name" id="fname" required> <span id="fname1" style="color:red"></span><br><br>
					</div>
					
					<div class=="form-group">
					<label style="margin-left:22%">Last name</label><br>
					<input  style="margin-left:22%;width:auto" type="text" class="form-control" name="l_name" id="l_name" required><span id="l_name1" style="color:red"></span><br><br>
					</div>
					
					<div class=="form-group">
					<label style="margin-left:22%">Email</label><br>
					<input style="margin-left:22%;width:auto" type="email" class="form-control" name="email" id="email" required><span id="email1" style="color:red"></span><br><br>
					</div>
					
					<div class=="form-group">
				    <label style="margin-left:22%">password</label><br>
					<input  style="margin-left:22%;width:auto" type="password" class="form-control" required  name="passwo" id="passwo"><span id="passwo1" style="color:red"></span><br><br>
					</div>
					
					<div class=="form-group">
					<label style="margin-left:22%">Confirm password</label><br>
					<input  style="margin-left:22%;width:auto" type="password" class="form-control" required name="c_passwo" id="passwo"><span id="passwo1" style="color:red"></span><br><br>
					</div>
					
					<div class=="form-group">
					<label style="margin-left:22%">mobile</label><br>
					<input  style="margin-left:22%;width:auto" type="number" class="form-control" required name="mobile" required><span id="passwo1" style="color:red"></span><br><br>
					</div>
					<div class=="form-group">
					<label style="margin-left:22%">Gender</label><br>
				    <input style="margin-left:22%" type="radio" name="gender" value="male" checked> Male<br>
                    <input style="margin-left:20%" type="radio" name="gender" value="female"> Female <br>
                     </div>

					<div class=="form-group">
					<br><label style="margin-left:22%">Date Of Birth</label>
                    <br> <input style="margin-left:22%;width:auto" class="form-control" type="date" name="bday">
					<br><br><button type="submit"   style="margin-left:22%;width:auto;padding:13px;" class="button"><span>Login</span></button><br><br>
					</div				
					
					
				</form>
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
    
	   
   <script>// script for animated balls
   // Some random colors
const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

const numBalls = 80;
const balls = [];

for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("div");
  ball.classList.add("ball");
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
  ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;
  
  balls.push(ball);
  document.body.append(ball);
}

// Keyframes
balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -11 : 11),
    y: Math.random() * 23
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2500, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out"
    }
  );
});

   
</script>   
  </body>
</html>