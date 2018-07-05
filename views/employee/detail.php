<?php include ("views/layout/header.php"); ?>
 	<div class="container">
		<h3 align="center">THÔNG TIN NHÂN VIÊN</h3>
		<p style="text-align: center;color: black!important;">Mã nhân viên : <?= $employee['MaNV'];?></p>
		<p style="text-align: center;color: black!important;border-image: ">Tên nhân viên : <?= $employee['TenNV'];?></p>
		<p style="text-align: center;color: black!important;">Số điện thoại: <?= $employee['SĐT'];?></p>
		<p style="text-align: center;color: black!important;">Email : <?= $employee['Email'];?></p>
		<p style="text-align: center;color: black!important;">Giới tính : <?= $employee['GioiTinh'];?></p>
	</div>
	

<?php include ("views/layout/footer.php"); ?>
