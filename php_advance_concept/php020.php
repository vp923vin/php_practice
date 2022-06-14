<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <title>Php Form Validation</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GET/POST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Php_practice/php_advance_concept/php020.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
     $nameError = $emailError = $phoneError = $subjectError = "";
     $name = $email = $phone = $subject = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['name'])){
            $nameError = "Required Please enter your $name";
        }else {
            $name = $_POST['name'];
        }

        if(empty($_POST['email'])){
            $emailError = "Required";
        } else {
            $email = $_POST['email'];
        }

        if(empty($_POST['phone'])){
            $phoneError = "Required";
        }else {
            $phone = $_POST['phone'];
        }

        if(empty($_POST['subject'])){
            $subjectError = "Required";
        }else {
            $subject = $_POST['subject'];
        }

    }
?>
  


<div class="container mt-3">
    <h1>Please Fill Up the Form</h1>
    <form action="php020.php" method="post"><br>

        <input class="form-control " type="text" placeholder="Full Name" name="name" >
        <span class="text-danger">* <?php echo $nameError;?></span><br>

        <input class="form-control " type="text" placeholder="E-mail address" name="email" >
        <span class="text-danger">* <?php echo $emailError;?></span><br>

        <input class="form-control " type="number" placeholder="Phone Number" name="phone" >
        <span class="text-danger">* <?php echo $phoneError;?></span><br>

        <input class="form-control " type="text" placeholder="Subject" name="subject" >
        <span class="text-danger">* <?php echo $subjectError;?></span><br>

        <fieldset>
            <textarea name="message" id="message" class="form-control" placeholder="Your Message" 
            cols="30" rows="5" ></textarea>
        </fieldset><br>
        <input type="submit" class="btn btn-dark btn-lg">

        <!-- <button type="submit" class="btn btn-dark">
            <a class="text-decoration-none text-white" href="php020.php">Send Message</a>
        </button> -->

    </form>   
</div>

<!-- <h1> your  input</h1> -->








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->
  </body>
</html>