<?php 
include("models/Product.php");
class ProductController{
	public function list(){
		$productModels= new Product();
		$data= $productModels->All();
		require("views/product/products.php");
	}
	public function detail(){
		$productModels= new Product();
		$MaSP= $_GET['MaSP'];
		$product=$productModels->detail($MaSP);
		require("views/product/detail.php");
	}
	public function delete(){	
		$productModels= new Product();
		$MaSP= $_GET['MaSP'];
		$result= $productModels->delete($MaSP);
		if ($result==1) {
			setcookie('msg-s','Xóa thành công ',time()+1);
		}
		else{
			setcookie('msg-f','Xóa sản phẩm không thành công',time()+1);
		}
		header("Location: index.php?mod=product&act=list");
	}
	public function add(){
		require("views/product/add.php");
	}
	public function store(){
		$data=$_POST;
		unset($data['save']);
		$productModels= new Product();
		$result=$productModels->create($data);
		if ($result==1) {
			setcookie("msg-add","Thêm thành công ",time()+1);
			header("Location: ?mod=product&act=list");
		}
	}
	public function edit(){
		$productModels= new Product();
		$MaSP=$_GET['MaSP'];
		$product= $productModels->detail($MaSP);
		require("views/product/update.php");
	}
		public function update(){
		$data=$_POST;
		unset($data['save']);
		$productModels= new Product();
		$result=$productModels->update($data);
		if ($result==1) {
			setcookie("msg-update","Thêm thành công ",time()+1);
			header("Location: ?mod=product&act=list");
		}
	}	
}
?>
