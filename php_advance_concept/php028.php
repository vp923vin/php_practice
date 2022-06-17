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

    // records Updation Query
    $sql = "DELETE FROM `contact` WHERE `Sno` = '11' ";
    $result = mysqli_query($conn, $sql);
    
    $aff = mysqli_affected_rows($conn);
    echo "Number of effected rows : ". $aff."<br>" ;

    if($result){
        echo "Deleted Successfully!<br>";
    }
    else{
        $err = mysqli_error($conn);
        echo "Unable to delete because of this reason : ". $err;
    }
    
    
?>