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
     
     $sql = "INSERT INTO `employee_table` (`Sno`, `Fname`, `Lname`, `Salary`) 
              VALUES ('', 'Vipin', 'Patel', '2000')";
     $result = mysqli_query($conn, $sql);
     
 
     // check Value Insertion is  successful or not
     if($result){
         echo "Values is Inserted successfully! <br> ";
     }
     else{ 
         echo "Values is not Inserted successfully because this error : ". mysqli_error($conn);
     }
?>