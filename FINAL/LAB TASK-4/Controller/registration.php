<?
    require_once('../Model/userModel.php');
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        if($email == "" || $password == "" || $name == ""){
            echo "null email or password!";
        }else {
            $user = ['Name'=>$name, 'Password'=>$password, 'Email'=>$email];
            $status = addUser($user);
            if($status){
               
                header('location: ../View/login.php');
            }else{
                header('location: ../View/register.php');
            }
        }
    }else{
        header('location: ../View/login.php');
    } 
?>