<?php
$sql_loaisp = "Select * from danhmuc";
$query1 = $conn->query( $sql_loaisp );
?>
<div class="col-md-2 col-lg-2" id="left">
	<!--begin menu left-->
	<div class="row">
		<div class="col-md-12 col-lg-12" id="menuleft">

			<button class="dropbtn">DANH MỤC SẢN PHẨM</button>
			<ul>
				<?php
				if ( $query1->num_rows > 0 ) {

					while ( $dong_sp = $query1->fetch_assoc() ) {
						?>
				<li>
					<a href="../Tatcasanpham/Tatcasanpham.php?iddanhmuc=<?php echo $dong_sp['iddanhmuc']?>&ac=xem">
						<?php echo $dong_sp['tendanhmuc']?>
					</a>
				</li>
				<?php
				}
				}
				?>
				<!--				<li><a href="#">Quần</a>
				</li>
				<li><a href="#">Váy</a>
				</li>
				<li><a href="#">Set</a>
				</li>
				<li><a href="#">Thời trang dạo phố</a>
					<ul class="sub-menu">
						<li><a href="#">Áo1aaaaaa</a>
						</li>
						<li><a href="#">Áo2aaaaaa</a>
						</li>
					</ul>
				</li>
				<li><a href="#">Thời trang dạ tiệc</a>
					<ul class="sub-menu">
						<li><a href="#">Áo1aaaaaa</a>
						</li>
						<li><a href="#">Áo2aaaaaa</a>
						</li>
					</ul>
				</li>-->
			</ul>

		</div>
	</div>
</div>