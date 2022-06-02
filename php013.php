<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops Concepts - Traits</title>
</head>
<body>
   <?php

    // trait is the solution of to inherit multiple behaviour from classes.

    // traits declartion
       trait Message{
           
        //methods
           function msg1(){
               echo "Oops concepts are amazing,";
           }
           function msg3(){
            echo "Oops tell us to that your code must be DRY(donot repeat yourself).";
        }
       }

       // another traits for multiple levels
        trait OopsMessage{
        function msg2(){
            echo " these concepts helps to reduce the code and makes code reusable. <br>";
        }
        }
        
        // traits are used by multiple class
        class Oops{
            use Message, OopsMessage;
        }

        class pass{
            use Message;
        }
        
        // objects are created
        $obj = new Oops();
        $obj->msg1();
        $obj->msg2();
        echo "<br>";

        $obj2 = new pass();
        $obj2->msg3();

   ?>
</body>
</html>