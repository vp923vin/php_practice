<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "customer";

    $conn= mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("not connected :". mysqli_connect_error());
    }
    
?>