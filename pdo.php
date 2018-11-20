<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=job", $username, $password);
    // set the PDO error mode to exception
     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    

	$email=$_POST["email"];
	$pass=$_POST["pass"];
$stmt = $pdo->prepare('SELECT * FROM candidate WHERE email = ? && pass= ?');
   $stmt->execute([$email,$pass]);
   $count = $stmt->rowCount();
   if($count==1)
	   echo 'sign in successfull';
   else
	   echo 'wrong credential';
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>