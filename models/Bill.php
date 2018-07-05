<?php 
require_once("models/Model.php");
class Bill extends Model{
	var $primary_key= 'MaHD';
	var $table_name='hoadon';
	var $info_conn;
	public function ListBillByEmpl($Empl){
		if ($Empl=='') {
			$where='';
		}
		else{
			$where= "WHERE hd.MaNV ='".$Empl."'";
		}
		$data= array();
		$query = "SELECT hd.*, kh.TenKH, nv.TenNV FROM hoadon hd join khachhang kh ON hd.MaKH = kh.MaKH JOIN nhanvien nv ON nv.MaNV = hd.MaNV ".$where;

		$result = $this->info_conn->query($query);
		while ($row = $result->fetch_assoc()) {
			$data[]= $row;
		}
        return $data;
	}
}
?>
