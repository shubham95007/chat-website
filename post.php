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
         
		$post=$_POST["post"];  
		$sql="INSERT INTO candidate (post) VALUES ('".$post."')";
	    
		$res=mysql_query($sql);
		if($res)
		{
		$_SESSION["message"]="Notification successfully posted";
			header("location:guide.php");
		}
		else
		{
		       $_SESSION["message"]="DATA SAVED PROBLEM".mysql_error();
				header("location:guide.php");
		}
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
