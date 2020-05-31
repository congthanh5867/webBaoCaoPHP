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
                <a class="nav-link" href="/ud">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Liên hệ</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
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
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
</div>
</div>
<div class="container-fluid">
    <div class="container">
        <section>
            <div class="row" style="margin-left: 0;margin-right: 0;">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="content-Left">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sidebar-left2">
                                <h3 class="sidebar-title">Menu</h3>
                                <ul class="sidebar-menu">
                                    <li><a href="/ud">Trang chủ</a> </li>
                                    <li class="has-child">
                                        <a href="#">Link<i class="icon"></i></a>
                                        <ul class="menu-sub">
                                            <li><a href="/ud/app/ExJS/PrimeNumber/">PrimeNumber</a> </li>
                                            <li><a href="/ud/app/ExJS/PrintWithFor/">PrintWithFor</a></li>
                                            <li><a href="/ud/app/ExJS/TimerCurent/">TimerCurent</a> </li>
                                            <li><a href="/ud/app/ExJS/TotalEven/">TotalEven</a> </li>
                                            <li><a href="/ud/app/ExJS/mapp/">Mapp</a> </li>
                                            <li><a href="/ud/app/ExJS/clock/">Clock</a> </li>
                                            <li><a href="/ud/app/ExJS/caculator/">Caculator</a> </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/congthanh9768">Facebook</a>
                                    </li>
                                    <li><a href="https://vn.linkedin.com/in/congthanh97">LinkedIn</a> </li>
                                    <li><a href="#">Liên hệ</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 10px;">
                            <div class="sidebar-left2">
                                <h3 class="sidebar-title">Top</h3>
                                <ul class="sidebar-menu">
                                    <li>
                                        <a href="#">List</a>
                                    </li>
                                    <li class="has-child">
                                        <a href="#">Link<i class="icon"></i></a>
                                        <ul class="menu-sub">
                                            <li><a href="/ud/app/ExJS/PrimeNumber/">PrimeNumber</a> </li>
                                            <li><a href="/ud/app/ExJS/PrintWithFor/">PrintWithFor</a></li>
                                            <li><a href="/ud/app/ExJS/TimerCurent/">TimerCurent</a> </li>
                                            <li><a href="/ud/app/ExJS/TotalEven/">TotalEven</a> </li>
                                            <li><a href="/ud/app/ExJS/mapp/">Mapp</a> </li>
                                            <li><a href="/ud/app/ExJS/clock/">Clock</a> </li>
                                            <li><a href="/ud/app/ExJS/caculator/">Caculator</a> </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Picture</a>
                                    </li>
                                    <li><a href="https://vn.linkedin.com/in/congthanh97">LinkedIn</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-9 col-sm- col-md- col-lg-9">
                    Phan viet content
                </div>
            </div>
        </section>
    </div>
</div>

<?php
    include("include/footer.php")
?>