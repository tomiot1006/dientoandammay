<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="../Style/Css.css"></link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<title>Ellen Store</title>
</head>

<body>

	<?php
	#header: log in + log out + image home page
	include( "../modules/header.php" );

	#menu nav bar
	include( "../modules/menutop.php" );

	?>



	<div class="container-fluid">
		<br>
		<div id="main">
			<div class="row">

				<?php
				#include( '../modules/menuleft.php' );
				?>

				<!--end menu left-->
				<div class="col-md-8 col-lg-8" id="center">
					<div class="row"></div>
					<br/>

					<!-- Bat dau bai viet -->
					<div class="col-md-12 col-lg-12">
						<div style="text-align: justify">
							<!-- Tieu de Bai viet -->
							<div>
								<h3>
									<?php
									include( '../modules/config.php' );

									$idbaiviet = $_GET[ 'idbaiviet' ];
									$sql = "select * from baiviet where idbaiviet = '$idbaiviet'"; // post id bai viet vao day
									$result = $conn->query( $sql );
									$row = $result->fetch_assoc();
									echo $row[ 'tieude' ];
									?>
								</h3>
							</div>
							<hr></hr>

							<hr/>
							<!-- Noi dung bai viet -->
							<div>
								<?php
								echo( $row[ 'noidung' ] );
								?>
							</div>
							<hr></hr>

							<!-- 								Video bai viet -->
							<div style="display: block;">
								
							</div>


							<!-- Ket thuc video -->
						</div>
					</div>


					<!-- Ket thuc bai viet -->

					<!-- Like va share bai viet -->
					<div class="row">
						<div class=" col-md-6 col-lg-6">
							<!--<h4>Bạn có thích bài viết này không ?!</h4>
						</div>
						<div style="float: right;" class=" col-md-3 col-lg-3">
							<button class="btn btn-info">
									<i style="font-size: 24px; margin-right: 2px;"
										class="fa fa-thumbs-o-up"></i> 69K
								</button>
						



							<button class="btn btn-info">
									<i style="font-size: 24px; margin-right: 8px;"
										class="fa fa-thumbs-o-down"></i>96K
								</button>
						</div>-->
						</div>

						<!-- --------------Kết thúc Like va share bai viet -->
						<hr></hr>
						<!-- hien thi comment cua bai viet -->
						<div>
							<!--<div class="col-md-12 col-lg-12" style="padding: 20px;"></div>-->
							<!--<h4>Bình luận của bài viết:</h4>-->

							
						
						</div>
							<hr>

						</div>

						<!--------------------------------- Comment bài viết -->

						<?php
						#include( "../comment/comment.php" );
						?>
						<div class="clear col-lg-12">
							<br></br>
						</div>
						<!-- Kết thúcComment bài viết -->


						<!-- 						Bai viet khác -->
						<hr></hr>
						<?php 
								$sql_randombaiviet="select * from baiviet ORDER BY RAND() limit 3";
								$result = $conn->query( $sql_randombaiviet );
								if ( $result->num_rows > 0 ) {
									while ( $row = $result->fetch_assoc() ) {
								
							?>
						<div class="row">
						
							
							<div style="float: left;" class="col-xs-12 col-sm-12 col-md-12 col-lg-4 ">
								<a href="../chitietbaiviet/ChiTietBaiViet.php?idbaiviet=<?php echo $row[ 'idbaiviet' ]?>"> <img src="<?php echo $row['hinhanh'] ?>" width="100%" height="100%"></img>
							</div>

							<div style="float: right; padding-left: auto;"
								class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
								<h3><?php echo $row["tieude"]; ?></h3>
								</a>
								<div class="rut-gon-nd" style=" text-align: justify;">
								<p ><?php echo $row["noidung"]; ?></p>
								</div>
								
							</div>
						</div>
						<hr></hr>
						<?php
						}
						}
						?>




						<div class="clear">
							<br></br>
						</div>

					</div>
				</div>


			</div>
		</div>
	</div>


	<?php
	include( '../modules/footer.php' );
	?>
</body>

</html>