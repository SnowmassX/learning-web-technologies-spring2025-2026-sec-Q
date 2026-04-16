<?php
session_start();

if(!isset($_SESSION['current_user'])){
    header("Location: login.php");
    exit();
}

$user = $_SESSION['current_user'];

if(isset($_POST['submit'])){

    $current = $_POST['current'];
    $new = $_POST['new'];
    $retype = $_POST['retype'];

    if($current == "" || $new == "" || $retype == ""){
        echo "All fields required!";
    }
    elseif($current != $user['password']){
        echo "Current password is wrong!";
    }
    elseif($new != $retype){
        echo "New passwords do not match!";
    }
    else{
        $_SESSION['current_user']['password'] = $new;


        echo "Password changed successfully!";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <header>
    Logged in as <?= $user['username'] ?> |
    <a href="logout.php">Logout</a>
</header>

<br>

<a href="dashboard.php">Dashboard</a> |
<a href="profile.php">View Profile</a> |
<a href="edit_profile.php">Edit Profile</a> |
<a href="edit_profile_picture.php">Change Profile Picture</a> |
<a href="change_password.php">Change Password</a>

<fieldset>
    <legend>CHANGE PASSWORD</legend>
    <form method="post">
    Current Password : <input type="password" name="current"><br>
    New Password : <input type="password" name="new"><br>
    Retype Password : <input type="password" name="retype"><br>
    <input type="submit" name="submit">
</form>
</fieldset>
<footer>
    Copyright 2017
</footer>
</body>
</html>