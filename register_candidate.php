<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
		<title>online job portal</title>
		<link href="style3.css" type="text/css" rel="stylesheet">
		<script type="text/javascript">
	<script type="text/javascript">
	function validation1()
	{
		var firstname=document.getElementById("fname").value;
		var lastname=document.getElementById("l_name").value;
		var email=document.getElementById("email").value;
		
		var password=document.getElementById("passwo").value;
		 
		
		if(firstname=="")
			{
		
			document.getElementById("fname1").innerHTML="PLEASE ENTER FRIST_NAME ";
			return false;
			}
			else
			{
			document.getElementById("fname1").innerHTML=" ";
			}
		if(lastname=="")
			{
			document.getElementById("l_name1").innerHTML="PLEASE ENTER LAST_NAME ";
			return false;
			}
			else
			{
			document.getElementById("l_name1").innerHTML=" ";
			}
		
		
			if(email=="")
			{
			document.getElementById("email1").innerHTML="PLEASE ENTER EMAIL";
				return false;
			}

			if(email.indexOf("@")==0)
			{
				document.getElementById("email1").innerHTML="@ SHOULD NOT BE FIRST";
				return false;
			}
			if(email.indexOf(".")==0)
			{
				document.getElementById("email1").innerHTML="DOT SHOULD NOT BE FIRST";
				return false;
			}
			if(email.indexOf("@")==email.length-1)
			{
				document.getElementById("email1").innerHTML="@ SHOULD NOT BE LAST";
				return false;
			}

			if(email.indexOf("@")!=email.lastIndexOf("@"))
			{
				document.getElementById("email1").innerHTML="@ SHOULD NOT BE REAPET";
		return false;
		}
			else
		{
		document.getElementById("email1").innerHTML="";
		}
	}									
	</script>
	</head> 

    <body bgcolor="#faf0e6">
		<div class="parent">
	
			<div class="header" style="text-align:center;">
					<ul>
						<li><a href="register_organisation.php">register_organisation</a></li>
						<li><a href="register_candidate.php">register_candidate</a></li>
						<li><a href="login_candidate.php">login_candidate</a></li>
						<li><a href="org_login.php">org_login</a></li>
						<li><a href="home.php">home</a></li>
					</ul>
				<h4>log in/register<h4>
				<img src="logo.jpg">
			</div>
			
			<div class="menu_bar">
				<h1><ul>
					
					<li><a href="#">Part time</a></li>
					<li><a href="#">Full time</a></li>
					<li><a href="#">Qualification</a></li>
				</ul></h1>
			</div>
			
				<div class="body_container">
		
			
				<div class="left_navigation">
				<ul>
					<li><a href="#">Upcoming Vacancies</a></li>
					<li><a href="#">comments</a></li>
					<li><a href="#">Top rating</a></li>
					<li><a href="#">recent closing</a></li>
				</ul>
				</div>
				<div class="body"> 
					<?php
				if(isset($_SESSION["message"])&&!empty($_SESSION["message"]))
				{
				 echo $_SESSION["message"];
				 unset($_SESSION["message"]);
				}
				
				?>				
					<form action="dbConnection_candidate.php" method="POST" onsubmit="return validation1();">
					<label>Firsst_name</label>
					<input type="text" name="f_name" id="fname"><span id="fname1" style="color:red"></span><br><br>
					<label>Last_name</label>
					<input type="text" name="l_name" id="l_name"><span id="l_name1" style="color:red"></span><br><br>
					<label>Gender</label>
					<input type="radio" name="gender" value="m" id="gender1">Male
					<input type="radio" name="gender" value="f" id="gender2">Female<span id="gender" style="color:red"></span><br><br>
					<label>Age</label>
					<input type="text" name="Age" id="Age"><span id="Age1" style="color:red"></span><br><br>
					<label>Email</label>
					<input type="email" name="Email" id="email"><span id="email1" style="color:red"></span><br><br>
					<label>Mobile</label>
					
					<input type="password" name="passwo" id="passwo"><span id="passwo1" style="color:red"></span><br><br>
					<label>Address</label>
					
					
					
					<input type="submit" value="submit"><br><br>
					</form>
		
				</div>
				<div class="right_navigation">
				</div>
				</div>
			
			<div class="footer">
				<span>&copy All rights reserved </span>
			</div>
		</div>
		
	</body>	
</html>