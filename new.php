
<?php
	session_start();
	

if( !isset($_SESSION["signed_user"]) ){
    header("location:home.php");
    exit();
}

	require_once("dbConnection.php");
	
	if( isset($_GET['user_id']) )
	{
	    $id = $_GET['user_id'];
		$_SESSION["friend_id"]=$id;
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
<link rel="stylesheet" type="text/css" href="stylo.css"> 
    <title>Chat</title> 
<script>

</script>
   

<style type="text/css">
      body
       {
        margin-top: 10px;
        height:1000px;
          }
    </style>
</head>
    <body bgcolor="#faf0e6" style="overflow:scroll" id="scroll-body" >
		<div class="parent" id="div1" >
		
		
<nav class="navbar navbar-default " style="display:inline-block;margin-bottom:5%;z-index: 999;">
  <div class="container-fluid" style="display:inline-block;">
    
    <ul class="nav navbar-nav" style="display:inline-block;">
	       <li class="active"><a href="home.php"><span class="glyphicon glyphicon-user";style="padding:0%" ></span></a></li>
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

<nav class="navbar navbar-default navbar-fixed-top" style="text-align:centre;
display:inline-block;margin-top:5%;margin-left:30%;background-color:#204060;
width:18%;text-align:centre;border-radius:25px;">
  <div class="container-fluid" style="display:inline-block;text-align:centre;">
    
	  <?php require_once("dbConnection.php");
	       
			      $fndid=$_SESSION["friend_id"];
						$sql2="SELECT first_name,last_name from candidate where id =$fndid";
						$res2=mysqli_query($conn,$sql2);
						while($data = mysqli_fetch_assoc($res2))
						{
							echo "<span class='glyphicon glyphicon-user' 
							style='font-size:20px;color:white;text-align:centre;padding-top:4%;'>
							".$data["first_name"]." " .$data["last_name"]."</span>";
					     	    
						}  
	   ?>
    <ul class="nav navbar-nav" style="text-align:centre" style="display:inline-block;">
      <li class="#" style="text-align:centre">
			<a href="#" style="text-align:centre">
        	 
			   </a>
	   </li>
	 
     
    </ul>
  </div>
</nav>
	
	

	
	<div class="container" style="overflow:scroll;height:100%">
			   <div class="row" style="display:block;margin-top:1%;margin-bottom:3%;height:100%;overflow:scroll;" id="links">
			  <div class="col-lg-6" style="">
			  
                   
				    <?php require_once("dbConnection.php");
					//..................................................................................
					//..............................................................................
					//load here content of load.php using jquery down here in bottom every 5 seconds
					//...............................................................................
                    //.....................................................................................					
					?>
					</div>
				</div>
				
</div>		
		
	
  					
<nav class="navbar navbar-default navbar-fixed-bottom" style="margin-top:20%" style="display:inline-block;height:10px" >
  <div class="container-fluid">
    
    
				
  				
					
	<form action="insert_msg.php" method="POST" style="display:inline-block">
					 <br> <input type="text" placeholder="type your message here" name="msg" rows="10" cols="30" style="margin-left:1%">
                     
					<input type="hidden" name="friend_id" value="<?php echo $_SESSION["friend_id"]  ?>"> 
					
				<button type="submit" class="button">Send</button>
				
			
	</form>
	 <span>	<?php
						if(isset($_SESSION["msg"])&&!empty($_SESSION["msg"]))
						{
						 echo $_SESSION["msg"];
						 unset($_SESSION["msg"]);
						}
						
						
				
				    ?>
</span>					
	 
  </div>
 <span > <button type="hidden" id="submit" class="button" style="display:inline-block;">See recent messages</button></span>
   </nav>
					
				
			
			
			
		
		
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script> 
	</body>	
	<div class="footer" >
				<span> </span>
			</div>
			
<script>
			function loadlink()
			{
				
			
    $('#links').load('load.php',function () {
         $(this).unwrap();
    });
	
	
}

loadlink(); // This will run on page load
setInterval(function(){
    loadlink() // this will run after every 5 seconds
}, 1000);
</script>
   
     
<script>

      $(function(){
       $("#submit").click(function(){
           $('#scroll-body').animate({
               scrollTop: $('#scroll-body')[0].scrollHeight}, "fast");
       });
   });	
  



$('#scroll-body').scrollTop($('#scroll-body')[0].scrollHeight);	

</script>
</div>
</body>
</html>