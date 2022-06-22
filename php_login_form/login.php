<?php
    
    $login = false;
    $showError = false;
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
    include "assets/_dbconnect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
        // $sql = "SELECT * FROM `customer_info` WHERE `username` = '$username' AND `password` = '$password'";
        $sql = "SELECT * FROM `customer_info` WHERE `username` = '$username'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            while($row = mysqli_fetch_assoc($result)){
                if (password_verify($password, $row['password'])) {
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header("location: welcome.php");
                } 
                else{
                    $showError = true;
                }
            }
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
        <form id="msg-sent" action="login.php" method="post" class="d-flex flex-column align-items-center" >
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label" >Username</label>
                <input  type="text" name="username" id="username"  class="form-control" required maxlength="11" aria-describedby="emailHelp"> 
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label" >Password</label>
                <input type="password" name="password" id="password"  class="form-control" required maxlength="23">
            </div>
            
            <button type="submit" class="btn btn-primary col-md-6">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
    <!-- <script src="assets/js/form-validator.min.js"></script> -->
    <script src="assets/js/form-main.js"></script>
    <!-- <script src="assets/js/validation.js"></script> -->
    <!-- <script src="assets/js/form.js"></script> -->
    <script type="text/javascript">
        setForm('msg-sent');
    </script>
</body>

</html>