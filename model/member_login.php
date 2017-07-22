<?php
session_start();
error_reporting(0);
require_once '../controller/UserLogin.php';
$login=new UserLogin();
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit']) ) {
        if (!empty($_POST['captcha_code'])) {
            $captchaCode = $_SESSION['captchaCode'];
            $enteredcaptchaCode = $_POST['captcha_code'];
            if ($enteredcaptchaCode === $captchaCode) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $login->login($username, $password);
            } else
                echo "<script>alert('Wrong Captcha')</script>";
                 echo "<script>window.location = '../userlogin.php'</script>";

        } else {
            echo "<script>alert('Please Complete Captcha Challenge')</script>";
            echo "<script>window.location = '../userlogin.php'</script>";
        }
    }
        else{
            if (!empty($_POST['captcha_code']) && $enteredcaptchaCode === $captchaCode) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $login->login($username, $password);
            } else
             echo "<script>alert('Wrong Captcha')</script>";
            echo "<script>window.location = '../userlogin.php'</script>";

        }

    }
    else{
    echo "get out from here";
    }
?>