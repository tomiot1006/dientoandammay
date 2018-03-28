<?php
include( '../connect/connect.php' );


	$id = $_GET[ 'idbaiviet' ];
	
	$tieudebaiviet = $_POST[ 'suatieude' ];
	$noidungbaiviet = $_POST[ 'suanoidung' ];
	$linkhinhanh = $_POST[ 'sualinkhinhanh' ];
	$linkvideo = "";
	$luotlike='';
	$dislike="";


	$sql = "UPDATE baiviet SET tieude='$tieudebaiviet',noidung='$noidungbaiviet',hinhanh='$linkhinhanh',video='$linkvideo',
	luotlike='$luotlike',dislike='$dislike' WHERE idbaiviet=$id";
	if ( mysqli_query( $conn, $sql ) ) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error( $conn );
	}
	############################################
	#close connection string
	include( '../connect/closeconnect.php' );

	header( 'location:../quantri/QuanTriBaiViet.php' );


?>