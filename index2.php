<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <link href="css/mainCss.css" type="text/css" rel="stylesheet">
</head>

<body>

<span id="beginPage"></span>

<!-- menu -->
<div class="topBar" style="z-index: 1000">
    <a href="Login2.php" class="btnReg" >ورود | ثبت نام</a>

    <div class="search-box" >
        <form>
            <input type="text" class="text-search" style="float: right" placeholder="ُکالا مورد نظر خود را جستجو کنید">
            <button type="submit" class="btn-search" style="float: right">
                <i class="fa fa-search"  style=""></i>
            </button>

        </form>
    </div>

    <img src="image/logo_base.jpg" class="main-logo">

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

<!-- banner 1 -->
<div class="mx-4" style="margin-top: 10px;">
    <div class="row">
        <div class="col-12">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/banner/desktop-slider-1.jpg" class="d-block w-100" alt="دکتر بن">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/banner/desktop-slider-2.jpg"  class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/banner/desktop-slider-3.jpg"  class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-6 col-sm-3 ">
            <div class="py-3">
                <img src="image/banner/cat_medium_1.jpg" class="w-100 rounded-2">
            </div>
        </div>
        <div class="col-6 col-sm-3 ">
            <div class="py-3">
                <img src="image/banner/cat_medium_2.jpg" class="w-100 rounded-2">
            </div>
        </div>
        <div class="col-6 col-sm-3 ">
            <div class="py-3">
                <img src="image/banner/cat_medium_3.jpg" class="w-100 rounded-2">
            </div>
        </div>
        <div class="col-6 col-sm-3 ">
            <div class="py-3">
                <img src="image/banner/cat_medium_4.jpg" class="w-100 rounded-2">
            </div>
        </div>
    </div>
</div>

<!-- products 1 -->
<div class="bg-light mx-4 mt-1 rounded-3 shadow p-4">
    <div class="fw-bold mb-3">
        پر فروش ها
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="border p-3 rounded shadow ms-2">
                <img src="image/product/small/1.jpg" class="w-100">
                <div class="caption-top my-2 text-danger">
                    <del>
                        قیمت 12000 تومان
                    </del>

                </div>
                <div class="caption-top my-2 text-success">
                    <big>
                        قیمت 12000 تومان
                    </big>
                </div>
                <form>
                    <button type="submit" class="btn btn-success mb-3">
                        X
                    </button>
                    <button type="submit" class="btn btn-danger float-start">
                        X
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border p-3 rounded shadow ms-2">
                <img src="image/product/small/2.jpg" class="w-100">
                <div class="caption-top my-2 text-danger">
                    <del>
                        قیمت 12000 تومان
                    </del>

                </div>
                <div class="caption-top my-2 text-success">
                    <big>
                        قیمت 12000 تومان
                    </big>
                </div>
                <form>
                    <button type="submit" class="btn btn-success mb-3">
                        X
                    </button>
                    <button type="submit" class="btn btn-danger float-start">
                        X
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border p-3 rounded shadow ms-2">
                <img src="image/product/small/3.jpg" class="w-100">
                <div class="caption-top my-2 text-danger">
                    <del>
                        قیمت 12000 تومان
                    </del>

                </div>
                <div class="caption-top my-2 text-success">
                    <big>
                        قیمت 12000 تومان
                    </big>
                </div>
                <form>
                    <button type="submit" class="btn btn-success mb-3">
                        X
                    </button>
                    <button type="submit" class="btn btn-danger float-start">
                        X
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border p-3 rounded shadow ms-2">
                <img src="image/product/small/1.jpg" class="w-100">
                <div class="caption-top my-2 text-danger">
                    <del>
                        قیمت 12000 تومان
                    </del>

                </div>
                <div class="caption-top my-2 text-success">
                    <big>
                        قیمت 12000 تومان
                    </big>
                </div>
                <form>
                    <button type="submit" class="btn btn-success mb-3">
                        X
                    </button>
                    <button type="submit" class="btn btn-danger float-start">
                        X
                    </button>
                </form>
            </div>
        </div>

    </div>

</div>

<!-- banner 2 -->
<div class="mx-4 mt-3">
    <div class="row">
        <div class="col-6">
            <img src="image/banner/banner-lg-1.jpg" class="w-100 rounded-2">
        </div>
        <div class="col-6">
            <img src="image/banner/banner-lg-2.jpg" class="w-100 rounded-2">
        </div>
    </div>
</div>

<!-- products 2 -->
<div class="bg-light mx-4 mt-3 rounded-3 shadow p-4">
    <div class="fw-bold mb-3">
        محصلات اخیر
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="border p-3 rounded shadow ms-2">
                <img src="image/product/big/1.jpg" class="w-100">
                <div class="caption-top my-2 text-danger">
                    <del>
                        قیمت 12000 تومان
                    </del>

                </div>
                <div class="caption-top my-2 text-success">
                    <big>
                        قیمت 12000 تومان
                    </big>
                </div>
                <form>
                    <button type="submit" class="btn btn-success mb-3">
                        X
                    </button>
                    <button type="submit" class="btn btn-danger float-start">
                        X
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border p-3 rounded shadow ms-2">
                <img src="image/product/big/2.jpg" class="w-100">
                <div class="caption-top my-2 text-danger">
                    <del>
                        قیمت 12000 تومان
                    </del>

                </div>
                <div class="caption-top my-2 text-success">
                    <big>
                        قیمت 12000 تومان
                    </big>
                </div>
                <form>
                    <button type="submit" class="btn btn-success mb-3">
                        X
                    </button>
                    <button type="submit" class="btn btn-danger float-start">
                        X
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border p-3 rounded shadow ms-2">
                <img src="image/product/big/3.jpg" class="w-100">
                <div class="caption-top my-2 text-danger">
                    <del>
                        قیمت 12000 تومان
                    </del>

                </div>
                <div class="caption-top my-2 text-success">
                    <big>
                        قیمت 12000 تومان
                    </big>
                </div>
                <form>
                    <button type="submit" class="btn btn-success mb-3">
                        X
                    </button>
                    <button type="submit" class="btn btn-danger float-start">
                        X
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border p-3 rounded shadow ms-2">
                <img src="image/product/big/1.jpg" class="w-100">
                <div class="caption-top my-2 text-danger">
                    <del>
                        قیمت 12000 تومان
                    </del>

                </div>
                <div class="caption-top my-2 text-success">
                    <big>
                        قیمت 12000 تومان
                    </big>
                </div>
                <form>
                    <button type="submit" class="btn btn-success mb-3">
                        X
                    </button>
                    <button type="submit" class="btn btn-danger float-start">
                        X
                    </button>
                </form>
            </div>
        </div>

    </div>

</div>


<!-- banner 2 -->
<div class="mx-4 mt-3">
    <div class="row">
        <div class="col-12">


            <img src="image/banner/banner-xlg.jpg" class="w-100 rounded-2">


        </div>
    </div>
</div>


<!--  footer -->
<div class="footer mt-3 px-5 p-3">
    <div class="text-center mb-5">

        <a href="#beginPage">
            <button style="font-size:24px;background-color: white ; color: black"> بازگشت به بالا <i class="fa fa-arrow-up"></i></button>
        </a>

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

    <div class="small text-center mb-2" style="font-family:Yekan">

        استفاده از مطالب فروشگاه اینترنتی کاردینال بیوتی فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است.
        <br>
        © 2023 - طراحی و توسعه توسط تیم فنی مهندسی پاسکال

    </div>

</div>


</body>
</html>