<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops Concept - Static Keyword</title>
</head>
<body>
    <?php

    // introduction to static keyword
        // class NewClass{
        //     static function message(){
        //         echo "Namaskar!";
        //     } 
        // }
        // NewClass::message();
    
    // static method can be accessed from a method in the class using self keyword and double semicolon

    // class Newstatic{
    //     public static function message(){
    //         echo "Namaskar!";
    //     } 
    //     public function __construct(){
    //         self::message();
    //     }
    // }
    // new Newstatic();

    // static can also be called from other class methods

    class domain{
        protected static function greeting(){
            echo "Hello Friends!";
        }

    }

    class New_domain extends domain{
        public $web ;
        public function __construct()
        {
            $this->web = parent::greeting();
        }

    }

    $main =new New_domain();
    echo $main->web;
    ?>
    
</body>
</html>