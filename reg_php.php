<?php
session_start();
?>
<?php
$conn=mysql_connect("localhost","root","");
if($conn)
{
	$db=mysql_select_db("job");
	if($db)
	{   
          $sql1="SELECT id FROM candidate WHERE first_name='".$_POST["f_name"]."'";
          $res1=mysql_query($sql1);
	      $count=mysql_num_rows($res1);
		 
		  
			 
		  
           		                                                        
		$email=$_POST["email"];  
		$first_name=$_POST["f_name"];
		$last_name=$_POST["l_name"];     
		$password=$_POST["passwo"];
		$c_pass=$_POST["c_passwo"];         
		$mobile=$_POST["mobile"];
		$gender=$_POST["gender"];
		$bday=$_POST["bday"];
		 if($count >= 2)
		  {
			$_SESSION["message"]="email already exists";
			header("location:user_reg.php"); 
		  }	
		  
		if($password != $c_pass)
		{
			$_SESSION["message"]="password doesnt match";		
			header("location:user_reg.php");
		}	
		else{
		
		$sql="INSERT INTO candidate (first_name,last_name,email,pass,mobile,gender,bday) 
		VALUES ('".$first_name."','".$last_name."','".$email."','".$password."','".$mobile."','".$gender."','".$bday."')";
	    
		$res=mysql_query($sql);
		if($res)
		{
		$_SESSION["message"]="$count";
			header("location:user_reg.php");
		}
		else
		{
		       $_SESSION["message"]="DATA SAVED PROBLEM".mysql_error();
				header("location:user_reg.php");
		}}
	}
	else  
	{
	echo "DATA SIDE PROBLEM".mysql_error();
	}
}
else
{
echo "SERVER SIDE PROBLEM".mysql_error();
}

?>
