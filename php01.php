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
       
       class player{
           // properties
           public $name;
           public $speed = 5;
           public $running = false;

           // methods

           function set_name($name){
               $this->name = $name;
           }

           function get_name(){
               return $this->name;
           }
           function run(){
               $this -> running = true;
           }
           function stop_run(){
            $this -> running = false;
        }

       }
       $player1 = new player();
       $player1 -> set_name("vipin");
       echo $player1 -> get_name() ;
       echo "<br>";
       echo $player1 -> speed;
       echo "<br>";


       $player2 = new player();
       $player2 -> set_name("harry");
       echo $player2 -> get_name() ;
       echo "<br>";
       echo $player2 -> speed;
       echo "<br>";

       $player3 = new player();
       $player3 -> set_name("shivam");
       echo $player3 -> get_name() ;
       echo "<br>";
       echo $player3 -> speed;
       echo "<br>";
    ?>
    
</body>
</html>