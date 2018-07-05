<?php include("views/layout/header.php"); ?>
<div id="page-wrapper">	<!-- /.row -->
	<div class="row">
		<div class="colleft">
			<div class="panel panel-default">
				<!-- /.panel-heading -->
				<div class="panel-heading">
					<i class="fa fa-list" aria-hidden="true"></i> Danh sách sản phẩm
				</div>
				<div class="panel-body">
					<div id="home">
						<a class="btn btn-info" href="?mod=product&act=add" style="margin-bottom: 15px;">Thêm mới sản phẩm</a>

					</div>
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-hover table-striped table-bordered" id="myTable" style="width: 100%;">
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
												<a href="index.php?mod=product&act=detail&MaSP=<?= $row['MaSP'] ?>" class="btn btn-success">Xem chi tiết</a>
												<a href="index.php?mod=product&act=delete&MaSP=<?= $row['MaSP'] ?>" class="btn btn-danger">Xóa</a>
												<a href="index.php?mod=product&act=edit&MaSP=<?= $row['MaSP'] ?>" class="btn btn-warning">Sửa</a>
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
			</div>
		</div>
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