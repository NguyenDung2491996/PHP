<?php include("views/layout/header.php"); ?>

<div id="page-wrapper">

	<div class="panel panel-default">
		<!-- /.panel-heading -->
		<div class="panel-heading">
			<i class="fa fa-list" aria-hidden="true"></i> Chi tiết hóa đơn
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-6">
					<h3 style="color: black; text-align: left; margin-top: 15px;">Vin Mart</h3>
					<p style="color: black;">Add : Số 2 Nguyền Hiền </p>
					<p style="color: black;">Mobile: 01688428900</p>

				</div>
				<div class="col-lg-6">
					<h3 style="margin-top: 15px;">HÓA ĐƠN BÁN HÀNG</h3>
					<p style="color: black;">Mã hóa đơn:<?=$hoadon['MaHD']?></p>
					<p style="color: black;">Ngày bán: <?=$hoadon['NgayBan']?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<p style="color: black; font-weight: bold;">Khách hàng: <?=$customer['TenKH']?></p>
					<p style="color: black; font-weight: bold;">Số điện thoại: <?=$customer['SĐT']?></p>
					<p style="color: black; font-weight: bold;">Địa chỉ: <?=$customer['DiaChi']?></p>

				</div>

			</div>

			<div class="row">
				<div class="col-lg-12" >

					<div class="colleft">
						<div class="panel panel-default">
							<!-- /.panel-heading -->
					<!-- <div class="panel-heading">
						<i class="fa fa-list" aria-hidden="true"></i> Danh sách sản phẩm 
					</div> -->
					<!-- 	<div class="panel-body"> -->
						<!-- <div id="home">
							<a class="btn btn-info" href="?mod=product&act=add" style="margin-bottom: 20px;">Add products</a>
				

						</div> -->
						<!-- <div class="row"> -->



							<div class = "table-responsive">
								<table class="table table-hover table-striped table-bordered" id="myTables" style="width: 100%;">




									<thead>
										<tr>
											<th>#</th>
											<th>Mã sản phẩm</th>
											<th>Tên sản phẩm</th>
											<th>Đơn giá</th>
											<th>Số lượng</th>
											<th>Thành tiền</th>

										</tr>
									</thead>
									<tbody>
										<?php
										$i=1;
										$sum=0;

										foreach ($bill_detail_list as $product) {
											$sum+=$product['SoLuong']*$product['DonGia'];
											?>
											<tr>
												<td class="odd gradeX"><?= $i?></td>
												<td class="odd gradeX"><?= $product['MaSP']?></td>
												<td class="odd gradeX"><?= $product["TenSP"]?></td>
												<td class="odd gradeX"><?= number_format($product['DonGia'])?></td>
												<td class="odd gradeX">

													<?= $product['SoLuong']?>


												</td>

												<td class="odd gradeX"><?= number_format($product['SoLuong']*$product['DonGia'])?></td>


											</tr>
											<?php $i++; }
											?>


										</tbody>
										<tfoot>
											<tr>
												<td class="odd gradeX" style="text-align: right;" colspan="5" class="money">TỔNG TIỀN :</td>
												<td class="odd gradeX"><?=number_format($sum)?></td>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="print" style="width: 30%;margin: auto;margin-right: 0px;">
					<!-- <div class="col-lg-6">


					</div> -->
					<!-- <div class="col-lg-3 offset-3"> -->
						<p style="color: black; font-weight:bold; margin-bottom: 10px;">Nhân viên bán hàng</p>
						<i style="color: black;"><?=$employee['TenNV']?></i>
						<!-- </div> -->
					</div>
					<!-- <a href="?mod=sale&act=create_bill" class="btn btn-info">Quay về tạo lại hóa đơn</a> -->
					<button onclick="myFunction()" class="btn btn-success" id="bill"><i class="fa fa-print" aria-hidden="true"></i> In hóa đơn</button>
				</div>
			</div>
				<script type="text/javascript">
					function myFunction() {
						window.print();
                    // document.getElementById("bill").style.display ="none";
                }
            </script>


            <?php include("views/layout/footer.php"); ?>