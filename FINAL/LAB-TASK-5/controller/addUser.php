<?php
    require_once("../model/userModel.php");
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $contact = $_POST["contact"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $user =[
            "name"=> $name,
            "contact" => $contact,
            "username" => $username,
            "password"=> $password
        ];
        addUser($user);
    }
?>