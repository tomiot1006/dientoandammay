<?php
$sql = "select * from baiviet order by idbaiviet";
$result = $conn->query( $sql );
?>

<table class="table table-responsive">
	<thead>
		<tr>
			<th>Tiêu đề</th>
			<th>Nội dung</th>
			<th ><i style="font-size: 24px;" class="fa fa-image"></i>Hình ảnh
			</th>
			<th><i style="font-size: 24px;" class="fa fa-youtube-play"></i>Video</th>
			
			<th><i style="font-size: 24px;" class="fa fa-thumbs-o-up"></i>
			</th>
			<th>Dislike</th>
			<th><i style="font-size: 24px;" class="fa fa-cogs"></i>Edit</th>
			<th><i style="font-size: 24px;" class="fa fa-trash"></i>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if ( $result->num_rows > 0 ) {
			while ( $row = $result->fetch_assoc() ) {
				?>
		<tr>

			<td>
				<?php echo $row["tieude"]; ?>
			</td>
			<td>
				<?php echo "Chọn chỉnh sửa để xem nội dung bài viết" ?>
			</td>
			<td>
				<?php echo $row["hinhanh"]; ?>
			</td>
			<td>
				<?php echo $row["video"]; ?>
			</td>
			<td>
				<?php echo $row["luotlike"]; ?>
			</td>
			<td>
				<?php echo $row["dislike"]; ?>
			</td>
			<td>
			<a href="../baiviet/suabaiviet.php?idbaiviet=<?php
				echo $row['idbaiviet']; ?>"><i class="fa fa-cog" aria-hidden="true"></i></a>
			</td>
			<td><a href="../baiviet/xoabaiviet.php?idbaiviet=<?php
				echo $row['idbaiviet']; ?>"><i style=" color: red"
										class="fa">&#xf00d;</i></a>
			</td>
		</tr>
		<?php
		}
		} else {
			echo "0 results";
		}
		$conn->close();
		?>

	</tbody>
</table>