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
       abstract class car{
           public $name;
           public $color;
           public function __construct($name, $color){
               $this->name = $name;
               $this->color = $color;
           }
           abstract function Message() ;
       } 

       class Tata extends car{
           function Message(){
             echo "$this->name car is amazing  $this->color looks great in this car <br>"; 
           }
       }

       class Mahindra extends car{
        function Message(){
          echo "$this->name car is shines in the dessert and  $this->color color is killer. <br>"; 
        }
    }

    class Maruti extends car{
        function Message(){
          echo "$this->name car is amazing  $this->color looks great in this car. <br>"; 
        }
    }

    class Hyundai extends car{
        function Message(){
          echo "$this->name car is fabulous  $this->color looks great in this car. <br>"; 
        }
    }

       $Tata = new Tata("Tata","black");
       $Tata->Message();

       $Maruti = new Maruti("Maruti Suzuki","white");
       $Maruti->Message();

       $Mahindra = new Mahindra("Mahindra thar","Red-black");
       $Mahindra->Message();

       $Hyundai = new Hyundai("Hyundai i20","grey");
       $Hyundai->Message();
   ?>

    
</body>
</html>