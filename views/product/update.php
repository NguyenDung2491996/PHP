<?php include("views/layout/header.php"); ?>
<div class="container">
	<form action="?mod=product&act=update" method="POST" role="form">
		<legend>Update products</legend>

		<div class="form-group">
			<label for="">Mã sản phẩm</label>
			<input type="text" class="form-control" name="MaSP" id="" value="<?=$product['MaSP']?>" readonly>
		</div>
		<div class="form-group">
			<label for="">Tên sản phẩm</label>
			<input type="text" class="form-control" name="TenSP" id="" value="<?=$product['TenSP']?>">
		</div>
		<div class="form-group">
			<label for="">Số lượng</label>
			<input type="number" class="form-control" name="SoLuong" id="" value="<?=$product['SoLuong']?>">
		</div>
		<div class="form-group">
			<label for="">Đơn giá</label>
			<input type="text" class="form-control" name="DonGia" id="" value="<?=$product['DonGia']?>">
		</div>

		<div class="form-group">
			<label for="">Hình ảnh</label>
			<input type="text" class="form-control" name="HinhAnh" id="" value="<?=$product['HinhAnh']?>">
		</div>
		<button type="submit" name="save" class="btn btn-primary">Submit</button>
	</form>
</div>
<?php include("views/layout/footer.php"); ?>