<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/mainCss2.css" rel="stylesheet" type="text/css">
    <link href="../fonts" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<a href="javascript: void(0)" class="" onclick="openMenu()">
    <i class="fa fa-bars" style="color: black; font-style: 25px"></i>
</a>

<div class="rightMenu" id="rightMenu">
    <a href="javascript: void(0)" class="close" onclick="CloseMenu()">
        <i class="fa fa-close" style="color: black; font-style: 25px"></i>
    </a>

    <div class="adminPicBox">
        <img src="image/user-sign-icon-person-symbol-human-avatar-isolated-on-white-backogrund-vector (2)" class="adminPic">
        <div class="colorNot">
                <span>
                    <h2 style="text-align: center">
                       ارمیا خباززاده
                    </h2>
                </span>
        </div>
    </div>

    <div class="searchBox">
        <form method="post" action="">
            <input type="search" class="search" placeholder="جستجو کنید...">
        </form>
    </div>


    <div>
        <ul class="menu">
               <li>
                <a href="">
                    خانه
                </a>
               </li>

            <li> <a href="">
                محصولات
            </a>
            </li>

            <li>
                <a href="">
                کاربران
            </a>
            </li>

            <li>
                <a href="">
                    نظرات
                </a>
            </li>

            <li>
                <a href="">
                    مدیران
                </a>
            </li>

            <li>
                 <a href="">
                خروج
                 </a>
            </li>

        </ul>
    </div>


</div>

<script>
    function CloseMenu(){
        document.getElementById('rightMenu') .style.right='-300px';
    }
    function openMenu(){
        document.getElementById('rightMenu') .style.right='0';
    }
</script>

</body>
</html>