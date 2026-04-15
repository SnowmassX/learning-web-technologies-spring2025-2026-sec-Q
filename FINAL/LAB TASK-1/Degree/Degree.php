<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree Form</title>
</head>
<body>
    <fieldset>
        <legend>DEGREE (A)</legend>
        <form action="index.php" method= "post" >
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="BSc"> BSc 
            <input type="checkbox" name="degree[]" value="BSc"> MSc <br><hr>
            <input type="submit" name = "submit" value = "submit">
        </form>
    </fieldset>
    <br>
    <fieldset>
        <legend>DEGREE (B)</legend>
        <form action="" method= "post" >
            <input type="checkbox" name="degree_b[]" value="SSC"> SSC
            <input type="checkbox" name="degree_b[]" value="HSC"> HSC
            <input type="checkbox" name="degree_b[]" value="BSc"> BSc 
            <input type="checkbox" name="degree_b[]" value="BSc"> MSc <br><hr>
            <input type="submit" name = "submit_b" value = "submit">
        </form>
        <?php
            if (isset($_REQUEST['submit_b'])) {
                foreach ($_REQUEST['degree_b'] as $d) {
                    echo $d . " ";
                }
            }
        ?>
    </fieldset>
    <br>
    <?php
        $degrees = [];
        if (isset($_REQUEST['submit_c'])) {
            $degrees = $_REQUEST['degree_c'];
        }       
    ?>
    <fieldset>
        <legend>DEGREE (A)</legend>
        <form action="" method= "post" >
            <input type="checkbox" name="degree_c[]" value="SSC"
                <?php if (in_array("SSC", $degrees)) echo "checked"; ?>> SSC

            <input type="checkbox" name="degree_c[]" value="HSC"
                <?php if (in_array("HSC", $degrees)) echo "checked"; ?>> HSC

            <input type="checkbox" name="degree_c[]" value="BSc"
                <?php if (in_array("BSc", $degrees)) echo "checked"; ?>> BSc

            <input type="checkbox" name="degree_c[]" value="MSc"
                <?php if (in_array("MSc", $degrees)) echo "checked"; ?>> MSc>  
            <br><hr>
            <input type="submit" name = "submit_c" value = "submit">
        </form>
        <?php
            foreach ($degrees as $d) {
                echo $d . " ";
            }
        ?>
    </fieldset>
    <br>
</body>
</html>