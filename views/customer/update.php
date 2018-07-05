<?php include("views/layout/header.php"); ?>
	<div class="container">
		<form action="?mod=customer&act=update" method="POST" role="form">
			<legend>Update customers information</legend>

			<div class="form-group">
				<label for="">Mã khách hàng</label>
				<input readonly type="text" class="form-control" onkeyup="checkID()" name="MaKH" id="ID" placeholder="Nhập mã khách hàng"  value="<?=$info["MaKH"]?>">
				
			</div>
			<div class="form-group">
				<label for="">Tên khách hàng</label>
				<input type="text" class="form-control" onkeyup="checkName()" name="TenKH" id="name" placeholder="Nhập tên khách hàng" value="<?=$info["TenKH"]?>">
				
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="text" class="form-control" onkeyup="checkCount()" name="SĐT" id="count" placeholder="Nhập số điện thoại" value="<?=$info["SĐT"]?>">
				
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" onkeyup="checkPrice()" name="Email" id="price" placeholder="Nhập email" value="<?=$info["Email"]?>">
				
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" onkeyup="checkAddress()" name="DiaChi" id="address" placeholder="Nhập địa chỉ" value="<?=$info["DiaChi"]?>">
				
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
			<a href="index.php?mod=customer&act=list" class="btn btn-success">List customers</a>
			<!-- <a class="btn btn-danger" id="logout" href="logout.php">Logout</a> -->
		</form>
	</div>
<?php include("views/layout/footer.php"); ?>