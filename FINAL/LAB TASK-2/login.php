<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <header>
            
            <a href="home.php">Home</a>
            <a href="login.php">login</a>
            <a href="register.php">Registration</a>
    </header> <br><br><br>
    <fieldset>
        <legend>LOGIN</legend>
        <form action="" method="post">
            User Name : <input type="text" name="name"><br>
            Password : <input type="password" name="password"><br><hr>
            <input type="checkbox" name="remember_me" id="" > Remember Me <br>
            <input type="submit" name="submit">
            <a href="forgot_password.php">Forgot Password?</a>
        </form>
    </fieldset><br><br><br>
    <footer>
        copyright 2017

    </footer>
</body>
</html>
<?php
session_start();

if(isset($_POST['submit'])){

    // prevent error if no users
    if(!isset($_SESSION['users'])){
        echo "No users registered!";
        exit();
    }

    $found = false;

    foreach($_SESSION['users'] as $u){
        if($u['username'] == $_POST['name'] && $u['password'] == $_POST['password']){
            
            $_SESSION['current_user'] = $u;
            $found = true;

            // COOKIE (Remember Me)
            if(isset($_POST['remember_me'])){
                setcookie("username", $_POST['name'], time()+3600); // 1 hour
            }

            header("Location: dashboard.php");
            exit(); // VERY IMPORTANT
        }
    }

    if(!$found){
        echo "Invalid Login!";
    }
}
?>