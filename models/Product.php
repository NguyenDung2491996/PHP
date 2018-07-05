<?php 
require_once("models/Model.php");
class Product extends Model{
	var $info_conn;
	var $table_name="sanpham";
	var $primary_key="MaSP";
	public function getQuant($MaSP){
		$query = "SELECT SoLuong FROM ".$this->table_name." WHERE ".$this->primary_key ."= '".$MaSP."' ";
		// echo $query;
		// die;
		$result = $this->info_conn->query($query)->fetch_assoc()['SoLuong'];
		return $result;
	}
	public function reduceQuant($MaSP, $soLuong){
		$soLuongCon = $this->getQuant($MaSP)- $soLuong;
		$query = " UPDATE ".$this->table_name." SET SoLuong =".$soLuongCon." WHERE ".$this->primary_key ."= '".$MaSP."'";
		// echo $query;
		// die;
        $result = $this->info_conn->query($query);

        return $result;
	}
}
?>