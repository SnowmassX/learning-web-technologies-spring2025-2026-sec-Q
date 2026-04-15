<!DOCTYPE html>
<html>
<head>
    <title>Name Form</title>
</head>
<body>

    <fieldset>
        <legend>NAME (A)</legend>
        <form method="post" action="index.php">
            <input type="text" name="name"><br><hr>
            <input type="submit" value="Submit" name="submit">
        </form>
    </fieldset>

    <br>

    <fieldset>
        <legend>NAME (B)</legend>
        <form method="post" action="">
            <input type="text" name="name_b"><br><hr>
            <input type="submit" name="submit_b" value="Submit">
        </form>

        <?php
        if (isset($_REQUEST['submit_b'])) {
            echo $_REQUEST['name_b'];
        }
        ?>
    </fieldset>

    <br>

    <?php
    $retainedName = "";
    if (isset($_REQUEST['submit_c'])) {
        $retainedName = $_REQUEST['name_c'];
    }
    ?>

    <fieldset>
        <legend>NAME (C)</legend>
        <form method="post" action="">
            <input type="text" name="name_c" value="<?php echo $retainedName; ?>"><br><hr>
            <input type="submit" name="submit_c" value="Submit">
        </form>

        <?php
        if (isset($_REQUEST['submit_c'])) {
            echo $retainedName;
        }
        ?>
    </fieldset>

</body>
</html>