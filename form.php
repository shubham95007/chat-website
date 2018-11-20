<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
		<title>online job portal</title>
		<link href="new_f.css" type="text/css" rel="stylesheet">
         	
<script src='insert.js'></script>
	</head> 

    <body bgcolor="#faf0e6">
		<div class="parent">
	
			<div class="header" style="text-align:center;">
				
	

			</div>
			
			
				<div class="body_container">
		
			<div class="left_navigation">
				</div>
				
				<div class="body"> 
					<?php
				if(isset($_SESSION["message"])&&!empty($_SESSION["message"]))
				{
				 echo $_SESSION["message"];
				 unset($_SESSION["message"]);
				}
				
				?>				
					<form action="database.php" method="POST" id='myform' onsubmit="return validation1();">
					<label>First_name</label>
					<input type="text" name="f_name" id='fname'><br>
					<label>Last_name</label>
					<input type="text" name="l_name" id='l_name'><br><br>
					<label>Gender</label>
					<input type="radio" name="gender" value="m" id='gender1'>Male
					<input type="radio" name="gender" value="f" id='gender2'>Female<span id="gender" style="color:red"></span><br><br>
					<label>Age</label>
					<input type="text" name="Age" id='Age'><br>
					<label>Email</label>
					<input type="email" name="email" id='email'><br>
			        <label>password</label>
					
					<input type="password" name="passwo" id='passwo'><br>
					
					
					
					
					<input type="submit" value="submit" id='insert' style="margin-left:38%"><br><br>
					<p id='result'></p>
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