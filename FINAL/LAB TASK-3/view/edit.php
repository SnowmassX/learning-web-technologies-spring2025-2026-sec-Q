<?php
    session_start();
    $products = $_SESSION['products'];
    $id = $_GET['id'];
    $product = [];
    foreach($products as $p){
        if($id == $p['id']){
            $product = $p;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
</head>
<body>
        <h1>Edit Prodcuts!</h1>
        <a href='products.php'>Back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="../controller/update.php" enctype="">
            ID: <input type="text" name="username" readonly value="<?=$user['id']?>"/> <br>
            NAME: <input type="text" name="username" value="<?=$user['name']?>"/> <br>
            
            <input type="submit" name="submit" value="Submit"/>
        </form>
</body>
</html>