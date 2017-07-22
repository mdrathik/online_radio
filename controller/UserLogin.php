<?php
require_once '../controller/dashboard.php';

class UserLogin {
    public function login($username,$password){
        $object=new DashBoard();
        $login="SELECT * FROM userlogin WHERE username='$username' and password='$password'";

        try {
            $count=0;
            $result=$object->Query($login);
            foreach ($result as $kry){
                $count++;
                $userid=$kry['id'];
            }

            if ($count==1){
                $_SESSION['username']=$username;
                $_SESSION['user_id']=$userid;
                echo "<script>window.location = '../index.php'</script>";
            }

            else{
                echo "<script>alert('You have to register. Please click on register')</script>";
                echo "<script>window.location = '../userlogin.php'</script>";
            }
        }
        catch (Exception $e){
            echo $e->getMessage();
        }

    }

}

?>