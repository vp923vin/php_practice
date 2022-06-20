<?php
    
     $login = false;
     $showError = false;
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
    include "assets/_dbconnect.php";
   
    $username = $_POST['username'];
    $password = $_POST['password'];
        $sql = "SELECT * FROM `customer_info` WHERE `username` = '$username' AND `password` = '$password'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
          
            
            session_start();
            $login = true;
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: welcome.php");
        }
    else{
        $showError = true;
    }

    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php require 'assets/_nav.php' ?>
   <?php
        if($login){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>success!</strong> You are loggedin.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        } 
        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> You have entered wrong credentials!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        } 
   ?>
    

    <div class="container mt-5">
        <h1 class="text-center">Please Login in Our Website</h1>
        <form action="login.php" method="post" class="d-flex flex-column align-items-center">
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp"> 
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary col-md-6">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>