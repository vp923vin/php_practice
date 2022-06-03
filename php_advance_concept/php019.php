<!-- Scope : Global And Local Scope -->

<?php
    echo "SCOPE Learning";
    echo '<br>';
    // Global Variables 
    $a = 100 ;
    $b= 200;
    
    function printvalue(){
        // Local variables 
        // $a =50;
        // $b = 150;
        global $a, $b; // accesing global Variable which is located outside the function
        // changing the values of global variables inside the function but it will show effects on outside as well.
        $a=300;
        $b=400;
        echo "the of variable a is $a and b is $b";
        echo '<br>';
    }

    echo $a;
    echo '<br>';
    echo $b;
    echo '<br>';

    printvalue();
    echo "the of variable a is $a and b is $b";
    echo '<br>';

    echo var_dump($GLOBALS); //print all the global variables 
    echo '<br>';
    echo var_dump($GLOBALS["a"]);
    echo var_dump($GLOBALS["b"]);
?>