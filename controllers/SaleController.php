<?php 
include_once("models/Sale.php");
include_once("models/Customer.php");
include_once("models/Employee.php");
include_once("models/Product.php");
include_once("models/BillDetail.php");
include_once("models/Bill.php");

class SaleController{
	var $sale;
	public function __construct(){
		$this->sale= new Sale();
	}
	public function create_bill(){
		// session_destroy();
		$customer = new Customer();
		$data = $customer->All();
		unset($_SESSION['KH']);
		unset($_SESSION['cart']);
		require_once("views/Sale/customer-sale.php");
	}
	public function purchase(){
		if (isset($_GET['MaKH'])) {
			$MaKH= $_GET['MaKH'];
			$customer= new Customer();
			$customer = $customer->detail($MaKH);
			// var_dump($customer);
			// die;
			$_SESSION['KH']= $customer;

			header("Location: ?mod=sale&act=sale");
		}
	}
	public function sale(){
		if (isset($_SESSION['KH'])){
			$customer = $_SESSION['KH'];
				// var_dump($customer);

			$cart= array();
			if (isset( $_SESSION['cart'])){
				$cart= $_SESSION['cart'];
			}
				//unset($_SESSION['cart']);
		}
			// die;
		$data= $this->sale->All();
		require_once("views/Sale/sale.php");
		// header("Location: ?mod=sale&act=index");
	}
	public function add2cart(){
		$code=$_GET['MaSP'];
		$quant = new Product();
		$count= $quant->getQuant($code);
		
		
		// date_default_timezone_set('Asia/Ho_Chi_Minh');

//echo date('d/m/Y h:i:s');
		if (isset($_SESSION['cart'][$code])) {
			if ($_SESSION['cart'][$code]['SoLuong']<$count && $count>=1) {
				$_SESSION['cart'][$code]['SoLuong']++;
			// $_SESSION['cart'][$code][4]=date('d/m/Y h:i:s');
				setcookie('msg-add','Thêm thành công',time()+1);
			}
			else{
				# code...

				setcookie('msg-error','Sản phẩm bạn chọn đã hết',time()+1);
			}
			

		}


		else{
			if ($_SESSION['cart'][$code]['SoLuong']<$count && $count>=1) {
				$result= $this->sale->detail($code);
				$result['SoLuong']=1;
	//Buoc 4:Dua san pham vao session gio hang
				$_SESSION['cart'][$code]=$result;

			// $_SESSION['cart'][$code][4]=date('d/m/Y h:i:s');
				setcookie('msg-add','Thêm thành công',time()+1);
			}
			else{
				setcookie('msg-error','Sản phẩm bạn chọn đã hết',time()+1);
			}
	//Buoc 2: Lay toan bo thong tin san pham thong qua $code gan vao bien $product
			
	//Buoc 3: Gan so luong la 1
			// $result= $this->sale->detail($code);
			// $result['SoLuong']=1;
	//Buoc 4:Dua san pham vao session gio hang
			// $_SESSION['cart'][$code]=$result;

			// $_SESSION['cart'][$code][4]=date('d/m/Y h:i:s');
			// setcookie('msg-add','Thêm thành công',time()+1);
		}
		header("Location: ?mod=sale&act=sale");
	}
	// public function findUser(){

	// }
	public function delete(){
		$code=$_GET['MaSP'];
		$result= $this->sale->detail($code);
		if ($_SESSION['cart'][$code]['SoLuong']>1) {
			$_SESSION['cart'][$code]['SoLuong']--;
			// $_SESSION['cart'][$code][4]=date('d/m/Y h:i:s');
			setcookie('msg-s','Xóa thành công',time()+1);
		}
		else{
			// $_SESSION['cart'][$code][4]=date('d/m/Y h:i:s');
			setcookie('msg-s','Xóa thành công',time()+1);
			unset($_SESSION['cart'][$code]);
		}
		header("Location: ?mod=sale&act=sale");

	}
	public function deleteAll(){
		$code=$_GET['MaSP'];
		$result= $this->sale->detail($code);
		if (isset($_SESSION['cart'][$code])) {
			setcookie('msg-s','Xóa thành công',time()+1);
			unset($_SESSION['cart'][$code]);

		}
		header("Location: ?mod=sale&act=sale");
	}
	public function payment(){
		
		$MaNV= $_SESSION['user1']['MaNV'];


		$customer =$_SESSION['KH'];
		// echo "<pre>";
		// 	print_r($customer);
		// echo "<pre>";
		// die;
		$cart= $_SESSION['cart'];
		$hoadon =array();
		$hoadon['MaHD']= $customer['MaKH'].'_'.$MaNV.'_'.time();
		$hoadon['MaKH']= $customer['MaKH'];
		$hoadon['MaNV']= $MaNV;
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$hoadon['NgayBan']= date('Y-m-d H:i:s');
     //Thêm hóa đơn
		$bill=  new Bill();
		$bill->create($hoadon);
     //Thêm chi tiết hóa đơn và cập nhật số lượng sản phẩm
		$tong_tien=0;
		foreach ($cart as $product) {
			$prod['MaHD']= $hoadon['MaHD'];
			$prod['MaSP']=$product['MaSP'];
			$prod['SoLuong']= $product['SoLuong'];
			$prod['DonGia']= $product['DonGia'];
			$prod['TongTien']= $product['SoLuong']*$product['DonGia'];
			$tong_tien+= $prod['TongTien'];

			$billDetail= new BillDetail();
			$billDetail->create($prod);
			
			$productModels = new Product();
			$productModels->reduceQuant($prod['MaSP'],$prod['SoLuong']);

		}
      // Update tổng tiền của hóa đơn
		$updateBill['MaHD'] = $hoadon['MaHD'];
		$updateBill= $tong_tien;
		$bill->update($updateBill);
	 //	Hủy SESSION cart và KH
		unset($_SESSION['cart']);
		unset($_SESSION['KH']);
		// unset($_SESSION['hoadon']);
		header('Location: ?mod=sale&act=bill_detail&MaHD='.$hoadon['MaHD']);
	}
	public function billDetail(){
		$MaHD =$_GET['MaHD'];
		$bill = new Bill();
		$bill_detail = new BillDetail();
		$hoadon = $bill->detail($MaHD);
		$customerModel = new Customer();
		$customer =$customerModel->detail($hoadon['MaKH']);
		$employeeModel = new Employee();
		$employee = $employeeModel->detail($hoadon['MaNV']);
		$bill_detail_list = $bill_detail->find($MaHD);
		// var_dump($employee);
		require("views/Sale/bill_detail.php");
	}

	public function destroy(){
		unset($_SESSION['cart']);
			// unset($_SESSION['KH']);
		setcookie("msg-des","Huỷ giỏ hàng thành công",time()+1);
		header('Location: ?mod=sale&act=sale');
	}
	public function listBill(){
		$bill = new Bill();
		$list_bill= $bill->ListBillByEmpl('');

			// echo $list_bill;
			// echo "string";
			// die;
		require_once("views/Sale/listBill.php");
	}

}

?>