<?php 
include("models/Customer.php");
class CustomerController{
 public function list(){
  $customerModels=  new Customer();
  $data = $customerModels->All();
  require("views/customer/customer.php");
}
public function detail(){
  $customerModels=  new Customer();
  $MaKH= $_GET['MaKH'];
  $customer=$customerModels->detail($MaKH);
  require("views/customer/detail.php");
}
public function delete(){
  $customerModels=  new Customer();
  $MaKH= $_GET['MaKH'];
  $result= $customerModels->delete($MaKH);
  if ($result==1) {
    setcookie('msg-s','Xóa thành công ',time()+1);
  }
  else{
    setcookie('msg-f','Xóa sản phẩm không thành công',time()+1);
  }
  header("Location: index.php?mod=customer&act=list");
}
public function add(){
  require("views/customer/add.php");
}

public function store(){
  $data=$_POST;
  unset($data['save']);
  // $_SESSION['olds']['TenKH']=$data['TenKH'];
  // $_SESSION['olds']['MaKH']=$data['MaKH'];
  // $_SESSION['olds']['SĐT']=$data['SĐT'];
  // $_SESSION['olds']['Email']=$data['Email'];
  // $_SESSION['olds']['DiaChi']=$data['DiaChi'];
  // $_SESSION['olds']['GioiTinh']=$data['GioiTinh'];
  $customerModels=  new Customer();
  $result=$customerModels->create($data);
  if ($result==1) {
    setcookie('msg','Thêm mới thành công',time()+1);
    header("Location: index.php?mod=customer&act=list");
  }
  else{
    setcookie('msg-false','Mã vừa thêm đã tồn tại',time()+1);
    header("Location: index.php?mod=customer&act=add");

  }

}
public function edit(){
 $customerModels=  new Customer();
 $MaKH=$_GET['MaKH'];
 $male="";
 $female="";
 $other="";

 $info= $customerModels->detail($MaKH);
 if ($info["GioiTinh"]=="Nam") {
  $male="checked";
}
else if ($info["GioiTinh"]=="Nữ") {
  $female="checked";
}
else{
  $other="checked";
}
require("views/customer/update.php");
}
public function update(){
  $data=$_POST;
  unset($data['save']);
  $customerModels=  new Customer();
  $result=$customerModels->update($data);
  if ($result==1) {
    setcookie('msg-up','Cập nhật thành công',time()+1);
  }
  header("Location: index.php?mod=customer&act=list");
}
}
?>