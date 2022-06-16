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
        echo "Connection Successfull! ";
    }
    
    $sql = "SELECT * FROM `contact` ";
    $result = mysqli_query($conn, $sql);
    
    // Finding the no. of records return 
    $num = mysqli_num_rows($result);
    echo "the no. of rows in the database is : ". $num . "<br>" ;

    // Display the the number of rows returned by the database
    if($num>0){
         

        // checking how the value is retrieved from the database
        // this function return value untill Null

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row). "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row). "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row). "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row). "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row). "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row). "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row). "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row). "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row). "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row). "<br>";

        // we are fetching database values from this part
        while($row = mysqli_fetch_assoc($result)){
            // echo var_dump($row)."<br>";

            echo "<br>".$row['Sno'] .". Hello <strong>". $row['FullName'] . "</strong> Your email is <strong>" 
            . $row['Email'] . "</strong> your phone no is <strong>".$row['PhoneNo'] . 
            "<br></strong> you have contacted us for <strong>" .$row['MessageSubject'].
            " <br></strong> and  your message is ". $row['Message']. "<br>"; 
        
        }

    }
?>