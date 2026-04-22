<?php
session_start();

if(isset($_POST['submit'])){

    if(!isset($_SESSION['users'])){
        echo "No users registered!";
        exit();
    }

    $found = false;

    foreach($_SESSION['users'] as $u){
        if($u['username'] == $_POST['name'] && $u['password'] == $_POST['password']){
            
            $_SESSION['current_user'] = $u;
            $found = true;

            
 
            header('Location: ../view/prodcuts.php');
            exit();
        }
    }

    if(!$found){
        echo "Invalid Login!";
    }
}
?>