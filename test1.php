<?php
if(isset($_POST['Username'])){
    if($_POST['Username']==='admin' && $_POST['Password']=== '123'){
         header("location: admin/index.php");
    }else{
        echo 'error';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="test1.php">
    <label>Username : </label>
    <br>
    <input type="text" name="Username">
    <br>
    <label>Password : </label>
    <br>
    <input type="password" name="Password">
    <br>
    <input type="submit" value="Login">
</form>
</body>
</html>