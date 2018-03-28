<?php
include( '../connect/connect.php' );

if ( isset( $_POST[ 'them' ] ) ) {
	$stmt = $conn->prepare( "INSERT INTO baiviet (tieude, noidung, hinhanh,video,luotlike,dislike)
    VALUES (?,?,?,?,?,?)" );
	# s: string, i: int, d: double
	$stmt->bind_param( "ssssii", $tieudebaiviet, $noidungbaiviet, $linkhinhanh, $linkvideo, $luotlike, $dislike );
	$tieudebaiviet = $_POST[ 'tieudebaiviet' ];
	$noidungbaiviet = $_POST[ 'noidungbaiviet' ];
	$linkhinhanh = $_POST[ 'linkhinhanh' ];
	$linkvideo = "";
	$luotlike = 0;
	$dislike = 0;

	#execute query
	$stmt->execute();
	#close statement
	$stmt->close();

	############################################
	#close connection string
	include( '../connect/closeconnect.php' );

	header( 'location:../quantri/QuanTriBaiViet.php' );

} 
?>