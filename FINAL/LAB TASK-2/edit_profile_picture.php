<?php
session_start();

if(!isset($_SESSION['current_user'])){
    header("Location: login.php");
    exit();
}

$user = $_SESSION['current_user'];

if(isset($_POST['submit'])){

    $file = $_FILES['file']['name'];

    if($file != ""){
        move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$file);

        $_SESSION['current_user']['photo'] = $file;

        $user = $_SESSION['current_user'];

        echo "Profile picture updated!";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
</head>
<body>

<header>
    Logged in as <?= $user['name'] ?> |
    <a href="logout.php">Logout</a>
</header>

<br><br><br>

<a href="dashboard.php">Dashboard</a> |
<a href="profile.php">View Profile</a> |
<a href="edit_profile.php">Edit Profile</a> |
<a href="edit_profile_picture.php">Change Profile Picture</a> |
<a href="change_password.php">Change Password</a>
<br><br><br>
<fieldset>
    <legend>PROFILE PICTURE</legend>
    <form method="post" enctype="multipart/form-data">
    
    <img src="uploads/<?= $user['photo']  ?>" width="100"><br><br>

    <input type="file" name="file"><br><hr>
    <input type="submit" name="submit">
</form>
    
</fieldset>

<footer>
    Copyright 2017
</footer>

</body>
</html>