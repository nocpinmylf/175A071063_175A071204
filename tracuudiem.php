<!doctype html>
<html lang="en">

<head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/tracuu.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="wrapper">
		<div class="header"><?php include "header.php"; ?></div>
		<div class="main">
			<div class="tim-kiem">
				<form class="card-sm">
					<div class="card-body row no-gutters align-items-center">
						<div class="col">
							<input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Nhập Mã Sinh Viên">
						</div>
						<div class="col-auto">
							<button class="btn btn-lg btn-success" type="submit">Tra Cứu</button>
						</div>
					</div>
				</form>
			</div>
			<div class="diem-tb container">
				<table class="table table-striped table-dark table-bordered">
					<thead>
						<tr>
							<th scope="col">Mã Sinh Viên</th>
							<th scope="col">Học Kỳ</th>
							<th scope="col">Điểm Trung Bình</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="diem-mon container">
				<table class="table table-striped table-dark table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Tên Môn</th>
							<th scope="col">Học Kỳ</th>
							<th scope="col">Giảng Viên</th>
							<th scope="col">Quá Trình</th>
							<th scope="col">Thi</th>
							<th scope="col">Tổng Kết</th>
							<th scope="col">Ghi Chú</th>
						</tr>
					</thead>
					<!-- <tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody> -->
				</table>
				<?php
				// include "function/DB_connection.php";
				// getConnect();
				?>
			</div>
			<div class="footer"><?php include "footer.php"; ?></div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>