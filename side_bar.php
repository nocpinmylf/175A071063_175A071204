<!doctype html>
<html lang="en">

<head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/side_bar.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<aside style="top: 66px;">
		<div class="sidebar left">
			<ul class="list-sidebar bg-defoult">
				<li class="header">Mục Chính</li>
				<li>
					<a href="#">
						<i class="fa fa-home" aria-hidden="true"></i> Trang Chủ
					</a>
				</li>
				<li>
					<a href="tracuudiem.php">
						<i class="fa fa-search"></i>
						<span class="nav-label">Tra Cứu Điểm </span>
					</a>
				</li>
				<li>
					<a href="#" data-toggle="collapse" data-target="#qldiem" class="collapsed" aria-expanded="false">
						<i class="fa fa-users"></i>
						<span class="nav-label">Quản Lý Điểm</span>
					</a>
					<ul class="sub-menu collapse" id="qldiem">
						<li><a href="#">Thêm Điểm</a></li>
						<li><a href="#">Sửa Điểm</a></li>
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="collapse" data-target="#quantri" class="collapsed" aria-expanded="false">
						<i class="fa fa-laptop"></i>
						<span class="nav-label">Trang Quản Trị</span>
						<!-- <span class="fa fa-angle-left pull-right"></span> -->
					</a>
					<ul class="sub-menu collapse" id="quantri">
						<li><a href="#"> Static Tables</a></li>
						<li><a href="#"> Data Tables</a></li>

					</ul>
				</li>

				<li class="header">Khác</li>
				<li>
					<a href="#">
					<i class="fa fa-files-o"></i> Thông Tin
					</a>
				</li>
			</ul>
		</div>
	</aside>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/side_bar.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>