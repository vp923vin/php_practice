<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops concepts</title>
</head>
<body>
   <?php
   // abstract class without properties and methods 
       abstract class parentClass{

           // abstract method with one argument
           abstract function prefixName($gender);
       }
        
       // child class 
       class childClass extends parentClass{
            
            // method with some optional arguments
           function prefixName($gender, $name =" Vipin Patel", $greet = "Hello, ", $end=".")
           {
               if($gender == "Male"){
                   $prefix = "Mr.";
               }
               else{
                   $prefix = "Mrs.";
               }
              return "{$greet}{$prefix}{$name}{$end}";
           }

       }
       
       $class = new childClass;
       echo $class->prefixName("Male");
   ?>
    
</body>
</html>