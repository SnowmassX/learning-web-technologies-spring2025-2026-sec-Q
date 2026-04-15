<?php
session_start();

if(!isset($_SESSION['current_user'])){
    header("Location: login.php");
    exit();
}

if(isset($_POST['submit'])){

    // update current_user
    $_SESSION['current_user']['name'] = $_POST['name'];
    $_SESSION['current_user']['email'] = $_POST['email'];
    $_SESSION['current_user']['gender'] = $_POST['gender'];
    $_SESSION['current_user']['date'] = $_POST['date'];


    echo "Profile Updated!";
}

$user = $_SESSION['current_user'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<a href="edit_profile_picture.php">Change Profile Picture</a> |
<a href="change_password.php">Change Password</a> <br><br><br>
    <fieldset>
        <legend>EDIT PROFILE</legend>
        <form method="post">
    Name : <input type="text" name="name" value="<?= $user['name'] ?>"><br><hr>

    Email : <input type="email" name="email" value="<?= $user['email'] ?>"><br><hr>

    <fieldset>
        <legend>Gender</legend>
        <input type="radio" name="gender" value="Male" <?= ($user['gender']=="Male")?"checked":"" ?>> Male
        <input type="radio" name="gender" value="Female" <?= ($user['gender']=="Female")?"checked":"" ?>> Female
        <input type="radio" name="gender" value="Other" <?= ($user['gender']=="Other")?"checked":"" ?>> Other
    </fieldset>

    <fieldset>
        <legend>Date of Birth</legend>
        <input type="date" name="date" value="<?= $user['date'] ?>"><br>
    </fieldset>

    <input type="submit" name="submit">
    </fieldset>
    <footer>
    Copyright 2017
</footer>
</form>
</body>
</html>