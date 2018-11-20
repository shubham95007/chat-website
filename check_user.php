<?php
	session_start();
	require_once("dbConnection.php");
	$sql="SELECT id FROM candidate WHERE email='".$_POST["email"]."' AND pass='".$_POST["pass"]."'";
	$res=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);
	$data=mysqli_fetch_assoc($res);
	if($count==1)
	{
		$_SESSION["signed_user"]=$data["id"];
		
		header("location:profile.php");
	}
	else
	{
		$_SESSION["message"]="Invalid Login " .mysqli_error();
		echo $count;//header("location:home.php");
		}
?>