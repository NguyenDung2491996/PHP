<?php include("views/layout/header.php"); ?>
	<div class="container">
		<form action="?mod=employee&act=update" method="POST" role="form">
			<legend>Update employees information</legend>

			<div class="form-group">
				<label for="">Mã nhân viên</label>
				<input type="text" class="form-control" onkeyup="checkID()" name="MaNV" id="ID" placeholder="Nhập mã nhân viên" readonly value="<?=$info["MaNV"]?>">
				
			</div>
			<div class="form-group">
				<label for="">Tên khách hàng</label>
				<input type="text" class="form-control" onkeyup="checkName()" name="TenNV" id="name" placeholder="Nhập tên nhân viên" value="<?=$info["TenNV"]?>">
				
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="text" class="form-control" onkeyup="checkPhone()" name="SĐT" id="phone" placeholder="Nhập số điện thoại" value="<?=$info["SĐT"]?>">
				
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" onkeyup="checkMail()" name="Email" id="email" placeholder="Nhập email" value="<?=$info["Email"]?>">
				
			</div>
			<div class="form-group">
				<label for="">Mật khẩu</label>
				<input type="password" class="form-control" onkeyup="checkPass()" name="MatKhau" id="pass" placeholder="Nhập mật khẩu" value="<?=$info["MatKhau"]?>">
				
			</div>
			<label>Giới tính</label>
			<div class="form-group">
				<label class="radio-inline">
					<input type="radio" class="check" name="GioiTinh" onclick="checkSex(this)" value="Nam" <?php echo $male; ?>>Male
				</label>
				<label class="radio-inline">
					<input type="radio" class="check" name="GioiTinh"  onclick="checkSex(this)" value="Nữ" <?=$female?>>Female
				</label>
				<label class="radio-inline">
					<input type="radio" class="check" name="GioiTinh"  onclick="checkSex(this)" value="Khác" <?=$other?>>Other
				</label>
			</div>


			<button type="submit" id="register" name="save" class="btn btn-primary">Submit</button>
			<a href="index.php?mod=employee&act=list" class="btn btn-success">List employees</a>
			<!-- <a class="btn btn-danger" id="logout" href="logout.php">Logout</a> -->
		</form>
	</div>
<?php include("views/layout/footer.php"); ?>