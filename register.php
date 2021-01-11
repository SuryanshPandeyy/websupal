<?php
include 'conn.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css"/>
    <style>
    html{
        height: 100%;
        background: linear-gradient(135deg,red,blue) no-repeat;
    }
    </style>
</head>
<body>
<div class='register'>
<?php 
if (isset($_SESSION['id'])){
	header("Location:home.php?loggedin");
} else {

echo "
<form class='reg_form' method='POST' action='register_auth.php'>

    <label for='fname'>Firstname: </label>
    <input id='fname' name='fname'/>
    <label for='lname'>Lastname: </label>
    <input id='lname' name='lname'/>
    <p>
    <p>
    <label for='email'>Username: </label>
    <input id='username' name='username'/>
    </p>
    <p>
    <label for='email'>Email: </label>
    <input type='email' id='email' name='email'/>
    </p>
    <p><label for='pass'>Password: </label>
    <input type='password' id='pass' name='pass'/>
    </p>
    <p>
    <input class='reg_submit' type='submit' value='Register' name='submit'/>
    </div>
    </p>
</form>";
}

?>
<div class="reg_btn">
<input onclick="location.href='login.php'" type="submit" value="Login"/>
<input onclick="location. href='index.php'" type="submit" value="Home"/>
</div>
</div>

</body>
</html>