<?php
include_once("db.php");
function addUser($user)
{
    $con = getConnection();
    $sql = "insert into employee values('','{$user['name']}','{$user['contact']}','{$user['username']}', '{$user['password']}')";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
function deleteUser($id)
{

}
function updateUser($user)
{

}
function searchUserById()
{

}
function displayAll()
{
    $con = getConnection();
    $sql = "select * from employee";
    $users = mysqli_query($con, $sql);
    return $users;
}
?>