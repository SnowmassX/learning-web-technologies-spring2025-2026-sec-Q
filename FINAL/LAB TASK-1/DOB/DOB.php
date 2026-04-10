<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOB Form</title>
</head>
<body>
    <fieldset>
        <legend>DOB (A)</legend>
        <form action="index.php" method = "post">
            <input type="date" name="date"><br><hr>
            <input type="submit" value= "submit" name="submit">
        </form>
        
    </fieldset>
    <br>
    <fieldset>
        <legend>DOB (B)</legend>
        <form action="" method = "post">
            <input type="date" name="date_b"><br><hr>
            <input type="submit" value= "submit" name="submit_b">
        </form>
        <?php
            if(isset($_REQUEST['submit_b'])){
                $dob = $_REQUEST['date_b'];
                echo $dob;
            }
        ?>
    </fieldset>
    <br>
    <?php
        $retainedDob ="";
        if(isset($_REQUEST['submit_c'])){
            $retainedDob = $_REQUEST['date_c'];
        }
    ?>
    <fieldset>
        <legend>DOB (C)</legend>
        <form action="" method = "post">
            <input type="date" name="date_c" value ="<?php echo $retainedDob;?>"><br><hr>
            <input type="submit" value= "submit" name="submit_c">
        </form>
        <?php
            if(isset($_REQUEST['submit_c'])){
                echo $retainedDob;
            }
        ?>
    </fieldset>
</body>
</html>