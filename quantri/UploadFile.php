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
	<title></title>
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
	
	include( '../modules/header.php' );
	include( '../modules/menutop.php' );
	?>


	<div class="container-fluid">
		<br>
		<div id="main">
			<div class="row">
				<?php
				include( '../modules/menuleft-quantri.php' );
				?>
				<!--end menu left-->
				<div class="col-md-8 col-lg-2">
					<?php include('../loadfile/uploadfile.php'); ?>
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

	<!-- -->
	
</body>

</html>