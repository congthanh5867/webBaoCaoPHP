<?php 
//------------Kết nối cơ sở dữ liệu
require_once('include/function.php');
require_once('Connections/Myconnection.php');

//-----------Kiểm tra phiên làm việc của admin
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true ||$_SESSION["id_role"]!="Admin") {
	header('Location: login.php');
	exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
</head>

<body>
    <div class="container-fluid">
        <?php
            include("include/header.php")
        ?>
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
            <img src="img/avatar.jpg" alt="" id="avatar">
            <!-- <a class="navbar-brand" href="#"><img src="img/avatar.jpg" alt="" id="avatar"></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Welcome
                            <?php echo $_SESSION['ma_nhan_vien']." | " .$_SESSION['id_role'] ; ?></a>
                        <!-- <a class="nav-link" href="/ud">Trang chủ <span class="sr-only">(current)</span></a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/ud/app/ExJS/">ExJquery</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/ud/app/yoursearch/">Search Me</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/ud/app/love/">Love</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="logout.php" style="float:right">Logout</a>
                </form>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style=" background: burlywood; height: 300px;">
                    content left Admin
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style=" background: aqua; height: 300px;">
                    content Right Admin
                </div>
            </div>
        
        </div>

    </div>
    <?php
        include("include/footer.php")
    ?>
</body>

</html>