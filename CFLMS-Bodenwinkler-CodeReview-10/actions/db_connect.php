<?php 
    $localhost = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "cr10-bodenwinkler-biglibrary";

    //Connecting:
    $connect = new mysqli($localhost, $username, $password, $dbname);

    //Checking if Connection is established:
    if($connect->connect_error) {
        die("connection failed: " . $connect->connect_error);
    } else {
        // echo "Connection Successful";
    }
?>