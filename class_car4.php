<?php 
    //the first letter for a class has to be CAPS

use Car as GlobalCar;

    class Car{
        var $wheels =4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;
        
        function MoveWheels(){
            //echo "Wheels starting to move";
            $this->wheels=10;
        }

        function CreateDoors(){
            //echo "Wheels starting to move";
            $this->doors=6;
        }
        
    }
    $supercar = new Car();
    $truck = new Car();
    echo $supercar->wheels . "<br>";
    echo $truck->wheels = 10 . "<br>";
    //You an override the value from here
    //$supercar->wheels=8;
    //echo $supercar->wheels;
    $truck-> CreateDoors();
    echo $truck->doors;
?>