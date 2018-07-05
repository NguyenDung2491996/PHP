<?php 
include("views/layout/header.php");

?>
<div id="page-wrapper">
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

							<div class="panel-heading">
								<i class="fa fa-list" aria-hidden="true"></i> Danh sách hóa đơn 
							</div>

							<div class = "table-responsive">
								<table class="table table-hover table-striped table-bordered" id="myTables" style="width: 100%;">




									<thead>
										<tr>

											<th>Mã hóa đơn</th>
											<th>Tên khách hàng</th>
											<th>Ngày bán</th>
											<!-- <th>Tổng tiền</th> -->
											<th>Xem chi tiết</th>

										</tr>
									</thead>
									<tbody>
										<?php
										// var_dump($list_bill);
										// die;
										// if (isset($_SESSION['cart'])) {
										foreach ($list_bill as $product) {
											
											?>
											<tr>

												<td class="odd gradeX"><?= $product['MaHD']?></td>
												<td class="odd gradeX"><?= $product["TenKH"]?></td>
												<td class="odd gradeX"><?= $product['NgayBan']?></td>
													<!-- <td class="odd gradeX">

														<?= $product['TongTien']?>


													</td> -->

													<td class="odd gradeX">
														<a href="?mod=sale&act=bill_detail&MaHD=<?=$product['MaHD']?>" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> Xem chi tiết</a>
													</td>


												</tr>
												<?php  }
												?>


											</tbody>
										<!-- <tfoot>
											<tr>
												<td class="odd gradeX" style="text-align: right;" colspan="5" class="money">TỔNG TIỀN :</td>
												<td class="odd gradeX"><?=number_format($sum)?></td>
											</tr>
										</tfoot> -->
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 
				include("views/layout/footer.php");

				?>