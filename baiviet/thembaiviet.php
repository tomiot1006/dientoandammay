<div id="myModal" class="modal fade" role="dialog">

<form action="../baiviet/xuly.php" method="post" enctype="multipart/form-data">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title">Tạo bài viết mới</h4>

				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">

				<input class="form-control" width="100%" type="text" name="tieudebaiviet" placeholder="Tiêu đề bài viết.."/>
				<br>
				<textarea class="form-control" width="100%" id="noidungbaiviet" name="noidungbaiviet" placeholder="Nội dung bài viết.." rows="10"></textarea>
				<br>
				<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace("noidungbaiviet");
	</script>
						
				
				<input class="form-control" width="100%" type="text" placeholder="Link hình ảnh" name="linkhinhanh"/>
				<br>
				<!--<input class="form-control" width="100%" type="text" name="linkvideo" placeholder="Link video"/>
				<br>-->

			</div>
			<div class="modal-footer">
				<button type="submit" name="them" class="btn btn-success">Tạo</button>

				<button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
			</div>
		</div>

	</div>
	</form>
</div>