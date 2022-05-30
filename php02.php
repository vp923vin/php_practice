<?php

class Employee{
    //properties
    public $name;
    public $salary;
    
    // Methods of the class
    //constructor without arguments
    
    // function __construct(){
    //     echo "Hello";
    // }

    // contructor with arguments
    function __construct($name1, $salary1){
        $this->name = $name1;
        $this->salary = $salary1;
    }

}
  $vipin = new Employee("vipin patel", "10000");
  $ajeet = new Employee("ajeet", "14000");
  $satta = new Employee("satyam", "40000");

  echo "the salary of $vipin->name is $vipin->salary"; echo "<br>";
  echo "the salary of $ajeet->name is $ajeet->salary"; echo "<br>";
  echo "the salary of $satta->name is $satta->salary";
?>