<?php
function login($mysqli){
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$pass =  mysqli_real_escape_string($mysqli, $_POST['pass']);

$sql = "SELECT * FROM login WHERE email= '$email'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

$sql = "SELECT * FROM login WHERE email= '$email' and password= '$pass'";
$result = $mysqli->query($sql);

if (mysqli_num_rows($result)>0){
    if($row = $result->fetch_assoc()){
$_SESSION['id'] = $row['id'];
$_SESSION['email'] = $row['email'];
$_SESSION['password'] = $row['password'];
header("Location:index.php?loginsuccess");
exit();
    }
}else{
		header("Location:login.php?loginfailed");
		exit();
	}

}
}


?>