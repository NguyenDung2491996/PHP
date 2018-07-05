<?php include ("views/layout/header.php"); ?>

<body>
	<div class="container">
		<h3 align="center">THÔNG TIN KHÁCH HÀNG</h3>
		<p style="text-align: center;color: black!important;">Mã khách hàng : <?= $customer['MaKH'];?></p>
		<p style="text-align: center;color: black!important; ">Tên khách hàng : <?= $customer['TenKH'];?></p>
		<p style="text-align: center;color: black!important;">Số điện thoại: <?= $customer['SĐT'];?></p>
		<p style="text-align: center;color: black!important;">Email : <?= $customer['Email'];?></p>
		<p style="text-align: center;color: black!important;">Địa chỉ: <?= $customer['DiaChi'];?></p>
		<p style="text-align: center;color: black!important;">Giới tính : <?= $customer['GioiTinh'];?></p>
	</div>

<?php include ("views/layout/footer.php"); ?>
