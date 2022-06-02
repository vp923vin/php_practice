<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops Concept</title>
</head>
<body>
   <?php
       // Use of Interface or we can call it polymorphism
       // interface defined
         interface Animal{
             function MakeSound();
         } 

        // class defined
         class Dog implements Animal{

            // Methods
             function MakeSound()
             {
                 echo "Bark"; 
             }
            }
        class Cat implements Animal{
            function MakeSound()
            {
                echo "Meow"; 
            }
        }
        class Mouse implements Animal{
            function MakeSound()
            {
                echo "Squeak"; 
            }
        }
         
        // objects created as a list 
        $Dog = new Dog();
        $Cat = new Cat();
        $Mouse = new Mouse();
        $animals = array($Dog,$Cat,$Mouse);
        
        // loop the list
        foreach($animals as $x){
                $x->MakeSound();
                echo "<br>";
        }
        
   ?>
    
</body>
</html>