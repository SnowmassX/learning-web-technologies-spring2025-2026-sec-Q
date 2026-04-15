<?php
session_start();

if(!isset($_SESSION['current_user'])){
    header("Location: login.php");
    exit();
}

$user = $_SESSION['current_user'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
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
<a href="change_profile_picture.php">Change Profile Picture</a> |
<a href="change_password.php">Change Password</a>

<fieldset>
    <legend>PROFILE PICTURE</legend>
    <img src="" alt="profile picture"><br>
    <input type="file" name="file"><br><hr>
    <input type="submit" name="submit">
</fieldset>

<footer>
    Copyright 2017
</footer>

</body>
</html>