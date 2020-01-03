<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<ul class="nav nav-tabs">
					<li class="login-item nav-item">
						<a class="nav-link active" data-toggle="tab" href="#login-tab" role="tab" aria-selected="true">Đăng Nhập</a>
					</li>
					<li class="login-item nav-item">
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
								<label for="rgt-email" class="col-form-label">Email</label>
								<input type="email" class="form-control" id="rgt-email" required>
							</div>
							<div class="form-group">
								<label for="rgt-password" class="col-form-label">Mật Khẩu</label>
								<input type="password" class="form-control" id="rgt-password" placeholder="Tối thiểu 6 ký tự" minlength=6 required>
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