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
          
          $res=mysql_query($sql1);
	      $count=mysql_num_rows($res);
		  if($count==1)
		  {
			$_SESSION["message"]="email already exists.";
			header("location:neww.php"); 
		  }	
           else
		   {
              echo $count;
			  header("location:neww.php"); 
		   }			                                                        
		$email=$_POST["email"];  
		$first_name=$_POST["f_name"];
		$last_name=$_POST["l_name"];
		$password=$_POST["passwo"];
		
		
		$gender=$_POST["gender"];
		$age=$_POST["age"];
		{
		
		$sql="INSERT INTO candidate (first_name,last_name,email,pass,gender,age) 
		VALUES ('".$first_name."','".$last_name."','".$email."','".$password."','".$gender."','".$age."')";
	    
		$res=mysql_query($sql);
		if($res)
		{
		$_SESSION["message"]="Sign up successfull..click to login";
			header("location:form.php");
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
