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
        // access modifiers 
        // 1 - public (default)
        // 2 - protected
        // 3 - private
        // properties 

       class bike{
           public $name;
           public $model;
           public $cc;
           protected $parts;
           private $engine_work;
        
        // Methods
        // by defaults properties and methods are treated as public
            function __construct($name, $model, $cc, $parts, $engine_work ){
                $this->name = $name;
                $this->model = $model;
                $this->cc = $cc;
                $this->parts = $parts;
                $this->engine_work =$engine_work;
           }

           function __destruct(){
               echo "Bike {$this->name} {$this->model} {$this->cc}cc has {$this->parts} parts and works on {$this->engine_work}";
           }
        }

        $Husqvarna = new bike("Husqvarna", "Svartpilion", "250", "metallic", "thermodynamics");

        echo "bike info in detail <br>";
    ?>


    
</body>
</html>