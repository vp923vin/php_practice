<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops concept</title>
</head>
<body>
   <?php

    // static Properties in last code we studied static methods
    //    class Name{
    //        public static $pi_value = 3.14;
    //    }
    //    echo Name::$pi_value;


    // static properties are used within a class with self keyword
    // class Name{
    //     public static $pi_value = 3.14;
    //     public function staticValue(){
    //        echo self::$pi_value;
    //     }
    // }
    // $pi =new Name();
    // echo $pi->staticValue();

    //

    class pi {
        public static $value = 3.14;
    }

    class pu extends pi{
        public function xstatic(){
            return parent::$value;
        }
    }

    // Get the value of static property directly via child class
    echo pu::$value;
    echo "<br>";

    // or get value of static property via xStatic() method
    $pu = new pu();
    echo $pu->xStatic();



    
   ?>
    
</body>
</html>