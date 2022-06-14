<?php
     echo "<h2>Learning How to connect Database</h2>";

     // connecting to the database
 
     $severname = "localhost";
     $username = "root";
     $password = "";
     $database = "Employee";
     
     // Create a connection to the database
 
     $conn = mysqli_connect($severname, $username, $password, $database);
 
 
     // die if connectionis not eastablish
     if(!$conn){
         die("Sorry we failed to connect: ". mysqli_connect_error());
 
     }else{
         echo " Successful connection! <br>";
     }
     
 
     // Creating database
    $sql = "CREATE TABLE `employee_table` 
        ( `Sno` INT NOT NULL AUTO_INCREMENT , 
        `Fname` VARCHAR(10) NOT NULL , 
        `Lname` VARCHAR(10) NOT NULL , 
        `Salary` INT(10) NOT NULL , PRIMARY KEY (`Sno`))";
    $result = mysqli_query($conn, $sql);
     
 
     // check database creation is  successful or not
     if($result){
         echo "Table is created successfully! <br> ";
     }
     else{ 
         echo "Table is not created successfully because this error : ". mysqli_error($conn);
     }
?>