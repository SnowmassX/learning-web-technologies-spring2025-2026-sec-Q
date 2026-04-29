<?php
require_once('db.php');

function login($user){
    $con = getConnection();
    $sql = "select * from user where password='{$user['Password']}' and email='{$user['Email']}'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1){
        return true;
    }else{
        return false;
    }
}

function addUser($user){
    $con = getConnection();
    $sql = "insert into user values('','{$user['Name']}','{$user['Password']}','{$user['Email']}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function getUserById($id){

}

function updateUser($user){

}

function deleteUser($id){

}
