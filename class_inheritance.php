<?php 
    //the first letter for a class has to be CAPS
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
    
    class Plane extends Car{
        var $wheels = 20;
    }
   
    $jet = new Plane();
    //$jet->MoveWheels();
    echo $jet->wheels;
     
    // if(class_exists("Plane")){
    //     echo "It Does";
    // }
?>