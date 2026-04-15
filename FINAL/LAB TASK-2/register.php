<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <header>
            
            <a href="home.php">Home</a>
            <a href="login.php">login</a>
            <a href="register.php">Registration</a>
    </header> <br><br><br>
    <fieldset>
        
        <legend>Registration</legend>
        <form action="" method="post">
            Name : <input type="text" name="name"><br>
            Email : <input type="email" name="name"><br>
            User Name : <input type="text" name="name"><br>
            Password : <input type="password" name="name"><br>
            Confirm Password : <input type="confirm password" name="name"><br>
            Gender <br>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other <br>
            </fieldset>
            <fieldset>
                <legend>Date of Birth</legend>
                <input type="date" name="name"><br>
            
            </fieldset>
            <input type="submit" name="submit">
            <input type="reset" name="reset"><br>
        </form>
    </fieldset><br><br><br>
    <footer>
        copyright 2017

    </footer>
</body>
</html>