<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <a href="login.php">login</a>
    <a href="register.php">register</a>
    <a href="home.php">home</a>
    <a href="../Controller/logout.php">logout</a>
    <fieldset>
        <legend>Login</legend>
        <form action="../Controller/loginCheck.php" method="post">
            Email: <input type="email" name="email"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="submit">
        </form>
    </fieldset>
</body>
</html>