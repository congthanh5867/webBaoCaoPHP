<?php
require_once('include/function.php');
$token= get_param("token");
if ($_SESSION["token"]==$token && isset($_SESSION['logged-in'])){

	unset($_SESSION['logged-in']);
	//Hủy bỏ phiên làm việc
	// unset all session
	session_destroy();


	header('Location: login.php');
	exit;
}
if ($_SESSION['id_role'] == "Admin") {
	header('Location: admin.php');

	exit;
}

if ($_SESSION['id_role'] == "Manager") {
	header('Location: manager.php');
	exit;
}
if ($_SESSION['id_role'] == "User") {
	header('Location: user.php');
	exit;
}
// unset($_SESSION['logged-in']);//Hủy bỏ phiên làm việc
// header('Location: login.php');
?>