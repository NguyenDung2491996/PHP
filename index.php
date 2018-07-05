<?php 
session_start();
// session_destroy();
include("help/Middleware.php");
$mid= new Middleware();

if(isset($_GET['mod'])){
	$mod=$_GET['mod'];
}
else{
	$mod='home';
}
if(isset($_GET['act'])){
	$act=$_GET['act'];
}
else{
	$act='dashboard';
}
switch ($mod) {
	case 'product':{
		include("controllers/ProductController.php");
		$productController= new ProductController();
		switch ($act) {
			case 'list':
			$productController->list();
			break;
			case 'detail':
			$productController->detail();
			break;
			case 'delete':
			$productController->delete();
			break;
			case 'add':
			$productController->add();
			break;
			case 'store':
			$productController->store();
			break;
			case 'edit':
			$productController->edit();
			break;
			case 'update':
			$productController->update();
			break;
			default:
			echo "";
			break;
		}
	}break;
	case 'customer':{
		include("controllers/CustomerController.php");
		$customerController= new CustomerController();
		switch ($act) {
			case 'list':
			$customerController->list();
			break;
			case 'detail':
			$customerController->detail();
			break;
			case 'delete':
			$customerController->delete();
			break;
			case 'add':
			$customerController->add();
			break;
			case 'store':
			$customerController->store();
			break;
			case 'edit':
			$customerController->edit();
			break;
			case 'update':
			$customerController->update();
			break;

			default:
			echo "";
				# code...
			break;
		}
	}
	break;
	case 'employee':{
		include("controllers/EmployeeController.php");
		$employeeController= new EmployeeController();
		switch ($act) {
			case 'list':
			$employeeController->list();
			break;
			case 'detail':
			$employeeController->detail();
			break;
			case 'delete':
			$employeeController->delete();
			break;
			case 'add':
			$employeeController->add();
			break;
			case 'store':
			$employeeController->store();
			break;
			case 'edit':
			$employeeController->edit();
			break;
			case 'update':
			$employeeController->update();
			break;
			default:echo "";
				# code...
			break;
		}
	}
	break;
	case 'home':{
		$mid->isLogin();
		include("controllers/HomeController.php");
		$homeController= new HomeController();
		switch ($act) {
			case 'dashboard':
			$homeController->show();
			break;
			default:echo "";
				# code...
			break;
		}
	}
	case 'login':{
		include("controllers/LoginController.php");
		$LoginController= new LoginController();
		switch ($act) {
			case 'form':
			$LoginController->loginForm();
			break;
			case 'post':
			$LoginController->login();
			break;
			case 'logout':
			$LoginController->logout();
			break;
			default:
			echo "";
				# code...
			break;
		}
	}
	break;
	case 'sale':{
		include('controllers/SaleController.php');
		$sale= new SaleController();
		switch ($act) {
			case 'create_bill':
			$sale->create_bill();
			break;
			case 'purchase':
			$sale->purchase();
			break;
			case 'sale':
			$sale->sale();
		   
			break;
			case 'add2cart':
			$sale->add2cart();
			break;
			case 'delete':
			$sale->delete();
			break;
			case 'deleteAll':
			$sale->deleteAll();
			break;
			case 'payment':
			$sale->payment();
			break;
			case 'bill_detail':
			$sale->billDetail();
			break;
			case 'destroy':
			$sale->destroy();
			break;
			case 'listBill':
			$sale->listBill();
			break;
			default:
			echo "khong ton tai";
			break;
		}
	}
	break;
	default:echo "";
	break;
}
?>
