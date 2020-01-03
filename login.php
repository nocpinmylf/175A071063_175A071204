<!doctype html>
<html lang="en">

<head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#login-tab" role="tab" aria-selected="true">Đăng Nhập</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#register-tab" role="tab" aria-selected="true">Đăng Ký</a>
						</li>
					</ul>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">


					<div class="tab-content">
						<div id="login-tab" class="tab-pane fade in show active">
							<div class="form-group">
								<label for="username" class="col-form-label">Email</label>
								<input type="email" class="form-control" id="email" required>
							</div>
							<div class="form-group">
								<label for="password" class="col-form-label">Mật Khẩu</label>
								<input type="password" class="form-control" id="password" required>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary" id="login-btn">Đăng Nhập</button>
							</div>
						</div>

						<div id="register-tab" class="tab-pane fade">
							<form>
								<div class="form-group">
									<label for="username" class="col-form-label">Email</label>
									<input type="email" class="form-control" id="email" required>
								</div>
								<div class="form-group">
									<label for="password" class="col-form-label">Mật Khẩu</label>
									<input type="password" class="form-control" id="password" placeholder="Tối thiểu 6 ký tự" minlength=6 required>
								</div>
								<div class="form-group">
									<label for="re-password" class="col-form-label">Xác Nhận Mật Khẩu</label>
									<input type="password" class="form-control" id="re-password" placeholder="Nhập lại mật khẩu" minlength=6 required>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary" id="register-btn">Đăng Ký</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
</body>

</html>