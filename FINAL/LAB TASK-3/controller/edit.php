<?
session_start();
    if(isset($_POST['submit'])){
        $name = $_GET['name'];
        $products = $_SESSION['products'];
        $products['name'] = $name;
    }
?>