<?php
//--------Kết nối cơ sở dữ liệu
require_once('include/function.php');
require_once('Connections/Myconnection.php');

$submit = get_param('submit');
if ($submit <> "") {

    //-----Lọc dữ liệu chống tấn công SQL
    $ma_nhan_vien = mysqli_real_escape_string($Myconnection, get_param('ma_nhan_vien'));
    $mat_khau = md5(get_param('mat_khau'));


    mysqli_select_db($Myconnection, $database_Myconnection);
    //-------Truy vấn dữ liệu
    $query_RCNguoidung = "SELECT * FROM tlb_nguoi_dung,tlb_nhan_vien 
    WHERE tlb_nguoi_dung.ma_nhan_vien= tlb_nhan_vien.ma_nhan_vien and  tlb_nguoi_dung.ma_nhan_vien = '" . $ma_nhan_vien . "' and mat_khau = '" . $mat_khau . "' ";

    $RCNguoidung = mysqli_query($Myconnection, $query_RCNguoidung) or die(mysqli_error($Myconnection));
    
    $row_RCNguoidung = mysqli_fetch_assoc($RCNguoidung);

    $totalRows_RCNguoidung = mysqli_num_rows($RCNguoidung);

    $id_role = $row_RCNguoidung['id_role'];
    mysqli_free_result($RCNguoidung);


    //------ kiểm tra và xác thực đăng nhập
    //Nếu thông tin đăng nhập không đúng, số dòng dữ liệu truy vấn =0

    if ($totalRows_RCNguoidung == 0) {
        echo '<script language="javascript">alert("Vui lòng nhập lại !");</script>';
        location("login.php");
    }
    //Nếu <script language="javascript">alert(" Đăng nhập thành công");</script> sẽ phân quyền và lưu lại Session
    else {
        if ($id_role == 0) // Admin
        {
            $_SESSION['logged-in'] = true;
            $_SESSION['ma_nhan_vien'] = $row_RCNguoidung['ma_nhan_vien'];
            $_SESSION['id_role'] = "Admin";
            echo '<script language="javascript">alert(" Đăng nhập thành công");</script>';
            $url = "admin.php";
            location($url);
            exit;
        }
        if ($id_role == 1) //Manager
        {
            $_SESSION['logged-in'] = true;
            $_SESSION['ma_nhan_vien'] = $row_RCNguoidung['ma_nhan_vien'];
            $_SESSION['id_role'] = "Manager";
            echo '<script language="javascript">alert(" Đăng nhập thành công");</script>';
            $url = "manager.php";
            location($url);
            exit;
        }
        if ($id_role == 2) // User
        {
            $_SESSION['logged-in'] = true;
            $_SESSION['ma_nhan_vien'] = $row_RCNguoidung['ma_nhan_vien'];
            $_SESSION['id_role'] = "User";
            echo '<script language="javascript">alert(" Đăng nhập thành công");</script>';
            $url = "user.php";
            location($url);
            exit;
        }
    }
}
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Đăng nhập</title>

    <link rel="stylesheet" href="frontEnd/css/login.css" type="text/css" media="all">

</head>

<body>
    <h1>Hello login</h1>
    <div class="w3layoutscontaineragileits">
        <!--Form đăng nhập-->
        <h2>Form Login</h2>
        <form action="#" method="post">
            <!--  csrf -->
            <input type="hidden" name="csrf" value="<?php echo $_SESSION["token"]; ?>">
            <!--  csrf -->
            <input type="text" Name="ma_nhan_vien" placeholder="Name" required="">
            <input type="password" Name="mat_khau" placeholder="PASSWORD" required="">
            <div class="aitssendbuttonw3ls">
                <input type="submit" name="submit" value="LOGIN">
            </div>
        </form>
    </div>
    <br />
    <br />
    <?php
    include("include/footer.php")
?>

</body>