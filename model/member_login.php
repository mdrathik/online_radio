<?php
session_start();
require_once '../controller/UserLogin.php';
$login=new UserLogin();

if ($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $login->login($username,$password);
    }

    else{
        echo  "please submit valid data";
    }
}
else
{
    echo "get out from here";
}
?>