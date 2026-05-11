<?php
    require_once('../Model/userModel.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="login.php">login</a>
    <a href="register.php">register</a>
    <a href="home.php">home</a>
    <a href="../Controller/logout.php">logout</a><br><br>
    welcome home<a href="id=<?=$user['id']?>">EDIT </a>
</body>
</html>