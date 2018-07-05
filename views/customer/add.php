<?php include ("views/layout/header.php"); ?>

<div class="container">
	<form action="?mod=customer&act=store" method="POST" role="form">
		<legend>Thêm mới khách hàng</legend>
		<p style="text-align: center;">Số điện thoại có dạng 01xxxxxxxxx hoặc 09xxxxxxxx</p>

		<div class="form-group">
			<label for="">Mã khách hàng</label>
			<input type="text" class="form-control" onkeyup="checkIDKH()" name="MaKH" id="ID" placeholder="Nhập mã khách hàng" >
			<p id="error-id"></p>
		</div>
		<div class="form-group">
			<label for="">Tên khách hàng</label>
			<input type="text" class="form-control" onkeyup="checkNameKH()" name="TenKH" id="name" placeholder="Nhập tên khách hàng" >
			<p id="error-name"></p>
		</div>
		<div class="form-group">
			<label for="">Số điện thoại</label>
			<input type="text" class="form-control" onkeyup="checkPhoneKH()" name="SĐT" id="phone" placeholder="Nhập số điện thoại" >
			<p id="error-phone"></p>
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" onkeyup="checkMailKH()" name="Email" id="email" placeholder="Nhập email" >
			<p id="error-mail"></p>
		</div>
		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" onkeyup="checkAddressKH()" name="DiaChi" id="address" placeholder="Nhập địa chỉ" >
			<p id="error-add"></p>
		</div>
		<label>Giới tính</label>
		<div class="form-group">
			<label class="radio-inline">
				<input type="radio" class="check" name="GioiTinh" onclick="checkSexKH(this)" value="Nam">Male
			</label>
			<label class="radio-inline">
				<input type="radio" class="check" name="GioiTinh"   onclick="checkSexKH(this)" value="Nữ">Female
			</label>
			<label class="radio-inline">
				<input type="radio" class="check" name="GioiTinh" onclick="checkSexKH(this)" value="Khác">Other
			</label>
		</div>
		<button type="submit" disabled id="register-kh" name="save" class="btn btn-primary">Submit</button>
		<a href="index.php?mod=customer&act=list" class="btn btn-success">List customers</a>
		<a class="btn btn-danger" id="logout" href="logout.php">Logout</a>
	</form>
</div>
<?php 
if (isset($_COOKIE['msg-false'])) {?>

	<script type="text/javascript">
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "2000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		toastr.error('Mã bạn vừa nhập đã tồn tại');
	</script>
	<?php }
	?>
	<?php include ("views/layout/footer.php"); ?>
