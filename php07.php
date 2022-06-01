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

   // Inheritence with overriding Methods
   // Fruits class starts here
    class Fruits{

        // properties 
        public $name;
        public $color;

        // Methods
        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        public function Message(){
            echo "Fruit : $this->name <br> color : $this->color <br>";
        }
    }
    // Fruits class ends here

    // New_Frits overriding class starts here 
    class New_Fruits extends Fruits {

        // properties
        public $Availiability;

        // Methods
        public function __construct($name, $color, $Availiability){
            $this->name = $name;
            $this->color = $color;
            $this->Availiability = $Availiability;
        }
        public function Message(){
            echo "<br> Fruit : $this->name <br> color : $this->color <br> Availiability : $this->Availiability <br>" ;
        }
    }
    // overriding class ends here

    // Multiple objects are created here
    $Mango = new New_Fruits("mango", "yellow", "Availiable");
    $Mango->Message();

    $Apple = new New_Fruits("Apple", "Red", "Availiable");
    $Apple->Message();

    $Grapes = new New_Fruits("Grapes", "Green", "Not Availiable");
    $Grapes->Message();
   ?>
    
</body>
</html>