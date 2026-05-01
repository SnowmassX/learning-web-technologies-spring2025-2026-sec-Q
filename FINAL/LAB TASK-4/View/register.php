<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <a href="login.php">login</a>
    <a href="register.php">register</a>
    <a href="home.php">home</a>
    <fieldset>
        <legend>Register</legend>
        <form action="../Controller/registration.php" method="post">
            Name: <input type="text" name="name"><br>
            Password: <input type="password" name="password"><br>
            Email: <input type="email" name="email"><br>
            <input type="submit" name="submit">
        </form>
    </fieldset>

</body>

</html>