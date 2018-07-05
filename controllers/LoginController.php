<?php 
require("models/Employee.php");
class LoginController{
	public function loginForm(){
		if (isset($_SESSION['isLogin'])) {
			header("Location: index.php");
		}
		require("views/auth/login.php");
	}
	public function login(){
		$email=$_POST['Email'];
		$pass=$_POST['MatKhau'];
		$_SESSION['old']['Email']=$email;
		$Employee= new Employee();
		$result=$Employee->checkLogin($email,$pass);
		$nv= $Employee->find($email ,$pass);
		if ($result!=NULL) {
			$_SESSION['isLogin']=true;
			$_SESSION['user1']=$nv;
			$_SESSION['user']=$result;
			unset($_SESSION['old']['Email']);
			setcookie("msg-res","Đăng nhập thành công",time()+1);
			header("Location: index.php");
		}
		else{
			header("Location: ?mod=login&act=form");
		}
	}
	public function logout(){
		session_destroy();
		header("Location: ?mod=login&act=form");
	}



}
?>

