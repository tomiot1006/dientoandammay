<?php

include( "config.php" );
if ( !isset( $_SESSION ) ) {
	session_start();
}
$sql_loaisp = "Select * from danhmuc";
$query1 = $conn->query( $sql_loaisp );
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" id="menutop"> 

<!-- <a class="navbar-brand" href="../index/index.php">Ellen</a> -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<!--<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Thời Trang </a>
				<div class="dropdown-menu">
					<?php
					/*if ( $query1->num_rows > 0 ) {

						while ( $loai_sp = $query1->fetch_assoc() ) {
							*/?>
					<a class="dropdown-item" href="../Tatcasanpham/Tatcasanpham.php?iddanhmuc=<?php
					
					/*echo $loai_sp['iddanhmuc']?>&ac=xem">
						<?php echo $loai_sp['tendanhmuc']?>
					</a>
					<?php
					}
					}*/
					?>
				</div>
			</li>-->
			<li class="nav-item"><a class="nav-link" href="../index/showallbaiviet.php">Tin tức</a>
			</li>
			<!--<li class="nav-item"><a class="nav-link" href="#">Sự kiện</a>
			</li>
			<li class="nav-item"><a class="nav-link" href="#">Liên hệ</a>
			</li>-->



			<!--	<li class="nav-item">
				<div>
					<form class="form-inline">
						<div class="input-group">

							<input type="text" class="form-control" placeholder="Search..."/>
							<button class="input-group-addon" type="submit">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						


						</div>
					</form>
				</div>
			</li>-->

		</ul>

		<ul class="navbar-nav ml-auto">


			<?php 
				
			if(isset($_SESSION["dangnhap"])){
				
			?>
			<li class="nav-item dropdown">
				<div data-toggle="dropdown">
					<img class="avatar" src="../uploads/aocotim.jpg"/>
				</div>
				<!--<button type="button" class="btn btn-outline-info  " data-toggle="dropdown"><i class="fa fa-user-circle" aria-hidden="true"></i></button>-->

				<div class="dropdown-menu" id="dropdowninfo">
					<a class="dropdown-item" href="#">Thông tin tài khoản</a>
					<a class="dropdown-item" data-toggle="modal" data-target="#Modal-doi-mk">Đổi mật khẩu</a>
					<a class="dropdown-item" id="logout" href="#">Đăng xuất</a>
				</div>
			</li>

			<?php

			} else {
				if (isset( $_SESSION[ "admin" ])) {
					?>
					<li class="nav-item dropdown">
				<div data-toggle="dropdown">
					<img class="avatar" src="../uploads/aocotim.jpg"/>
				</div>
				<!--<button type="button" class="btn btn-outline-info  " data-toggle="dropdown"><i class="fa fa-user-circle" aria-hidden="true"></i></button>-->

				<div class="dropdown-menu" id="dropdowninfo">
					<a class="dropdown-item" data-toggle="modal" data-target="#Modal-doi-mk-admin">Đổi mật khẩu</a>
					<a class="dropdown-item" id="" href="http://localhost:6969/dientoandammay/quantri/QuanTriBaiViet.php">Quản Lý</a>
					<a class="dropdown-item" id="logout2" href="#">Đăng xuất</a>
				</div>
			</li>
			<?php
			} else {
				?>

			<li class="nav-item ">
				<a class="nav-link" href="http://localhost:6969/dientoandammay/admincp/login.php" ><i class="fa fa-sign-in" aria-hidden="true" style="margin-right: 4px;"></i>Login</a>
			</li>
			<!--<li class="nav-item ">
				<a class="nav-link" href="#"><i class="fa fa-sign-in" aria-hidden="true" style="margin-right: 4px;"></i>Sign In</a>
			</li>-->
			<?php
			}
			}
			?>

		</ul>

	</div>



</nav>

<script>
	$( document ).ready( function () {
		$( '#logout' ).click( function () {
			var action = "logout";
			$.ajax( {
				url: "../modules/xulylogin.php",
				method: "POST",
				data: {
					action: action
				},
				success: function () {

					location.reload();



				}
			} );
		} );
		
		$( '#logout2' ).click( function () {
			var action = "logout";
			$.ajax( {
				url: "../admincp/xulyloginadmin.php",
				method: "POST",
				data: {
					action: action
				},
				success: function () {

					location.replace("../admincp/login.php");



				}
			} );
		} );

	} );
</script>

<div class="container">
	<!-- Modal thêm bài viết-->
	<?php
	
	#include( '../khachhang/khachhangdoimatkhau.php' );
	#include( '../khachhang/khachhanglogin.php' );
	?>
	<!-- end Modal thêm bài viết-->
</div>