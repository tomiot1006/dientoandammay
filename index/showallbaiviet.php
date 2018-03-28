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
	<title>Ellen Store</title>
</head>

<body>

	<?php
	#header: log in + log out + image home page
	include( "../modules/header.php" );

	#menu nav bar
	include( "../modules/menutop.php" );

	?>



	<div class="container-fluid"><br>
		<div id="main">
			<div class="row">

				<div class="col-md-8 col-lg-8" id="center">


					<!-- demo trang hiển thị tất cả tin tức -->

					<?php

					// Bước 2: Tính tổng $totalRecords
					$query_pg = "SELECT count(*) AS totalRecords FROM baiviet ";
					$result = $conn->query( $query_pg );
					$row = $result->fetch_assoc();

					$totalRecords = !empty( $row ) ? $row[ 'totalRecords' ] : 0;
					// Bước 3: Lấy $currentPage và thiết lập $recordPerPage
					$currentPage = isset( $_GET[ 'page' ] ) && ( int )$_GET[ 'page' ] > 0 ? ( int )$_GET[ 'page' ] : 1;
					// Thiết lập số records/1 trang
					$recordPerPage = 12;
					// Thiết lập số trang
					$pageNum = 4;
					// Khoảng lùi và tiến danh sách trang
					$numLink = floor( $pageNum / 2 );

					// Bước 4: Tính tổng số trang($totalPage) và tính $offset
					$totalPage = ceil( $totalRecords / $recordPerPage );
					// Tính $offset
					$offset = ( $currentPage - 1 ) * $recordPerPage;
					$limit = "LIMIT $offset,$recordPerPage";


					$sql_sp = "SELECT * FROM baiviet order by idbaiviet desc $limit";
					$query3 = $conn->query( $sql_sp );
					$count = $query3->num_rows;

					?>
					<?php
					if ( $count > 0 ) {

						while ( $dong_sp = $query3->fetch_assoc() ) {
							?>
					<!-- Xu ly lay tieu de trong database cho hien thi record ra day-->
					<div class="row">
						<div><br/>
						</div>
						<div class="col-lg-4">
						<a href="../chitietbaiviet/ChiTietBaiViet.php?idbaiviet=<?php echo $dong_sp[ 'idbaiviet' ]?>">	
						
						
						<img src="<?php echo $dong_sp['hinhanh'];?>" width="100%" height="100%"/>
						
							
						</div>
						<div class="col-lg-8">

						<Strong> <?php
							echo $dong_sp['tieude'];
						?></Strong></a>
					
								



							<div class="rut-gon-nd" style=" text-align: justify;">

								<?php echo $dong_sp["noidung"];?>


							</div>

						</div>

					</div>
					<hr>
					<?php
					}
					}
					?>


					<!-- Ket thuc 1 tieu de bai viet-->
				
					<br/>
				

					<ul class="pagination float-right">
						<?php
						// Button trang trước
						if ( $currentPage > 1 && $totalPage > 0 ) {
							/* echo '<a href="index[nc].php?page='.($currentPage-1).'&t='.time().'">&larr;</a>';*/
							echo( '<li class="page-item"><a class="page-link" href="?page=' . ( $currentPage - 1 ) . '">Previous</a>
			</li>' );
						}
						// Danh sách trang
						if ( $currentPage >= $pageNum ) {
							$pageStart = $currentPage - $numLink;
							if ( $totalPage > $currentPage + $numLink ) {
								$pageEnd = $currentPage + $numLink;
							} else if ( $currentPage <= $totalPage && $currentPage > $totalPage - ( $pageNum - 1 ) ) {
								$pageStart = $totalPage - ( $pageNum - 1 );
								$pageEnd = $totalPage;
							} else {
								$pageEnd = $totalPage;
							}
						} else {
							$pageStart = 1;
							if ( $totalPage > $pageNum )
								$pageEnd = $pageNum;
							else
								$pageEnd = $totalPage;
						}
						// Lặp và in danh sách trang
						for ( $i = $pageStart; $i <= $pageEnd; $i++ ) {
							if ( $currentPage == $i ) {
								echo '<li class="page-item active"><a class="page-link" href="?page=' . $i . '" >' . $i . '</a></li>';
							} else {
								echo '<li class="page-item"><a class="page-link" href="?page=' . $i . '" >' . $i . '</a></li>';
							}

						}

						// Button trang kế tiếp
						if ( $currentPage < $totalPage && $totalPage > 1 ) {

							echo( '<li class="page-item" ><a class="page-link" href="?page=' . ( $currentPage + 1 ) . '">Next</a></li>' );
						}
						?>
		
					</ul>


					<!-- -->
				</div>
				<div class="col-md-2 col-lg-2"></div>
			</div>
		</div>

	</div>
	<hr>
	<br>

	<?php
	include( "../modules/footer.php" );
	?>
</body>

</html>