<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAIL Form</title>
</head>
<body>
    <fieldset>
        <legend>EMAIL (A)</legend>
        <form action="index.php" method = "post">
            <input type="email" name="email"> <br><hr>
            <input type="submit" value= "submit" name="submit">
        </form>
    </fieldset>
    <br>
    <fieldset>
        <legend>EMAIL (B)</legend>
        <form action="" method = "post">
            <input type="email" name="email_b"> <br><hr>
            <input type="submit" value= "submit" name="submit_b">
        </form>
        <?php
            if(isset($_REQUEST['submit_b'])){
                $email_b = $_REQUEST['email_b'];
                echo $email_b;
            }
        ?>
    </fieldset>
    <br>
    <?php
        $retainedEmail = "";
        if (isset($_REQUEST['submit_c'])) {
        $retainedEmail = $_REQUEST['email_c'];
    }
    ?>
    <fieldset>
        <legend>EMAIL (C)</legend>
        <form action="" method = "post">
            <input type="email" name="email_c" value="<?php echo $retainedEmail; ?>"> <br><hr>
            <input type="submit" value= "submit" name="submit_c">
        </form>
    </fieldset>
    <?php
        if (isset($_REQUEST['submit_c'])) {
            echo $retainedEmail;
        }
    ?>
    <br>
</body>
</html>