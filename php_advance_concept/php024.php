<?php
    $servername = "localhost";
    $username= "root";
    $password= "";
    $database = "Employee";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("can't connect to local server! : ". mysqli_connect_error());
    }
    
    $sql = "INSERT INTO `employee_table` (`Sno`, `Fname`, `Lname`, `Salary`) 
    VALUES ('', 'atul', 'Patel', '5000')";
    $result = mysqli_query($conn, $sql);
    if($result){
        $last_id = mysqli_insert_id($conn);
        echo "New Record is created successfully. <br> Last inserted id is : ". $last_id;
    }else{
        echo "Error :".$sql."<br>". mysqli_error($conn);
    }
    mysqli_close($conn);

?>