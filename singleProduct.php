<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/singleProduct.css" type="text/css">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <link href="css/mainCss.css" type="text/css" rel="stylesheet">
</head>
<body>
<span id="beginPage"></span>

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


<div class="main" style="margin-top: 10px;">
    <div class="singleProductBox">
        <div class="picture">
            <div class="coverMain">
                <img src="images/product/big/1.jpg" class="bigImage" id="bigImage">
                <!--<div>
                    <i class="fa fa-search"></i>
                </div>-->
            </div>
            <div style="text-align: center">
                <!--<i class="fa fa-circle" style="color: black"  onclick="changePic1()"></i>
                <i class="fa fa-circle" style="color: black"  onclick="changePic2()"></i>
                <i class="fa fa-circle" style="color: black"  onclick="changePic3()"></i>-->
                <br>
                <img src="images/product/small/1.jpg" class="smallImage" onclick="changePic1()">
                <img src="images/product/small/2.jpg" class="smallImage" onclick="changePic2()">
                <img src="images/product/small/3.jpg" class="smallImage" onclick="changePic3()">
            </div>
        </div>
        <div class="description">
            <div style="color: #5e5e5e">
                دستگاه پلاژن سه هندپیس استرلیزه دار نیوفیس 2022
            </div>
            <hr>
            <div style="color: #1e1e1e;margin-top: 7px;">
                New Face Sterilized Handpiece Insertion Device2022
            </div>
            <div style="color: #1e1e1e;margin-top: 7px;">
                <i class="fa fa-circle" style="color: #bbbbbb;font-size: 9px;"></i>
                <i class="fa fa-circle" style="color: #bbbbbb"></i>
                <span>
                    برند : متفرقه
                </span>
            </div>
            <div style="color: #1e1e1e;margin-top: 7px;">
                <i class="fa fa-circle" style="color: #bbbbbb;font-size: 9px;"></i>
                <i class="fa fa-circle" style="color: #bbbbbb"></i>
                <span>
                    کد محصول: ASFR24
                </span>
            </div>
            <div style="color: #1e1e1e;margin-top: 7px;">
                <i class="fa fa-circle" style="color: #bbbbbb;font-size: 9px;"></i>
                <i class="fa fa-circle" style="color: #bbbbbb"></i>
                <span>
                    قیمت :
                </span>
                <b>
                    990000 تومان
                </b>
            </div>

            <div style="color: #1e1e1e;margin-top: 15px;">
                <a href="" class="buyProduct">
                    <i class="fa fa-shopping-cart" ></i>
                    افزودن به سبد خرید

                </a>
            </div>

        </div>
    </div>
</div>

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
    function changePic1(){
        document.getElementById('bigImage').src='images/product/big/1.jpg';
    }
    function changePic2(){
        document.getElementById('bigImage').src='images/product/big/2.jpg';
    }
    function changePic3(){
        document.getElementById('bigImage').src='images/product/big/3.jpg';
    }
</script>
</body>
</html>