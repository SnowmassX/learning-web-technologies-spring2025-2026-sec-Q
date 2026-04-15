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
            Email : <input type="email" name="email"><br>
            User Name : <input type="text" name="username"><br>
            Password : <input type="password" name="password"><br>
            Confirm Password : <input type="password" name="confirmpassword"><br>
            Gender <br>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other <br>
            </fieldset>
            <fieldset>
                <legend>Date of Birth</legend>
                <input type="date" name="date"><br>
            
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
<?php
session_start();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'] ?? "";
    $date = $_POST['date'];

    if($name == "" || $password == "" || $username == "" || $email == "" || $date == "" || $confirmpassword == "" || $gender == ""){
        echo "All fields required!";
    }
    elseif($password != $confirmpassword){
        echo "Password does not match!";
    }
    else{
        $user = [
            "name" => $name,
            "email" => $email,
            "username" => $username,
            "password" => $password,
            "gender" => $gender,
            "date" => $date,
            "photo" => 'uploads/download.png'
        ];

        $_SESSION['users'][] = $user;

        echo "Registration Successful!";
        header('location: login.php');
    }
}
?>