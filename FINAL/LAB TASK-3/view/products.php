<?php

    session_start();
    
    $products = [
            ['id'=>1, 'name'=>'tea'],
            ['id'=>2, 'name'=>'biscuit'],
            ['id'=>3, 'name'=>'water'],
            ['id'=>4, 'name'=>'soap'],
            ['id'=>5, 'name'=>'shampoo']
    ];
    $_SESSION['products']= $products;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>User list </h1>
    <a href='home.php'>Back</a> |
    <a href='../controller/logout.php'>Logout</a>
    <br>

    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            
            <th>Action</th>
        </tr>

        <?php foreach($products as $product){ ?>

        <tr>
            <td><?php echo $product['id'];?></td>
            
            <td><?=$product['name']?></td>
            <td>
                <a href="edit.php?id=<?=$product['id']?>">EDIT </a> |
                <a href="delete.php">DELETE </a> |
                <a href="detail.php">DETAILS </a>
            </td>
        </tr>
        
        <?php } ?>
</table>
</body>
</html>