<!-- Arrays -->
<?php
    echo "Basics of Arrays ";
    echo '<br>';
   // array declaration
    $fruits = array("mango","banana","grapes","apple");
    
    // array accessing using for each loop
    foreach($fruits as $values){
        echo array_search("$values", $fruits); // this will print the index values of array 
        echo "-";
        echo $values; //here we access array values
        echo "<br>";
    }
    echo '<br>';
?>

<!-- Associative Arrays -->

<?php

    echo "learning Associative Arrays ";
    echo '<br>';
    $car = array("Brand" => "Model", "Mahindra" => "Thar", "Tata" => "Nano", "Maruti Suzuki" => "Swift Dezire",
                 "Hyundai" => "i20","Honda" => "Amaze","Nissan" => "GT-R", ); // integers can be valid key

    echo $car["Mahindra"];
    echo "<br>";
    echo $car["Nissan"];
    echo "<br>";
    echo $car["Honda"];
    echo "<br>";

    foreach($car as $key => $values){
        // here if condition is added because in index 0 template for what kind of keys and values there in array 
        if($key === "Brand"){
            continue;
        }
        else{
        echo "the $key $values is so good.";
        echo "<br>";
        }
    }
    echo '<br>';
?>


<!-- Multidimensional Associative Arrays -->


<?php
    echo " you are seeing Multidimensional Arrays ";
    echo '<br>';
    $matt = array(array(1,2,3,4),
                   array(5,6,7,8),
                   array(9,0,1,2));
    
    //echo var_dump($matt);
    //echo $matt[0][3];

    // printing the 2D array values 
    // for($i = 0 ; $i < count($matt) ; $i++ ){
    //     echo var_dump($matt[$i]);
    //     echo '<br>';
    // }

    for($i = 0 ; $i < count($matt) ; $i++ ){
        for($j = 0 ; $j < count($matt[$i]) ; $j++ ){
            echo $matt[$i][$j];
            echo " ";  

        }
        echo '<br>';
    }

?>
