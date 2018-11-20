<?php
	session_start();
	require_once("dbConnection.php");
$get=$_POST["friend_id"];
$msg=$_POST["msg"];
$sender_id=$_SESSION["signed_user"];
$sql = "SELECT inbox FROM candidate WHERE id = $get";
$res = mysqli_query($conn,$sql);
//$sql1= "insert into inbox_system values($sender_id,$get,now(),$msg)";
$sql1="INSERT INTO inbox_system (sentBy, sentTo, time, message) VALUES ('$sender_id', '$get',  NOW(), '$msg')";
?>



<?php

					if($msg!="")
					{
						  $res1 = mysqli_query($conn,$sql1);
						
						if($res1)
						{
							$_SESSION["msg"] = "Message sent";
							header("location:new.php");
						}
						else
						{
							$_SESSION["msg"] = "Error occured during message sending".mysql_error();
							header("location:after_signing.php");
						}
					}
					else
						{
							$_SESSION["msg"] = "blank message not permitted";
							header("location:new.php");
						}
?>
