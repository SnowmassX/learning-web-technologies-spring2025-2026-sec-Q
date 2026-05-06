<?php
    $host = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "lab-5";

    function getConnection(){
        global $host, $dbuser;
        $con = mysqli_connect($host, $dbuser, $GLOBALS['dbpass'], $GLOBALS['dbname']);
        return $con;
    }
?>