<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>RastaSalamat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/loginCss.css" rel="stylesheet" type="text/css">

</head>

<style>

    *{
        box-sizing: border-box;
    }

    body{
        background-color: WHITE;
        direction: ltr;
        background-image: url("image/c11ab56e93c1a2ffc34fad0b9e395724.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .box{
        background-color: rgba(239, 239, 239, 0.64);
        width: 420px;
        margin: 100px auto 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgb(185, 185, 185);
        padding: 40px;
        position: relative;
        transition: 0.5s;
        opacity: 1;
        display: block;
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
        border: 2px solid #f1f1f1;
        padding: 5px 6px;
        cursor: pointer;
    }
    .btn-success{
        background-color:midnightblue;
        color: white;
        border-radius: 1px;
        padding: 5px 6px;
        border: 2px solid #f1f1f1;
        cursor: pointer;
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

<form>

<div class="box" id="mainBox">
    <i class="fa fa-close close" onclick="close_box()"></i>


    <div style="text-align: center">
        <img src="image/477-4775793_relativity6-mit-who-icon-free-icon-man.png" class="userPic">
    </div>
    <div class="title">پنل ورود کاربران</div>
    <div class="controlBox input">
        <i class="fa fa-user"  style="float: left;font-size: 18px;margin-top: 8px;margin-left: 5px"></i>
        <input type="text" class="controlElement" placeholder="نام کاربری خود راروارد کنید">
    </div>


    <div class="controlBox input">
        <i class="fa fa-eye-slash" id="eye-slash" onclick="eye_slash()" style="float: left;font-size: 19px;margin-top: 8px;margin-left: 2px;cursor: pointer"></i>
        <i class="fa fa-eye" id="eye" onclick="eye()" style="float: left;font-size: 19px;margin-top: 8px;margin-left: 5px;cursor: pointer;display: none"></i>
        <input type="password" id="pass" class="controlElement" placeholder="کلمه عبور را وارد کنید">
    </div>


    <div class="btnForm">
        <div style="text-align:center">
        <button  class="btn btn-success" type="submit">
            <i class="fa fa-sign-in"></i>
            ورود
        </button>
</div>

        <div style="text-align: center">
        <button class="btn-danger" type="reset" value="Out">
            <i class="fa fa-sign-out"></i>
            خروج
        </button>
</div>

    </div>

</div>

</form>

<script>
function eye_slash(){
    document.getElementById('pass').type='text';
    document.getElementById('eye_slash').style.display ='none';
    document.getElementById('eye').style.display ='block';
}
function eye() {
    document.getElementById('pass').type = 'password';
    document.getElementById('eye_slash').style.display = 'block';
    document.getElementById('eye').style.display = 'none';
}
function close_box(){
    document.getElementById('mainBox').style.display='none';
   document.getElementById('mainBox').style.opacity='0';
}
</script>

</body>

</html>