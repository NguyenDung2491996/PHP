<?php 
include("models/Employee.php");
class EmployeeController{
	public function list(){
		$EmloyeeModels= new Employee();
		$data= $EmloyeeModels->All();
		require("views/employee/employees.php");
	}
	public function detail(){
		$EmloyeeModels= new Employee();
		$MaNV=$_GET['MaNV'];
		$employee=$EmloyeeModels->detail($MaNV);
		require("views/employee/detail.php");
	}
	public function delete(){
    $EmployeeModels=  new Employee();
    $MaNV= $_GET['MaNV'];
    $result = $EmployeeModels->delete($MaNV);
    if ($result==1) {
      setcookie('msg-s','Xóa thành công ',time()+1);
    }
    else{
      setcookie('msg-f','Xóa sản phẩm không thành công',time()+1);
    }
    header("Location: index.php?mod=employee&act=list");
  }
  public function add(){
    require("views/employee/add.php");
  }
  public function store(){
    $data= $_POST;
    unset($data['save']);
    $EmployeeModels=new Employee();
    $result= $EmployeeModels->create($data);
    if ($result==1) {
      setcookie('msg-add','Thêm mới thành công',time()+1);
      header("Location: index.php?mod=employee&act=list");
    }
  }
  public function edit(){
    $EmployeeModels=new Employee();
    $MaNV=$_GET['MaNV'];
    $info=$EmployeeModels->detail($MaNV);
    $male="";
    $female="";
    $other="";
    if ($info["GioiTinh"]=="Nam") {
      $male="checked";
    }
    else if ($info["GioiTinh"]=="Nữ") {
      $female="checked";
    }
    else{
      $other="checked";
    }
    require("views/employee/update.php");
  }
  public function update(){
    $data= $_POST;
    unset($data['save']);
    $EmployeeModels=new Employee();
    $result= $EmployeeModels->update($data);
    if ($result==1) {
      setcookie('msg-unv','Cập nhật thành công',time()+1);
      header("Location: index.php?mod=employee&act=list");
    }
  }



}


?>
