<?php
if(isset($_POST['username'])){
    if($_POST['username']==='admin' && $_POST['password']=== '123'){
        header("location: index.php");
    }else{
        echo '<div class="container pt-2 alert alert-danger">نام کاربری یا کلمه عبور نادرست است</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="../css/fonts.css" rel="stylesheet" type="text/css">
    <script src="../js/bootstrap.js"></script>
</head>
<body>
<div class="container">

    <div class="shadow bg-light w-75 m-auto mt-5 rounded-3 px-5 py-2">
        <div class="row">
            <div class="text-center" style="font-family: pascalIranian-Sans">
                <h4>ورود مدیریت سایت</h4>
            </div>
            <div class="col-md-6 col-12">
                <div class="text-center mb-3">
                    <img src="../image/user.jpg" class="rounded-circle img-thumbnail" style="width: 100px;">
                </div>
                <form method="post" action="adminLogin.php">
                    <div class="mb-4">
                        <input type="text" name="username" class="form-control" placeholder="نام کاربری">
                    </div>
                    <div class="mb-4">
                        <input type="password" name="password" class="form-control" placeholder="کلمه عبور ">
                    </div>
                    <div class="mb-4 text-center">
                        <input type="submit" class="btn btn-success" value="ورود به سایت">
                        <input type="reset" class="btn  btn-danger" value="فرم خالی">
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-12">
                <img src="image/login.png" class="w-100">
            </div>
        </div>
    </div>
</div>
</body>
</html>