<?php 
    //the first letter for a class has to be CAPS

    class Car{
        function MoveWheels(){
            echo "Wheels starting to move";
        }
    }

    $mitshubhishi = new Car();
    $ford = new Car();
    $vw = new Car();

    $vw->MoveWheels();
    $ford->MoveWheels();
?>