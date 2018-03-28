<?php

include('../connect/connect.php');
$id = $_GET[ 'idbaiviet' ];

// sql to delete a record
$sql = "DELETE FROM baiviet WHERE idbaiviet='$id'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


include('../connect/closeconnect.php');

header( 'location:../quantri/QuanTriBaiViet.php' );

?>