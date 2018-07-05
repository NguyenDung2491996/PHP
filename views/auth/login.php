<?php 
// session_start();
//cấu hình thông tin do google cung cấp
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6LdvTVoUAAAAAAcmi1tea5q0Ovo3EePGyFQchsrA';
$secret_key  = '6LdvTVoUAAAAACHfBol9D1jC0flHGi-WUxhxyysv';

//kiem tra submit form
if(isset($_POST['submit']))
{
    //lấy dữ liệu được post lên
	$site_key_post    = $_POST['g-recaptcha-response'];

    //lấy IP của khach
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$remoteip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$remoteip = $_SERVER['REMOTE_ADDR'];
	}

    //tạo link kết nối
	$api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    //lấy kết quả trả về từ google
	$response = file_get_contents($api_url);
    //dữ liệu trả về dạng json
	$response = json_decode($response);
	if(!isset($response->success))
	{
		echo '';
	}
	if($response->success == true)
	{
		echo "<h3>Gửi dữ liệu thành công</h3>";
	}else{
		echo "";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<!-- <link rel="stylesheet" href="views/customer/CSS/bootstrap.min.css">
	<link rel="stylesheet" href="views/customer/CSS/Login.css">
	<script src="views/customer/JS/jquery.js"></script>
	<script src="views/customer/JS/bootstrap.min.js"></script>
	<script src="views/customer/JS/login.js"></script> -->
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="
	sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="views/customer/CSS/Login.css">

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<form action="?mod=login&act=post" method="POST" role="form">
			<legend>ĐĂNG NHẬP</legend>

			<div class="form-group">
				<label for="">Tên đăng nhập</label>
				<input type="text" class="form-control" id="mail" onkeyup="checkMail()" name="Email" value="<?php if(isset($_SESSION['old']['Email'])) echo $_SESSION['old']['Email'] ?>" placeholder="Email">
				<p id="error_mail"></p>
			</div>
			<div class="form-group">
				<label for="">Mật khẩu</label>
				<input type="password" class="form-control" id="pass" onkeyup="checkPass()" name="MatKhau" placeholder="Password">
				<p id="error_pass"></p>
				<div class="g-recaptcha" data-sitekey="<?=$site_key?>" style="margin-bottom: 12px;"></div>
			</div>



			<button type="submit" id="register" name="submit" class="btn btn-primary">Đăng nhập</button>
		</form>
	</div>
</body>