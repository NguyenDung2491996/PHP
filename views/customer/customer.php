<?php include("views/layout/header.php") ;?>
<div id="page-wrapper">
<!-- 	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header" style="text-align: center; color: #32c5d2;">Quản lý khách hàng</h1>
		</div>
		
	</div> -->
	<!-- /.row -->
	<div class="row">
		<div class="colleft">
			<div class="panel panel-default">
				<!-- /.panel-heading -->
				<div class="panel-heading">
					<i class="fa fa-list" aria-hidden="true"></i> Danh sách khách hàng
				</div>
				<div class="panel-body">

					<div id="home">
						<a class="btn btn-info" id="add" href="index.php?mod=customer&act=add" style="margin-bottom: 15px;">Thêm mới khách hàng</a>
						<!-- <a class="btn btn-warning" id="logout" href="logout.php" >Logout</a> -->

					</div>
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-striped table-bordered table-hover" style="width: 100%;" id="myTable">
								<thead>
									<tr>
										<th style="text-align: left;">Mã khách hàng</th>
										<th style="text-align: left;">Tên khách hàng</th>
										<th style="text-align: left;">Số điện thoại</th>
										<th style="text-align: left;">Email</th>
										<th style="text-align: left;">Địa chỉ</th>
										<th style="text-align: left;">Giới tính</th>
										<th style="text-align: left;">Hành động</th>
										<!-- <th style="text-align: left;">#</th> -->
									</tr>
								</thead>
								<tbody>
									<?php 
									foreach ($data as $row) {?>
										<tr>
											<td align="left" class="odd gradeX" ><?= $row["MaKH"]?></td>
											<td align="left" class="odd gradeX" ><?= $row["TenKH"]?></td>
											<td align="left" class="odd gradeX" ><?= $row["SĐT"]?></td>
											<td align="left" class="odd gradeX" ><?= $row["Email"]?></td>
											<td align="left" class="odd gradeX" ><?= $row["DiaChi"]?></td>
											<td align="left" class="odd gradeX" ><?= $row["GioiTinh"]?></td>
											<td align="center" class="odd gradeX" >
												<a href="index.php?mod=customer&act=detail&MaKH=<?=$row["MaKH"]?>" class="btn btn-success">Xem chi tiết</a>
												<a href="index.php?mod=customer&act=edit&MaKH=<?=$row["MaKH"]?>" class="btn btn-warning">Sửa</a>
												<a href="index.php?mod=customer&act=delete&MaKH=<?=$row["MaKH"]?>" class="btn btn-danger">Xóa</a>
											</td>
											<!-- 		<td><a href="?mod=sale&act=index&MaKH=<?=$row["MaKH"]?>" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></td> -->
										</tr>
										<?php }
										?>

									</tbody>
								</table>
							</div>
						</div>
					</div>	
				</div>
				<script type="text/javascript">
					$('#myTable').on('click', '.btn-danger', function(e){
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
				if (isset($_COOKIE['msg-up'])) {?>

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
						<?php 
						if (isset($_COOKIE['msg'])) {?>

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
								toastr.success('Thêm mới thành công');
							</script>
							<?php }
							?>
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
									toastr.error('Mã vừa thêm đã tồn tại');
								</script>
								<?php }
								?>
								<?php include("views/layout/footer.php") ;?>