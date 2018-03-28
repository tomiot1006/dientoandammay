<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ellenstore";

// Create connection
$conn =  mysqli_connect( $servername, $username, $password, $dbname );
if ( !$conn ) {
	die( "Connection failed: " . mysqli_connect_error() );
}

#set unicode vietnamese
mysqli_set_charset( $conn, "utf8" );
?>