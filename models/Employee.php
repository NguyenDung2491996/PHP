<?php 
require_once("models/Model.php");
class Employee extends Model{
	var $info_conn;
	var $table_name="nhanvien";
	var $primary_key="MaNV";
	// var $employee_conn;
	// public function All(){
	// 	$data = array();
	// 	$connection= new Connection();

	// 	$this->employee_conn=$connection->conn;
	// 	$query ="SELECT * from nhanvien";
	// 	$result= $this->employee_conn->query($query);
	// 	while ($row= $result->fetch_assoc()) {
	// 		$data[]=$row;
	// 	}
	// 	return $data;
	// }
	// public function detail($MaNV){
	// 	$employee;
	// 	$connection= new Connection();

	// 	$this->employee_conn=$connection->conn;
	// 	$query= "SELECT * from nhanvien WHERE MaNV='".$MaNV."'";
	// 	$employee=$this->employee_conn->query($query)->fetch_assoc();
	// 	return $employee;
	// }
	// public function delete($MaNV){
	// 	$query="DELETE FROM nhanvien WHERE MaNV ='".$MaNV."'";
 //        //echo $query;
	// 	$connection = new Connection();
	// 	$this->employee_conn=$connection->conn;
	// 	$result=$this->employee_conn->query($query);
	// 	return $result;
	// }
	// public function create($data){

	// 	$query="INSERT INTO nhanvien(MaNV,TenNV,Email,SĐT,MatKhau,GioiTinh) VALUES('".$data['MaNV']."','".$data['TenNV']."','".$data['Email']."','".$data['SĐT']."','".$data['MatKhau']."','".$data['GioiTinh']."')";
	// 	$connection = new Connection();
	// 	$this->employee_conn=$connection->conn;
	// 	$result=$this->employee_conn->query($query);
	// 	return $result;	
	// }
	// public function update($data){
	// 	$connection = new Connection();
	// 	$this->employee_conn=$connection->conn;
	// 	// $query="UPDATE nhanvien SET TenNV='$TenNV',Email='$Email',SĐT='$SĐT',MatKhau='$MatKhau' ,GioiTinh='$GioiTinh' WHERE MaNV='".$MaNV."' ";
	// 	$query="UPDATE nhanvien SET TenNV='".$data['TenNV']."',Email='".$data['Email']."',SĐT='".$data['SĐT']."',MatKhau='".$data['MatKhau']."',GioiTinh='".$data['GioiTinh']."' WHERE MaNV='".$data['MaNV']."'";
	// 	$result=$this->employee_conn->query($query);
 //        return $result;
	// }
	public function checkLogin($email,$pass){
		$query= "SELECT Email,MatKhau from nhanvien WHERE Email='".$email."' and MatKhau='".$pass."'";
		
		$connection = new Connection();
		$this->employee_conn=$connection->conn;
		$result=$this->employee_conn->query($query);
		$nv=$result->fetch_assoc();
		return $nv;
	}
	public function find($email, $pass){
		$query= "SELECT * from nhanvien WHERE Email='".$email."' and MatKhau='".$pass."'";
		
		$connection = new Connection();
		$this->employee_conn=$connection->conn;
		$result=$this->employee_conn->query($query);
		$nv=$result->fetch_assoc();
		$_SESSION['user1']=$nv;
		return $nv;
	}
}

?>