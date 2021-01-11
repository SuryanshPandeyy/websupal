<?php
ob_start();
include 'conn.php';

//Check the form submit
	$fn = $_POST['fname'];
    $ln = $_POST['lname'];
    $un = $_POST['username'];
	$e = $_POST['email'];
	$p = $_POST['pass'];


		$sql = "SELECT email FROM login WHERE email ='$e'";
		$result = $mysqli->query($sql);
		$uidcheck = mysqli_num_rows($result);
		if ($uidcheck >0) {
			header ("Location: register.php?error=email");
			exit();
		}else {
		//Register the user in database
		
	$sql = "INSERT INTO login (fname,lname,username,email,password)  
	VALUES('$fn','$ln','$un','$e','$p')";
			$r = mysqli_query($mysqli,$sql);
		header("Location: index.php?registered");
        }
?>