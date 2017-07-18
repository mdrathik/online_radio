<?php
session_start();
require_once '../controller/dashboard.php';
$object=new DashBoard();


if ($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_POST['submit'])){
         $username=$_POST['username'];
         $pasword=$_POST['password'];
         $email=$_POST['email'];

        $register="INSERT INTO userlogin (username,password,email)
        VALUES ('$username','$pasword','$email')";
        $result=$object->execute($register);

        if ($result==true){
           echo "<script>window.location = '../userlogin.php'</script>";
        }
        else
            echo "Data Not inserted";
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