<?php
require_once('include/function.php');
if (isset($_SESSION['logged-in'])) 
{
	unset($_SESSION['logged-in']);//Hủy bỏ phiên làm việc
}
header('Location: login.php');
?>