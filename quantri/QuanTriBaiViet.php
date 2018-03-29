<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="../Style/Css.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

	<title>Quản trị bài viết</title>
</head>

<style type="text/css">
.header {
		background-color: #f1f1f1;
	}
	
	.cangiua {
		display: block;
		margin-left: 0;
	}
	
	.carousel-inner {
		width: 100%;
		height: 100%;
	}
	
	.clear {
		/*tách biệt content với footer tránh tình trạng dính liền*/
		clear: both;
	}
}

/**/
</style>

<body>

	<?php

	#header: log in + log out + image home page
	include( "../modules/header.php" );

	#menu nav bar
	#include( "../modules/menutop.php" );

	?>

	<div class="container-fluid"><br>
		<div id="main">
			<div class="row">
				<?php
				include( '../modules/menuleft-quantri.php' );
				?>
				<!--end menu left-->
				<div class="col-md-8 col-lg-8" id="center">

					<div class="col-xs-12 col-md-12 col-lg-12">

						<!-- header table và ô search Cell -->
						<div class="row" style="margin-top: 20px;">
							<div class="col-md-4 col-lg-4">
								<h3>Quản trị bài viết</h3>
							</div>

							<div class="col-md-2 col-lg-2">
								<!-- chẳng có gì trong đây cả -->
							</div>

							<div class="col-md-6 col-lg-6">
								<!-- begin modal thêm bài viết -->
								<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
							<i  class="fa fa-plus"></i>
						Thêm bài viết</button>
							


								<!-- Modal thêm bài viết-->
								<?php
								include( '../baiviet/thembaiviet.php' );
								?>
								<!-- end Modal thêm bài viết-->

							</div>

						</div>
					</div>
					<!-- Kết thúc header table và ô search Cell -->
					<div class="clear"></div>
					<div class="col-md-12 col-lg-12">

						<!-- ---------------------------------Bảng quản trị------------------------- -->
						<?php

						include( '../modules/config.php' );

						?>
						<?php
						include( '../baiviet/xembaiviet.php' );
						?>
						<!--Kết thúc Bảng quản trị -->
					</div>

					<div class="clear"></div>
				</div>
			</div>
			<div class="col-md-2 col-lg-2"></div>
		</div>
	</div>

	</div>
	<hr>
	<br>
	<?php
	include( '../modules/footer.php' );
	?>

</body>

</html>