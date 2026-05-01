<?php
session_start();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'] ?? "";
    $date = $_POST['date'];

    if($name == "" || $password == "" || $username == "" || $email == "" || $date == "" || $confirmpassword == "" || $gender == ""){
        echo "All fields required!";
    }
    elseif($password != $confirmpassword){
        echo "Password does not match!";
    }
    else{
        $user = [
            "name" => $name,
            "email" => $email,
            "username" => $username,
            "password" => $password,
            "gender" => $gender,
            "date" => $date
        ];

        $_SESSION['users'][] = $user;

        echo "Registration Successful!";
        header('location: ../view/login.html');
    }
}
?>