<?php
    require_once('../Model/userModel.php');
    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        if($email == "" || $password == ""){
            echo "null email or password!";
        }else {
            $user = ['Password'=>$password, 'Email'=>$email];
            $status = login($user);
            if($status){
                setcookie('status', 'true', time()+3000, '/');
                header('location: ../View/home.php');
            }else{
                header('location: ../View/login.php');
            }
        }
    }else{
        header('location: ../View/login.php');
    }   

?>