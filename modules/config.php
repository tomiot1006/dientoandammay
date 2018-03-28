<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ellenstore";

$conn = mysqli_connect($servername, $username,$password, $dbname);
mysqli_set_charset($conn,"utf8");
	
if (!$conn) {
	die("Connection failed: " . $conn->connect_error);
	exit();
}

?>
