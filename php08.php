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
    // here we see <final> keyword that helps to prevent from inheritence and overiding methods
 
    
    //    INHERITENCE PREVENTION
    final class Fruits{
          // code Here.....
      
    }

    // here try to inherit but cannot because of the final keyword Used in in parent class  
    class New_Fruits extends Fruits {
      
        // time waist if write code here....
      
    }



    //    OVERRIDING PREVENTION
    class Fruits{
        final public function message(){
            // code here
        }
    }

    // here try to inherit but cannot because of the final keyword Used in in parent class  
    class New_Fruits extends Fruits {
       public function message(){
           // time waist if write code here....
       }  
    } 
   ?>   
</body>
</html>