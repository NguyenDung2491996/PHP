<?php include("views/layout/header.php"); ?>
<div id="page-wrapper">
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<!-- /.panel-heading -->
				<div class="panel-heading">
					<i class="fa fa-list" aria-hidden="true"></i> Danh sách nhân viên
				</div>
				<div class="panel-body">


							<div id="home">
								<a class="btn btn-info" id="add" href="index.php?mod=employee&act=add" style="margin-bottom: 15px;">Thêm mới nhân viên</a>
								<!-- <a class="btn btn-warning" id="logout" href="logout.php">Logout</a> -->
							</div>
								<div class="row" >
									<div class="col-md-12">
										<table class="table table-striped table-bordered table-hover" id="myTable" style="width: 100%;">
										
											<thead>
												<tr>
													<th style="text-align: center;">Mã nhân viên</th>
													<th style="text-align: center;">Tên nhân viên</th>
													<th style="text-align: center;">Số điện thoại</th>
													<th style="text-align: center;">Email</th>
													<!-- <th style="text-align: center;">Mật khẩu</th> -->
													<th style="text-align: center;">Giới tính</th>
													<th style="text-align: center;">Hành động</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												foreach ($data as $row) {?>
													<tr>
														<td align="center" class="odd gradeX"><?= $row["MaNV"]?></td>
														<td align="center" class="odd gradeX"><?= $row["TenNV"]?></td>
														<td align="center" class="odd gradeX"><?= $row["SĐT"]?></td>
														<td align="center" class="odd gradeX"><?= $row["Email"]?></td>
														<!-- <td align="center" class="odd gradeX"><?= $row["MatKhau"]?></td> -->
														<td align="center" class="odd gradeX"><?= $row["GioiTinh"]?></td>
														<td align="center" class="odd gradeX">
															<a href="index.php?mod=employee&act=detail&MaNV=<?=$row["MaNV"]?>" class="btn btn-success">Xem chi tiết</a>
															<a href="index.php?mod=employee&act=edit&MaNV=<?=$row["MaNV"]?>" class="btn btn-warning">Sửa</a>
															<a href="index.php?mod=employee&act=delete&MaNV=<?=$row["MaNV"]?>" class="btn btn-danger">Xóa</a>
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
										if (isset($_COOKIE['msg-unv'])) {?>

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
												<?php include("views/layout/footer.php"); ?>											
