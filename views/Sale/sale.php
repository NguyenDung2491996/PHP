<?php include("views/layout/header.php"); ?>

<div id="page-wrapper">
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-6" >

			<div class="colleft">
				<div class="panel panel-default">
					<!-- /.panel-heading -->
					<div class="panel-heading">
						<i class="fa fa-list" aria-hidden="true"></i> Danh sách sản phẩm 
					</div>
					<div class="panel-body">
						<!-- <div id="home">
							<a class="btn btn-info" href="?mod=product&act=add" style="margin-bottom: 20px;">Add products</a>
				

						</div> -->
						<!-- <div class="row"> -->




							<table class="table table-hover table-striped table-bordered" id="myTable" style="width: 100%;">
								<!-- <h3 style="text-align: center;margin-top:0px;">DANH SÁCH SẢN PHẨM</h3> -->

								<thead>

									<tr>
										<th style="text-align: center;">Mã SP</th>
										<th style="text-align: center;">Tên SP</th>
										<th style="text-align: center;">Số lượng</th>
										<th style="text-align: center;">Đơn giá</th>
										<th style="text-align: center;">Hình ảnh</th>
										<th style="text-align: center;">Hành động</th>
									</tr>

								</thead>
								<tbody>
									<?php 

									foreach ($data as $row) {?>

										<tr>
											<td align="center" class="odd gradeX"><?= $row['MaSP'] ?></td>
											<td align="center" class="odd gradeX"><?= $row['TenSP'] ?></td>
											<td align="center" class="odd gradeX"><?= $row['SoLuong'] ?></td>
											<td align="center" class="odd gradeX"><?= number_format($row['DonGia'])." ₫" ?></td>
											<td align="center" class="odd gradeX">
												<img src="<?= $row['HinhAnh'] ?>" style="height: 50px;">
											</td>
											<td align="center" class="odd gradeX">
												<a href="index.php?mod=sale&act=add2cart&MaSP=<?= $row['MaSP'] ?>" class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>

											</td>

										</tr>
										<?php }
										?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="colleft">
						<div class="panel panel-default">
							<!-- /.panel-heading -->
							<div class="panel-heading">
								<i class="fa fa-list" aria-hidden="true"></i> Danh sách sản phẩm được khách hàng chọn
							</div>
							<div class="panel-heading">
								<?php if (isset($_SESSION['KH'])): ?>
									<h3 style=" margin-top: 0px;text-align: left; color: black;">HÓA ĐƠN</h3>
									<h5 style="color: black!important;">Mã khách hàng : <?= $customer['MaKH'];?></h5>
									<h5 style="color: black!important;">Tên khách hàng : <?= $customer['TenKH'];?></h5>
									<h5 style="color: black!important;">Số điện thoại: <?= $customer['SĐT'];?></h5>
									<h5 style="color: black!important;">Email : <?= $customer['Email'];?></h5>
									<h5 style="color: black!important;">Địa chỉ: <?= $customer['DiaChi'];?></h5>
									<h5 style="color: black!important;">Giới tính : <?= $customer['GioiTinh'];?></h5>
								<?php endif ?>
								

								
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-hover table-striped table-bordered" id="myTables" style="width: 100%;">
										

										

										<thead>
											<tr>
												<th>STT</th>
												<th>Mã sản phẩm</th>
												<th>Tên sản phẩm</th>
												<th>Đơn giá</th>
												<th>Số lượng</th>
												<th>Hành động</th>
												<th>Thành tiền</th>

											</tr>
										</thead>
										<tbody>
											<?php
											$i=1;
											$sum=0;
											if (isset($_SESSION['cart'])) {
												foreach ($_SESSION['cart'] as $product) {
													$sum+=$product['SoLuong']*$product['DonGia'];
													?>
													<tr>
														<td class="odd gradeX"><?= $i?></td>
														<td class="odd gradeX"><?= $product['MaSP']?></td>
														<td class="odd gradeX"><?= $product["TenSP"]?></td>
														<td class="odd gradeX"><?= number_format($product['DonGia'])?></td>
														<td class="odd gradeX">
															<a href="?mod=sale&act=delete&MaSP=<?=$product['MaSP']?>" style="text-decoration: none; font-size: 20px;">-</a>
															<?= $product['SoLuong']?>
															<a href="?mod=sale&act=add2cart&MaSP=<?=$product['MaSP']?>"  style="text-decoration: none; font-size: 17px;">+</a>

														</td>

														<td class="odd gradeX">
															<a href="?mod=sale&act=deleteAll&MaSP=<?=$product['MaSP']?>" class="btn btn-danger">Delete</a>

														</td>
														<td class="odd gradeX"><?= number_format($product['SoLuong']*$product['DonGia'])?></td>


													</tr>
													<?php $i++; }
												}?>


											</tbody>
											<tfoot>
												<tr>
													<td class="odd gradeX" colspan="5" class="money">TỔNG TIỀN :</td>
													<td class="odd gradeX" id="sum" data-value= '<?=$sum?>'><?=number_format($sum)?></td>
												</tr>
											</tfoot>
										</table>
									</div>
									<a href="?mod=sale&act=payment" id="money" class="btn btn-success"><i class="fa fa-money" aria-hidden="true"></i> Thanh toán</a>
									<a href="?mod=sale&act=destroy" id="cart" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hủy giỏ hàng</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <script type="text/javascript">
            	$(document).ready(function(){
                    var sum = $("#sum").attr("data-value");
                    if (sum== 0) {
                    	$("#money").attr("href","javascript:;");
                        $("#cart").attr("href","javascript:;");

                    }
                    else{
                    	$("#money").attr("href","?mod=sale&act=payment");
                    	$("#cart").attr("href","?mod=sale&act=destroy");
                    }
            	});
            </script>
			<script type="text/javascript">
				$(".btn-danger").click(function(e){
					e.preventDefault();
					var url= $(this).attr('href');
					console.log(url);
					swal({
						title: "",
						text: "Bạn có muốn xóa hay không?",
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})
					.then((willDelete) => {
						if (willDelete) {
					    // swal("Poof! Your imaginary file has been deleted!", {

					           // 	icon: "success",
					       // });
					       window.location.href=url;
					   } else {
					            // swal("Your imaginary file is safe!");
					        }
					    });
				});

			</script>
			<?php 
			if (isset($_COOKIE['msg-s'])) {?>

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
					toastr.success('Xóa thành công');
				</script>


			
				<?php }
				?>
					<?php 
			if (isset($_COOKIE['msg-error'])) {?>

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
					toastr.error('Hết hàng hoặc bạn chọn vượt quá số lượng sản phẩm');
				</script>


			
				<?php }
				?>
				<?php 
			if (isset($_COOKIE['msg-des'])) {?>

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
					toastr.success('Hủy giỏ hàng thành công');
				</script>


			
				<?php }
				?>
					<script>
					jQuery(document).ready(function() {
						jQuery('#myTables').DataTable({
							responsive: true
						});
					});
				</script>
				<?php 
				if (isset($_COOKIE['msg-add'])) {?>

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
						toastr.success('Thêm thành công');
					</script>
					<?php }
					?>
					<?php 
					if (isset($_COOKIE['msg-update'])) {?>

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
							toastr.success('Cập nhật thành công');
						</script>
						<?php }
						?>
						<?php include("views/layout/footer.php"); ?>