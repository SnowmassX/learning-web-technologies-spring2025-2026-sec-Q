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
    <title>Profile</title>
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
    <legend>PROFILE</legend>
    Name : <?= $user['name'] ?><br><hr>
    Email : <?= $user['email'] ?><br><hr>
    Gender : <?= $user['gender'] ?><br><hr>
    Date of Birth : <?= $user['date'] ?><br><hr>
</fieldset>

<footer>
    Copyright 2017
</footer>

</body>
</html>