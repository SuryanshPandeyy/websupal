<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'websupal';
   $mysqli = new mysqli($host,$username,$password,$database);

    if ($mysqli->connect_error) { 
	die('Not connected '.mysqli_connect_error());
	}

	?>