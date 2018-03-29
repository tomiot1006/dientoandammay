<?php
$servername =  null;
//$host =;
$username = "root";
$password = "";

$dbname = "ellenstore";
$socket = "/cloudsql/avian-bricolage-197005:asia-south1:tomiot8485";
$conn = mysqli_connect($servername, $username,$password, $dbname,null,$socket);
mysqli_set_charset($conn,"utf8");
	
if (!$conn) {
	die("Connection failed: " . $conn->connect_error);
	exit();
}
else
	echo "Ket noi thanh cong";
?>
