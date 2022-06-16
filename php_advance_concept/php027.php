<?php
     // connection requirement to the database 
     $servername = "localhost";
     $username= "root";
     $password= "";
     $database = "my_db";
      
     // creating database connection
     $conn = mysqli_connect($servername, $username, $password, $database);
     
     // checking connection is success or not
     if(!$conn){
         die("can't connect to local server! : ". mysqli_connect_error());
     }
     else{
         echo "Connection Successfull!<br> ";
     }
     

     // usage of where clause which will fetch the value from database
     $sql = "SELECT * FROM `contact` WHERE `Sno` = '11' ";
     $result = mysqli_query($conn, $sql);

     $num = mysqli_num_rows($result);
     echo "the number of records are :". $num . "<br>";

     $no = 1;
     if($num){
        while($row = mysqli_fetch_assoc($result)){
            echo var_dump($result)."<br>";
            $no +=1;

        }
    }

    // records Updation Query
    $sql = "UPDATE `contact` SET `FullName` = 'Vipin' WHERE `Sno` = '11' ";
    $result = mysqli_query($conn, $sql);
    echo var_dump($result);

    if($result){
        echo "Successfully updated!<br>";
    }
    else{
        echo " we are unable to update the value";
    }
    
    $aff = mysqli_affected_rows($conn);
    echo "<br>Number of effected rows : ". $aff ;
?>