<?php 
    //the first letter for a class has to be CAPS
    class Car{
        static $wheels = 4;
        var $hood = 1;
       
        
        function MoveWheels(){
            //echo "Wheels starting to move";
            Car::$wheels=10;
        }

        
        
    }
    $supercar = new Car();
    //$supercar->wheels();
    Car::MoveWheels();
    echo Car::$wheels;
   
?>