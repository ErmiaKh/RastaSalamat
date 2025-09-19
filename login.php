<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/loginCss.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <link href="css/mainCss.css" type="text/css" rel="stylesheet">
    
</head>
<body>
<!-- menu -->
<div class="topBar" style="z-index: 1000">
    <a href="login.html" class="btnReg" >ورود | ثبت نام</a>

    <div class="search-box" >
        <form>
            <input type="text" class="text-search" style="float: right" placeholder="ُکالا مورد نظر خود را جستجو کنید">
            <button type="submit" class="btn-search" style="float: right">
                <i class="fa fa-search"  style=""></i>
            </button>

        </form>
    </div>

    <img src="images/logo_base.jpg" class="main-logo">

</div>

<!-- navbar -->
<nav class="navbar navbar-expand-sm bg-light navbar-light" style="margin-top: 100px;box-shadow: 0 1px 2px #dcdcdc;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            کاردینال بیوتی
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">خانه</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">محصولات</a>
                    <ul class="dropdown-menu text-end">
                        <li><a class="dropdown-item" href="#">زیبایی</a></li>
                        <li><a class="dropdown-item" href="#"> پزشکی</a></li>
                        <li><a class="dropdown-item" href="#">بهداشتی </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">تماس با ما</a>
                </li>

            </ul>
        </div>
    </div>
</nav>



<form method="" action="">
    <div class="box" id="mainBox">
        <i class="fa fa-close close" onclick="close_box()"></i>


        <div style="text-align: center">
            <img src="images/user.jpg" class="userPic">
        </div>
        <div class="title">پنل ورود کاربران</div>
        <div class="controlBox input">
            <i class="fa fa-user"  style="float: left;font-size: 18px;margin-top: 8px;margin-left: 5px"></i>
            <input type="text" class="controlElement" placeholder="نام کاربری خود راروارد کنید">
        </div>
        <div class="controlBox input">
            <i class="fa fa-eye-slash" id="eye-slash" onclick="eye_slash()" style="float: left;font-size: 18px;margin-top: 8px;margin-left: 5px;cursor: pointer"></i>
            <i class="fa fa-eye" id="eye" onclick="eye()" style="float: left;font-size: 18px;margin-top: 8px;margin-left: 5px;cursor: pointer;display: none"></i>
            <input type="password" id="pass" class="controlElement" placeholder="کلمه عبور را وارد کنید">
        </div>
        <div class="btnForm">
            <button  class="btn btn-success" type="submit" >
                <i class="fa fa-sign-in"></i>
                ورود کاربران
            </button>
            <input class="btn btn-danger" type="reset" value="انصراف">
        </div>
    </div>
</form>


<!--  footer -->
<div class="footer mt-3 px-5">
    <div class="text-center mb-5">
        <a href="#beginPage">
            <button class="btn-arrow">
                <i class="fa fa-arrow-up"></i>
            </button>
        </a>
    </div>
    <div class="row">
        <div class="col-12 col-sm-3">
            <h6 style="margin-right: 35px;">راهنمای خرید از کاردینال بیوتی</h6>
            <ul class="list-unstyled">
                <li>نحوه ثبت سفارش</li>
                <li>رویه ارسال سفارش</li>
                <li>شیوه‌های پرداخت</li>
            </ul>
        </div>
        <div class="col-12 col-sm-3">
            <h6 style="margin-right: 35px;">خدمات مشتریان</h6>
            <ul class="list-unstyled">
                <li>پاسخ به پرسش‌های متداول</li>
                <li>تماس با ما</li>
                <li>درباره ما</li>
            </ul>
        </div>
        <div class="col-12 col-sm-6">
            <h6 class="float-start" style="margin-right: 35px;">
                از تخفیف‌ها و جدیدترین‌های فروشگاه باخبر شوید:
            </h6>
            <div class="footer-box">
                <form>
                    <button type="submit" class="btn-search" style="float: left">
                        ارسال
                    </button>
                    <input type="text" class="text-search w-50" style="float: left" placeholder="ُآدرس ایمیل خود را وارد کنید">
                </form>
            </div>
            <h6 class="float-start mt-3" style="margin-right: 35px;">
                ما را در شبکه های اجتماعی دنبال کنید.
            </h6>

        </div>
    </div>
    <hr>
    <div class="small text-center mb-2" style="font-family: pascalIranian-Sans">
        استفاده از مطالب فروشگاه اینترنتی کاردینال بیوتی فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است.
        <br>
        © 2023 - طراحی و توسعه توسط تیم فنی مهندسی پاسکال

    </div>
</div>

<script>
    function eye_slash(){
        document.getElementById('pass').type='text';
        document.getElementById('eye-slash').style.display = 'none';
        document.getElementById('eye').style.display = 'block';
    }
    function eye(){
        document.getElementById('pass').type='password';
        document.getElementById('eye-slash').style.display = 'block';
        document.getElementById('eye').style.display = 'none';
    }
    function close_box(){
        document.getElementById('mainBox').style.marginTop='50px';
        document.getElementById('mainBox').style.opacity='0'
        document.getElementById('mainBox').style.display='none'
    }
</script>
</body>
</html>