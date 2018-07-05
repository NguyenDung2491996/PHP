<?php 
require_once("models/Model.php");
class BillDetail extends Model{
   var $primary_key= 'MaHD';
   var $table_name = "chitiethd";
   var $info_conn;
   public function find($input){
   	$query = "SELECT ct.*,sp.TenSP FROM chitiethd ct join sanpham sp ON ct.MaSP = sp.MaSP where ct.MaHD = '".$input."'";
   	$result = $this->info_conn->query($query);
   	$data =array();
   	while ($row = $result->fetch_assoc()) {
   		$data[]= $row;
   	}
   	return $data;
   }
 }
?>