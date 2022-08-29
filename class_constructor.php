<?php 
    //the first letter for a class has to be CAPS
    class Car{
        var $wheels =4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;
        
        function __construct(){
            //echo "Wheels starting to move";
            echo $this->wheels=10;
        }

        
        
    }
    $supercar = new Car();
    $truck = new Car();
    
?>