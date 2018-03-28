<?php
session_start();
include( '../connect/connect.php' );

if ( isset( $_POST[ 'action' ] ) && $_POST[ 'action' ] == "login") {
	$username = $_POST[ 'username' ];
	$password = $_POST[ 'password' ];

	$sql = "select * from khachhang where email = '$username' and matkhau = '$password' limit 1";
	$query = mysqli_query( $conn, $sql );
	$nums = mysqli_num_rows( $query );

	if ( $nums > 0 ) {
		
		$_SESSION["dangnhap"] = $username;
		echo 'Yes';
		
	} else {	
		echo 'No';	
	}
}
if(isset($_POST['action']) && $_POST['action']=="logout"){
	unset($_SESSION["dangnhap"]);	
}

?>