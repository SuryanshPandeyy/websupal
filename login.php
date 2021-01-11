<?php 
session_start();
include 'conn.php';
include 'login_auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="index.css"/>

    <style>
	body{
		background-color:grey;
	}
    </style>

</head>
<body>
<div class="login">
<?php
    echo "<form class= 'login_form' method='POST' action='".login($mysqli)."'>
    <input type='email' id='email' name='email' placeholder='Email' required/>
    <p>
    <input type='password' id='pass' name='pass' placeholder='Password' required/>
    </p>
    <p>
    <input class='login_submit' type='submit' value='login' name='submit'/>
    </p>
    </form>";

?>
<div class="log_btn">
<input onclick="location.href='register.php'" type="submit" value="Register"/>
<input onclick="location. href='index.php'" type="submit" value="Home"/>
</div>
</div>
</body>
</html>