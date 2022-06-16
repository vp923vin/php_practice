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
    <!-- Navigation Bar starts from here -->
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
<!-- Navbar ends here -->

<?php
    // required variables declaration 
     $nameError = $emailError = $phoneError = $subjectError = "";
     $name = $email = $phone = $subject = $message = "";

     // check the input field is filled and filled correctly or not 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['name'])){
            $nameError = "Required";
        }else {
            $name = $_POST['name'];
        }

        if(empty($_POST['email'])){
            $emailError = "Required";
        } else{
           
          $email = $_POST['email']; 
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              $emailError = "Invalid email format";
            }
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

         $message = $_POST['message'];


        // connecting to the database 
        $severname = "localhost";
        $username = "root";
        $password = "";
        $database = "my_db";
        
        // Create a connection to the database
    
        $conn = mysqli_connect($severname, $username, $password, $database);
    
    
        // die if connectionis not eastablish
        if(!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
    
        }else{
            //echo " Successful connection! <br>";
            //submit these enteries to the database

       

            $sql = "INSERT INTO `contact` (`Sno`, `FullName`, `Email`, `PhoneNo`, `MessageSubject`, `Message`) 
                  VALUES ('', '$name', '$email', '$phone', '$subject', '$message')";
            $result = mysqli_query($conn, $sql);
            // check Value Insertion is  successful or not
            if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> your entry is saved into the database.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
            }
            else{ 
                //echo "Values is not Inserted successfully because this error : ". mysqli_error($conn);
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Technical Issue!</strong> your entry is not saved into the database, Please try after some time.
                "we regret the inconvenience caused"
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            
              }
          }
    }
?>
  

<!-- form fields -->
<div class="container mt-3">
    <h1>Please Fill Up the Form</h1>
    <form action="php025.php" method="post"><br>

        <input class="form-control " type="text" placeholder="Full Name" name="name" required/>
        <span class="text-danger">* <?php echo $nameError;?></span><br>

        <input class="form-control " type="text" placeholder="E-mail address" name="email" pattern="[^ @]*@[^ @]*" required/>
        <span class="text-danger">* <?php echo $emailError;?></span><br>

        <input class="form-control " type="tel" placeholder="Phone Number" name="phone" maxlength = "10" pattern="[1-9]{1}[0-9]{9}" required/>
        <span class="text-danger">* <?php echo $phoneError;?></span><br>

        <input class="form-control " type="text" placeholder="Subject" name="subject" required/>
        <span class="text-danger">* <?php echo $subjectError;?></span><br>

        <fieldset>
            <textarea name="message" id="message" class="form-control" placeholder="Your Message" 
            cols="30" rows="5" ></textarea>
        </fieldset><br>
        <input type="submit" class="btn btn-dark btn-lg">

    </form>   
</div>

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