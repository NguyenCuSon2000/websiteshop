<?php
    
     $link = mysqli_connect("localhost","root","");
      mysqli_select_db($link, "websiteshop");
      if (isset($_POST['cmd'])) {
        $us = $_POST['username'];
        $pw = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username='$us' and password='$pw'";
        $check = mysqli_query($link, $sql);
        if (mysqli_num_rows($check) > 0) {
             header('Location: index.php');
        }else {
            require_once 'login.php';
        }
    }
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src=" https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="bg-img">
        <div class="content">
            <header>Đăng Nhập</header>
            <form method="POST" action="">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input id="username" type="text" class="form-control" placeholder="Username" name="username"  required  autofocus>
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input id="password" type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                </div>
                <div class="rememberpass"></div>
                <div class="pass">
                    <span><input type="checkbox" name="" value="" id="" >Nhớ mật khẩu</span> 
                    <a href="">Quên mật khẩu?</a>
                </div>
                <div class="field">
                    <input type="submit" value="LOGIN" name="cmd">
                </div>
            </form>
            <div class="login">
                Hoặc Đăng nhập với
            </div>
            <div class="links">
                <div class="facebook">
                    <i class="fab fa-facebook-f"><span>Facebook</span></i>
                </div>
                <div class="google">
                    <i class="fab fa-google"><span>Google</span></i>
                </div>
            </div>
            <div class="signup">
                Chưa có tài khoản?
                <a href="{{route('register')}}">Đăng ký ngay</a>
            </div>
        </div>
    </div> 
</body>
</html>