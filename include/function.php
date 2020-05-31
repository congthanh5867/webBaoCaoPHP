<?php
	session_start();
	$_SESSION["token"] = md5(uniqid(mt_rand(), true));

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