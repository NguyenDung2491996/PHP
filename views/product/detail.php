<?php include("views/layout/header.php"); ?>
	<div class="container">
		<h3 align="center">PRODUCTS</h3>
		<p style="text-align: center;color: black!important;">Mã sản phẩm : <?= $product['MaSP'];?></p>
		<p style="text-align: center;color: black!important;">Tên sản phẩm : <?= $product['TenSP'];?></p>
		<p style="text-align: center;color: black!important;">Số lượng : <?= $product['SoLuong'];?></p>
		<p style="text-align: center;color: black!important;">Đơn giá : <?= $product['DonGia'];?></p>
	</div>
<?php include("views/layout/footer.php"); ?>