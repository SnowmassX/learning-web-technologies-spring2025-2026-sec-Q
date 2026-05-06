<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>User list </h1>
    <a href='adminHome.php'>Back</a> |
    <a href='addUser.php'>Add Employee</a>
    <br>

    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>contact</th>
            <th>username</th>
            <th>password</th>
            <th>Action</th>
        </tr>

        <?php  
            include_once("../controller/userController.php");
            $users = displayAll();
            foreach($users as $user){
            ?>

        <tr>
            <td><?php echo $user['id'];?></td>
            <td><?php echo $user['name'];?></td>
            <td><?=$user['contact']?></td>
            <td><?=$user['username']?></td>
            <td><?=$user['password']?></td>
            <td>
                <a href="edit.php?id=<?=$user['id']?>">EDIT </a> |
                <a href="delete.php">DELETE </a> |
                <a href="detail.php">DETAILS </a>
            </td>
        </tr>
        
        <?php } ?>
</table>
</body>
</html>