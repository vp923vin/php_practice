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

       //properties for objects
       class student{
           public $name;
           public $stands;
           public $DOB;
           public $marks;
           public $grade;
           
           // methods for objects
           function __construct($name, $stands, $DOB, $marks, $grade){
               $this->name = $name;
               $this->stands = $stands;
               $this->DOB = $DOB;
               $this->marks = $marks;
               $this->grade = $grade;

           }
            // this function runs on script ending and here this fuction runs for decending order as object created
           function __destruct(){
               echo "Student {$this->name} class {$this->stands} 
               date-of-birth {$this->DOB} got {$this->marks} precentage and his grade is {$this->grade}.";
               echo "<br>";   
           }
       }
        // object created here
       $Ajay = new student("Ajay", "11th", "15-10-1997", "80%", "A" );
       $vipin = new student("vipin", "12th", "5-10-1997", "85%", "A" );
       // messages 
       echo "student marks info <br>";
    ?>
    
</body>
</html>