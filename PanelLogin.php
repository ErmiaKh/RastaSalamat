<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RastaSalamat</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    *{
        box-sizing: border-box;
    }
    body{
        background-color: midnightblue;
        direction: ltr;
        background-image: url("image/41037559_l-1-2048x1536.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .box{
        background-color: #efefef;
        width: 420px;
        margin: 100px auto 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgb(185, 185, 185);
        padding: 40px;
        position: relative;
    }
    .input{
        width: 100%;
        padding: 6px 10px;
        border: none;
        outline: none;
        border-bottom: 1px solid #dad9d9;
        text-align: center;
    }
    .controlBox{
        margin-top: 20px;
    }
    .title{
        text-align: center;
        font-size: 25px;
    }
    .userPic{
        width: 90px;
        margin-top: -100px;
        border-radius: 50%;
    }
    .btn-danger{
        background-color:maroon;
        color: white;
        border: 3px solid #f1f1f1;
        padding: 3px 5px;
    }
    .btn-success{
        background-color:midnightblue;
        color: white;
        border-radius: 1px;
        padding: 3px 5px;
        border: 3px solid #f1f1f1;
    }
    .btnForm{
        text-align: center;
        margin-top: 20px;
        padding: 5px;
    }
    .close{
        position:absolute;
        left: 10px;
        top: 10px;
    }

</style>

<body>

<div class="box" style="text-align:right">

    <i class="material-icons">close</i>

    <div style="text-align: center">
        <img src="image/user-sign-icon-person-symbol-human-avatar-isolated-on-white-backogrund-vector.jpg" class="userPic">
    </div>

    <div class="title">
         پنل ورود کاربران
    </div>

    <div class="controlBox">
        <label>نام کاربری</label>
        <input type="text" class="input" placeholder="نام کاربری خود را وارد کنید">
    </div>

    <div class="controlBox">
        <label>رمز عبور</label>
        <input type="password" class="input" placeholder="رمز خود را وارد کنید">
    </div>

    <div class="btnForm">

        <button class="btn btn-success" type="submit" value="Login">
            <i class="fa fa-sign-in"></i>
            ورود
        </button>

        <button class="btn-danger" type="reset" value="Out">
            <i class="fa fa-sign-out"></i>
           خروج
        </button>

    </div>

</div>

</body>

</html>