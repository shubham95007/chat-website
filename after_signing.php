<?php
session_start();
if( !isset($_SESSION["signed_user"]) ){
    header("location:home.php");
    exit();
}
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
<link rel="stylesheet" type="text/css" href="stylo.css">          <!-- ************css included************* -->
  </head>

  <body>
    
   
    <div class="container">
	
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
	       <li class="active"><a href="home.php"><span class="glyphicon glyphicon-user" ></span></a></li>
			  <li class="active" style="border-right:1px solid black">	<a href="#"><span>		   <?php
					if(isset($_SESSION["signed_user"])&&!empty($_SESSION["signed_user"]))
						  {
						  $user=$_SESSION["signed_user"];
						  
						  require_once("dbConnection.php");
								$sql = "SELECT * FROM candidate where id=$user";
								$res = mysqli_query($conn,$sql);
								while($data = mysqli_fetch_assoc($res))
								{
									echo "<h4 style='text-align:center; color:black; display:inline'>".$data["first_name"]."  ".$data["last_name"]." </h4>"; 
								}
						  }
						  ?></a></li>
						  
						  
				 <li class="inactive"><a href="home.php"><span class="glyphicon glyphicon-home" ></span></a></li>
			 <li class="inactive" style="border-right:1px solid black"><a href="home.php">Home</a></li>
			  <li class="inactive" style="border-right:1px solid black"><a href="profile.php">Profile</a></li>
			  <li class="inactive" style="border-right:1px solid black"><a href="logout.php">Logout</a></li>
    </ul>
   </div>
</nav> 

 
    <div class="row">
  <div class="col-md-6 col-xs-6 col-lg-6 ">
        
      
 </div>
 </div>
 
 
 
   <div class="col-md-6 col-xs-6 col-lg-6 " style="margin-left:0%;margin-top:10%;">
   <div class="form" style="min-width:90%;width:auto;" id="style-1">
  <h3 style="text-align:center; color:black;font-size:35px;font-family:Georgia, serif;">Available users to chat </h3>
  <?php require_once("dbConnection.php");
						$sql = "SELECT * FROM candidate";
						$res = mysqli_query($conn,$sql);
						while($data = mysqli_fetch_assoc($res))
						{
							if($user!=$data["id"])
							echo "<br> <a href='new.php ? user_id=".$data["id"]." ' class='btn btn-info btn-lg' style='width:70%;margin-left:19%;'>
						<span class='glyphicon glyphicon-user' style='' ></span>   ".$data["first_name"]." ".$data["last_name"]." </a>
						 <br>"; 
						}
						
	?>					
   </div>
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
    
	
	   
   <script>
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
    y: Math.random() * 13
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