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
	
	$fnd_id=$_SESSION["friend_id"];
	$usr_id=$_SESSION["signed_user"];
  // echo $_SESSION["friend_id"];
   $sql2="SELECT  * from inbox_system order by time";
						$res2=mysqli_query($conn,$sql2);
						while($data = mysqli_fetch_assoc($res2))
						{
							if($data["sentBy"]==$usr_id and $data["sentTo"]==$fnd_id)
							{
							echo "<div class='' id='talkbubble'>
							
							       <span style='color:white;margin-left:10%;'> ".$data["message"]." 
								   </span>
							  </div><br>";
							}
							 if($data["sentBy"]==$fnd_id and $data["sentTo"]==$usr_id)
							{
							echo "<div class='container text-centre'id='talkbubble2'>
							         <span style='color:white;margin-left:10%;'> ".$data["message"]." 
								     </span>
								   </div><br>";
							}
							
					     	    
						}  
						echo "<div style='height:150px;'></div>";

?>