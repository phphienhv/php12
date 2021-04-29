<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
	require_once "html/head.php"
	?>
</head>

<body>
<?php
$msg='';
    if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['pass'])) {
        if(($_POST['email'] == 'admin@gmail.com') && ($_POST['pass'] == '123456')) {
            header("Location: admin.php");}
        elseif(($_POST['email'] == 'hailan@gmail.com') && ($_POST['pass'] == '123456')) {
            header("Location: member.php");}
    }else{
        $msg = 'Đăng nhập không thành công';
        }

?> 
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/hinh-01.png" alt="IMG">
                </div>
                <form class="login100-form validate-form" action="" method="POST">
                    <span class="login100-form-title">
                        Thành viên đăng nhập
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            Đắng ký tài khoản
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php 
	require_once "html/scripts.php"
	?>
</body>

</html>