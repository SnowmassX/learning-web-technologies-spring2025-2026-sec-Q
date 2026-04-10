<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Form</title>
</head>
<body>
    <fieldset>
        <legend>BLOOD GROUP (A)</legend>
        <form action="index.php" method = "post">
            <select name="bg" id="">
                <option value="">Select</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
            </select><br><hr>
            <input type="submit" name="submit" value = "submit">
        </form>
    </fieldset>
    <br>
    <fieldset>
        <legend>BLOOD GROUP (B)</legend>
        <form action="" method = "post">
            <select name="bg_b" id="">
                <option value="">Select</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
            </select><br><hr>
            <input type="submit" name="submit_b" value = "submit">
        </form>
        <?php
            if(isset($_REQUEST['submit_b'])){
                $bg = $_REQUEST['bg_b'];
                echo $bg;
            }
        ?>
    </fieldset>
    <br>
    <?php
        $retainedBg = "";
        if(isset($_REQUEST['submit_c'])){
            $retainedBg = $_REQUEST['bg_c'];
        }
    ?>
    <fieldset>
        <legend>BLOOD GROUP (C)</legend>
        <form action="" method = "post">
            <select name="bg_c" id="" value = "<?php echo $retainedBg;?>">
                <option value="A+" <?php if ($retainedBg=="A+") echo "selected"; ?>>A+</option>
                <option value="B+" <?php if ($retainedBg=="B+") echo "selected"; ?>>B+</option>
                <option value="O+" <?php if ($retainedBg=="O+") echo "selected"; ?>>O+</option>
            </select><br><hr>
            <input type="submit" name="submit_c" value = "submit">
        </form>
    </fieldset>
    <?php
        if(isset($_REQUEST['submit_c'])){
            echo $retainedBg;
        }
    ?>
    <br>
</body>
</html>