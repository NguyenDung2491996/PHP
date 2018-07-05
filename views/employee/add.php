<?php include("views/layout/header.php"); ?>
	<div class="container">
		<form action="?mod=employee&act=store" method="POST" role="form">
			<legend>Thêm mới nhân viên</legend>
			<p style="text-align: center;">Số điện thoại có dạng 01xxxxxxxxx hoặc 09xxxxxxxx</p>

			<div class="form-group">
				<label for="">Mã nhân viên</label>
				<input type="text" class="form-control" onkeyup="checkIDNV()" name="MaNV" id="IDs" placeholder="Nhập mã nhân viên">
				<p id="error-id"></p>
			</div>
			<div class="form-group">
				<label for="">Tên nhân viên</label>
				<input type="text" class="form-control" onkeyup="checkNameNV()" name="TenNV" id="names" placeholder="Nhập tên nhân viên" >
				<p id="error-name"></p>
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="text" class="form-control" onkeyup="checkPhone()" name="SĐT" id="phone" placeholder="Nhập số điện thoại" >
				<p id="error-phone"></p>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" onkeyup="checkMail()" name="Email" id="email" placeholder="Nhập email">
				<p id="error-mail"></p>
			</div>
			<div class="form-group">
				<label for="">Mật khẩu</label>
				<input type="password" class="form-control" onkeyup="checkPass()" name="MatKhau" id="pass" placeholder="Nhập mật khẩu">
				<p id="error-add"></p>
			</div>
			<label>Giới tính</label>
			<div class="form-group">
				<label class="radio-inline">
					<input type="radio" class="check" name="GioiTinh" onclick="checkSex(this)" value="Nam">Male
				</label>
				<label class="radio-inline">
					<input type="radio" class="check" name="GioiTinh"  onclick="checkSex(this)" value="Nữ" >Female
				</label>
				<label class="radio-inline">
					<input type="radio" class="check" name="GioiTinh"  onclick="checkSex(this)" value="Khác">Other
				</label>
			</div>


			<button type="submit" disabled  id="register-nv" name="save" class="btn btn-primary">Submit</button>
			<a href="index.php?mod=employee&act=list" class="btn btn-success">List employees</a>
			<a class="btn btn-danger" id="logout" href="logout.php">Logout</a>
		</form>
	</div>
<?php include("views/layout/footer.php"); ?>