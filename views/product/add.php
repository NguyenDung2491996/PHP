<?php include("views/layout/header.php"); ?>
	<div class="container">
		<form action="?mod=product&act=store" method="POST" role="form">
			<legend>Thêm mới sản phẩm</legend>

			<div class="form-group">
				<label for="">Mã sản phẩm</label>
				<input style="width: 100%; margin: auto;" type="text" class="form-control" onkeyup="checkID()" name="MaSP" id="ID" placeholder="Nhập mã sản phẩm">
				<p id="error-id"></p>
			</div>
			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input style="width: 100%; margin: auto;" type="text" class="form-control" onkeyup="checkName()" name="TenSP" id="name" placeholder="Nhập tên sản phẩm" >
				<p id="error-name"></p>
			</div>
			<div class="form-group">
				<label for="">Số lượng</label>
				<input style="width: 100%; margin: auto;" type="number" class="form-control" onkeyup="checkCount()" name="SoLuong" id="count" placeholder="Nhập số lượng" >
				<p id="error-count"></p>
			</div>
			<div class="form-group">
				<label for="">Đơn giá</label>
				<input style="width: 100%; margin: auto;" type="text" class="form-control" onkeyup="checkPrice()" name="DonGia" id="price" placeholder="Nhập đơn giá">
				<p id="error-price"></p>
			</div>
			<div class="form-group">
				<label for="">Hình ảnh</label>
				<input style="width: 100%; margin: auto;" type="text" class="form-control"  name="HinhAnh" id="price" placeholder="">
				<p id="error-img"></p>
			</div>


			<button type="submit" disabled  id="register-sp" name="save" class="btn btn-primary">Submit</button>
		</form>
	</div>
<?php include("views/layout/footer.php"); ?>