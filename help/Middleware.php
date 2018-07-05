<?php 
class Middleware{
	public function isLogin(){
     if (!isset($_SESSION['isLogin'])) {
     	header("Location: ?mod=login&act=form");
     }

	}
}

 ?>