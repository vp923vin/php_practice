<?php
    echo "<h2>Learning How to connect Database</h2>";

    // connecting to the database

    $severname = "localhost";
    $username = "root";
    $password = "";
    
    // Create a connection to the database

    $conn = mysqli_connect($severname, $username, $password);


    // die if connectionis not eastablish
    if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());

    }else{
        echo " Successful connection! <br>";
    }
    

    // Creating database
    $sql = "CREATE DATABASE Employee";
    $result = mysqli_query($conn, $sql);
    

    // check database creation is  successful or not
    if($result){
        echo "database is created successfully! <br> ";
    }
    else{ 
        echo "database is not created successfully because this error : ". mysqli_error($conn);
    }
    
?>