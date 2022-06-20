<?php
session_start();

if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']) != true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>welcome to our website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php require 'assets/_nav.php' ?>


    <div class="container d-flex flex-column align-items-center mt-5">
        <div class="alert alert-success col-md-8 " role="alert">
            <h4 class="alert-heading">welcome - <?php echo $_SESSION['username']; ?>!</h4>
            <p>Hey <?php echo $_SESSION['username']; ?> Welcome to our website and i hope you like our products.
                Aww yeah, you successfully read this important alert message. This example text is going to run a
                bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to logout you can leave wtih the help of this button
                <button  class="btn btn-sm btn-primary">
                    <a href="logout.php" class="text-light text-decoration-none">Logout</a>
                </button>.
            </p>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>