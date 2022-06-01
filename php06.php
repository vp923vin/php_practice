<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops Concepts</title>
</head>
<body>
   <?php
   // Inheritence with protected access modifier 

       class Fruits{

        // Properties of Fruits class
           public $name;
           public $color;
           
        // Methods of Fruits class   
           public function __construct($name, $color){
              $this->name = $name;
              $this->color = $color;
              $this->Message(); // we can call this function from any public function but inside the class because 
                                // we are accessing protected class and if want to access private then you have to call
                                //  this function inside public function of that class where you written private function 
           }            
           protected function Message(){
            echo "New Fruit Detail : ";
              
        }             
       }
       
       // inherited class is created here
       class New_fruit extends Fruits{

           // methods of New_fruit class
           public function Fruit_info(){
            echo "The fruit is $this->name  and color of the fruit is $this->color";
            echo "<br>";
        } 
       }
      
       // classes are called here i.e. objects are created
       $mango = new New_fruit("Mango", "yellow");
    //    $mango->Message(); //here this will throw an error beacuse u are trying to access protected class
       $mango->Fruit_info();  

       $Apple = new New_fruit("Apple", "Red");
       $Apple->Fruit_info(); 

       $Grapes = new New_fruit("Grapes", "green");
       $Grapes->Fruit_info();

       $BlueBerry = new New_fruit("BlueBerry", "Purle");
       $BlueBerry->Fruit_info();
   ?>
</body>
</html>