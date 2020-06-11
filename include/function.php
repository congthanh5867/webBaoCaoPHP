<?php
	session_start();
	// $_SESSION["token"] = md5(uniqid(mt_rand(), true));
	if (empty($_SESSION['token'])) {
		if (function_exists('mcrypt_create_iv')) {
			$_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
		} else {
			$_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
		}
	}
	// $token = $_SESSION['token'];
	//bin2hex () chuyển đổi một chuỗi các ký tự ASCII thành các giá trị thập lục phân.
	//openssl_random_pseudo_bytes(): Tạo một chuỗi các byte ngẫu nhiên

	function get_param($param_name){
		$param_value = "";
		if(isset($_POST[$param_name]))
			$param_value = $_POST[$param_name];
		else if(isset($_GET[$param_name]))
			$param_value = $_GET[$param_name];
		return trim($param_value);
	}
	function location($url){
		echo '<script type="text/javascript">window.location = "'. $url . '";</script>';
	}

	//junset all session after

	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1200)) {
		session_unset();   
		session_destroy();   
	}
	$_SESSION['LAST_ACTIVITY'] = time(); 
?>