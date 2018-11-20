<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Add font awesome icons -->

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Chat</title> 

   

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
<link rel="stylesheet" type="text/css" href="stylo.css">  <!-- css included -->
  </head>

  <body>
  
  <div class="container" style="display:block"  >
  
			<nav class="navbar navbar-default " style="overflow;auto">
				  <div class="container-fluid" style="overflow;auto">
					
					<ul class="nav navbar-nav">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-home";style="padding:0%" ></span></a></li>
					  <li class="active" style="border-right:1px solid black"><a href="home.php" >Home</a></li>
					  <li class="inactive"><a href="user_reg.php"><span class="glyphicon glyphicon-plus";style="padding:0%" ></span></a></li>

					  <li class="inactive" style="border-right:1px solid black"><a href="user_reg.php">Register</a></li>
					 
					</ul>
				  </div>
				   </nav>
 
<div class="row" style="margin-top:20%;display:block;overflow-y:scroll";>
   <div class="col-md-12 col-xs-12 col-lg-12">
    <form action="check_user.php"  method="POST" class="form" style="overflow-y:scroll;" id="style-1"> 
		<div class="form-group">
		<label for="email">Email address:</label>
		<input type="email" class="form-control" id="email" name="email">
		</div>
		<div class="form-group column">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="pwd" name="pass">
		</div>
  
		<button type="submit" class="button"><span>Login</span></button>
		<br><br><a href="user_reg.php" style="margin-left:2%; color:black; text-decoration:none" class="hoverOnButton">Don't have an account? Register here</a>

			   <?php
            if(isset($_SESSION["message"])&&!empty($_SESSION["message"]))
                  {
                   echo '<script language="javascript">';
				   $error=$_SESSION["message"];
					echo 'alert("invalid login ")';
					echo '</script>';
                  unset($_SESSION["message"]);
                  }
          ?>

    </form>
   </div>
</div> 
<hr>
 <a href="https://www.facebook.com/Shubhamconnect" class="fa fa-facebook" style="margin-left:35%"></a>
<a href="#" class="fa fa-twitter"></a> 
</div> <!-- /container -->
  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
      <script src="js/docs.min.js"></script>  
   
   
   <script>
   // Some random colors
const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

const numBalls = 40;
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
    y: Math.random() * 15
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
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