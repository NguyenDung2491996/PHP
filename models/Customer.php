<?php 
require_once("models/Model.php");
class Customer extends Model{
	var $info_conn;
	var $table_name="khachhang";
	var $primary_key="MaKH";
	// var $customer_conn ;
	// public function All(){
	// 	$data = array();
	// 	$connection = new Connection();
	// 	$this->customer_conn= $connection->conn;
	// 	$query ="SELECT * from khachhang";
	// 	$result= $this->customer_conn->query($query);
	// 	while ($row = $result->fetch_assoc()) {
	// 		$data[]=$row;
	// 	}
	// 	return $data;
	// }
	// public function detail($MaKH){
	// 	$customer;
	// 	$connection= new Connection();
	// 	$this->customer_conn= $connection->conn;
	// 	$query= "SELECT * from khachhang WHERE MaKH='".$MaKH."'";
	// 	$customer=$this->customer_conn->query($query)->fetch_assoc();
	// 	return $customer;
	// }
	// public function delete($MaKH){
	// 	$query="DELETE FROM khachhang WHERE MaKH ='".$MaKH."'";
 //        //echo $query;
	// 	$connection = new Connection();
	// 	$this->customer_conn=$connection->conn;
	// 	$result=$this->customer_conn->query($query);
	// 	return $result;
	// }
	// public function create($data){
	// 	$connection= new Connection();
	// 	$this->customer_conn= $connection->conn;
	// 	$query="INSERT INTO khachhang(MaKH,TenKH,SĐT,Email,DiaChi,GioiTinh) VALUES ('".$data['MaKH']."','".$data['TenKH']."','".$data['SĐT']."','".$data['Email']."','".$data['DiaChi']."','".$data['GioiTinh']."')";
	// 	$result=$this->customer_conn->query($query);
	// 	return $result;
		
	// }
	// public function update($data){
	// 	$connection= new Connection();
	// 	$this->customer_conn= $connection->conn;
	// 	$query="UPDATE khachhang SET TenKH='".$data['TenKH']."',SĐT='".$data['SĐT']."',Email='".$data['Email']."',DiaChi='".$data['DiaChi']."',GioiTinh='".$data['GioiTinh']."' WHERE MaKH='".$data['MaKH']."'";
	// 	// echo $query;
	// 	$result=$this->customer_conn->query($query);
	// 	 return $result;
	// }
}
?>