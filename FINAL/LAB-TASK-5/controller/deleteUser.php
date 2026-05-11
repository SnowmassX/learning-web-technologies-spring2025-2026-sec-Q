<?php
require_once("../model/userModel.php");
    $id = $_GET["id"];
    if(deleteUser($id)){
        echo"true";
    }
    else{
        header("location: ../view/adminHome.php");
    }
    
    header("location: ../view/userList.php");
?>