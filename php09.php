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
       // OOps Constant Keyword
       // constant calling outside class
    class Bye{
        const MESSAGE = "declare constant so use capital letter because it is case-sensitive or use all small letters"; 
    }
    echo Bye::MESSAGE;

    // constant calling inside class 
    class Goodbye{
        const NEW_MESSAGE = "<br> Your constant is called inside the class";
        public function byebye(){
            echo Goodbye::NEW_MESSAGE;
        }
    }
    
    $new = new Goodbye();
    $new->byebye();
   ?>   
</body>
</html>