<?php
require_once('include/function.php');
$token= get_param("token");
if ($_SESSION["token"]==$token && isset($_SESSION['logged-in'])){
	unset($_SESSION['logged-in']);//Hủy bỏ phiên làm việc
	header('Location: login.php');
}else if ($_SESSION['id_role'] == "Admin") {
	header('Location: admin.php');
}else if ($_SESSION['id_role'] == "Manager") {
	header('Location: manager.php');
}else if ($_SESSION['id_role'] == "User") {
	header('Location: user.php');
}
// unset($_SESSION['logged-in']);//Hủy bỏ phiên làm việc
// header('Location: login.php');
?>