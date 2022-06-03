<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Conecpts</title>
</head>
<body>
   <?php
       // Date and time functios
       echo "hello!<br>";
       date_default_timezone_set("Asia/Kolkata");
    //    echo date("y-m-d, H:i:sa, l"); 
      // echo date(" l"); 


      $d = mktime(2,34,57,5,2,2022);
      echo date("y.m.d H:i:sa",$d);

   ?>
    
</body>
</html>