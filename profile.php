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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>chat
	</title>

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
<link rel="stylesheet" type="text/css" href="stylo.css">          <!-- ************css included************* -->
  </head>

  <body>
    
   
    <div class="container">

 


 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="inactive"><a href="home.php">Home</a></li>
     <li class="active"><a href="profile.php">Profile</a></li>
	 <li class="inactive"><a href="logout.php">Logout</a></li>
    </ul>
  </div>
   </nav> 


 
    <div class="row" style="margin-top:8%">
  <div class="col-md-12 col-xs-12 col-lg-12 ">
        
 <?php
            if(isset($_SESSION["signed_user"])&&!empty($_SESSION["signed_user"]))
                  {
                  $user=$_SESSION["signed_user"];
				  
				  require_once("dbConnection.php");
						$sql = "SELECT * FROM candidate where id=$user";
						
						$res = mysqli_query($conn,$sql);
						while($data= mysqli_fetch_assoc($res))
						{
							echo "<br><h4 style='color:black'>Name:".$data["first_name"]." ".$data["last_name"]."<br><br>
							Email:".$data["email"]."<br><br>contact:".$data["mobile"]."<br><br>Gender:".$data["gender"]."<br><br>
							Date of birth:".$data["bday"]."<br><br><br><a href='after_signing.php' style='color:black;text-decoration:none;margin-left:42%;font-size:30px
							;font-family:verdana' class='button'>Chat Now</a></h4>"; 
						}
				  }	
?>				  
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
    y: Math.random() * 8
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 1500, // random duration
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