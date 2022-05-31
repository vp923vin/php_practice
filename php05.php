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
    // Inhertance  Introduction and Basic program that how inheritance works
    // properties 
    class Employee{
        public $name;
        public $salary;
        public $position;

        // methods eof emplyee class
        function __construct($name, $salary, $position){
            $this->name = $name;
            $this->salary = $salary;
            $this->position = $position;

        }
        function ShowVlaues(){
            echo "Employee $this->name designation is $this->position and has salary $this->salary";
        }
    }
    // employee class code ends here

    // inherited class programmer code starts from here
    class programmer extends Employee{
        
        // method of programmer class
         function OtherValues(){
            echo " and has work experience 2 months <br>";
        }
    }
    
    // multiple objects are created here
    $vipin = new programmer("vipin patel", "2000", "web-developer");
    $vipin->ShowVlaues();
    $vipin->OtherValues();

    $Ajay = new programmer("Ajay bikarwal", "4000", "designer");
    $Ajay->ShowVlaues();
    $Ajay->OtherValues();

    $Mohan = new programmer("Mohan das", "2500", "content-writer");
    $Mohan->ShowVlaues();
    $Mohan->OtherValues();  
  ?>
</body>
</html>