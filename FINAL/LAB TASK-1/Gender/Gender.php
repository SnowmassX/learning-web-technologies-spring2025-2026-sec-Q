<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender form</title>
</head>
<body>
    <fieldset>
        <legend>GENDER (A)</legend>
        <form action="index.php" method ="post" >
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other <br><hr>
            <input type="submit" name="submit">
        </form>
    </fieldset>
    <br>
    <fieldset>
        <legend>GENDER (B)</legend>
        <form action="" method ="post" >
            <input type="radio" name="gender_b" value="Male"> Male
            <input type="radio" name="gender_b" value="Female"> Female
            <input type="radio" name="gender_b" value="Other"> Other <br><hr>
            <input type="submit" name="submit_b">
        </form>
        <?php
            if(isset($_REQUEST['submit_b'])){
                $gender = $_REQUEST['gender_b'];
                echo $gender;
            }
        ?>
    </fieldset>
    <br>
    <?php
        $retainedGender = "";
        if(isset($_REQUEST['submit_c'])){
            $retainedGender = $_REQUEST['gender_c'];
        }
    ?>
    <fieldset>
        <legend>GENDER (C)</legend>
        <form action="" method ="post" >
            <input type="radio" name="gender_c" value="Male"
                <?php if ($retainedGender == "Male") echo "checked"; ?>> Male

            <input type="radio" name="gender_c" value="Female"
                <?php if ($retainedGender == "Female") echo "checked"; ?>> Female

            <input type="radio" name="gender_c" value="Other"
                <?php if ($retainedGender == "Other") echo "checked"; ?>> Other <br><hr>
            <input type="submit" name="submit_c">
        </form>
        <?php
            if(isset($_REQUEST['submit_c'])){
            echo $retainedGender;           
        }
        ?>
    </fieldset>
    <br>
</body>
</html>