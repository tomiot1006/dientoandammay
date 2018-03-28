<?php
/*include( '../connect/connect.php' );
session_start();
if ( isset( $_POST[ 'login' ] ) ) {
	$username = $_POST[ 'username' ];
	$password = $_POST[ 'password' ];

	$sql = "select * from admin where username = '$username' and password = '$password' limit 1";
	$query = mysqli_query( $conn, $sql );
	$nums = mysqli_num_rows( $query );

	if ( $nums > 0 ) {
		$_SESSION[ 'admin' ] = $username;
		header( 'location:../quantri/ThongKeThuNhap.php' );

	} else {

		header( 'location:login.php' );
	}
}*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="../Style/Css.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<title>Login admin</title>
</head>

<body>
	<div class="container" style="padding-top: 60px;">
		<h2 class="text-sm-center">Đăng nhập Admin</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 offset-2">

				<div class="card">
					<div class="card-body">
						<div id="error" class="alert alert-danger">
							<strong>Error!</strong> Tài khoản hoặc mật khẩu sai!
						</div>
						<fieldset class="form-group">
							<label for="username">Tên đăng nhập<span style="color: red;">(*)</span></label>
							<input type="h" class="form-control" name="username" id="username" placeholder="Nhập tên đăng nhập" required>
							<div id="error_tendangnhap" class="alert alert-danger">
								<strong>Error!</strong> Chưa điền tên đăng nhập!
							</div>
						</fieldset>
						<fieldset class="form-group">

							<label for="password">Mật khẩu<span style="color: red;">(*)</span></label>
							<input type="password" name="password" class="form-control" id="password" placeholder="Nhập mật khẩu" required>
							<div id="error_mk" class="alert alert-danger">
								<strong>Error!</strong> Chưa điền mật khẩu!
							</div>
						</fieldset>
						<!--<span class="psw">Forgot <a href="#">password?</a></span>-->
						<input type="submit" class="btn btn-outline-primary btn-block" id="login" value="Đăng nhập" name="login">
						<br>
						<a href="http://localhost:6969/dientoandammay/index/showallbaiviet.php">
							<button style="text-decoration: none" class="btn btn-outline-success btn-block">Quay về trang chủ</button>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
<script>
	$( document ).ready( function () {

		$( "#error" ).hide();
		$( "#error_tendangnhap" ).hide();
		$( "#error_mk" ).hide();
		var error_tendangnhap = true;
		var error_mk = true;
		$( '#username' ).focusout( function () {
			check_input_username();

		} );
		$( '#password' ).focusout( function () {
			check_input_password();

		} );

		function check_input_username() {
			var lenght = $( '#username' ).val().length;
			if ( lenght == 0 ) {
				$( "#error_tendangnhap" ).show();
				error_tendangnhap = true;
			} else {
				$( "#error_tendangnhap" ).hide();
				error_tendangnhap = false;
			}
		}

		function check_input_password() {
			var lenght = $( '#password' ).val().length;
			if ( lenght == 0 ) {
				$( "#error_mk" ).show();
				error_mk = true;
			} else {
				$( "#error_mk" ).hide();
				error_mk = false;
			}
		}

		$( '#login' ).click( function () {
			if ( error_tendangnhap == false && error_mk == false ) {
				var action = "login";
				$.ajax( {
					url: "xulyloginadmin.php",
					method: "POST",

					data: {
						action: action,
						username: $( '#username' ).val(),
						password: $( '#password' ).val(),
					},
					success: function ( data ) {


						if ( data == 'No' ) {
							$( '#error' ).show();
						} else {
							$( '#Modal-login-kh' ).hide();
							location.replace("../quantri/QuanTriBaiViet.php");
						}
					}

				} );
			} else {
				$( "#error_tendangnhap" ).show();
				$( "#error_mk" ).show();
			}

		} );

	} );
</script>

</body>

</html>