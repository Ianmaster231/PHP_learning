<?php 
    //the first letter for a class has to be CAPS
    class Car{
        public $wheels =4;
        protected  $hood = 1;
        private $engine = 1;
        var $doors = 4;
        
        function showProperty(){
            //echo "Wheels starting to move";
            echo $this->hood;
        }

        
        
    }
    $supercar = new Car();
    $semi = new Semi();
    class Semi extends Car{
        // function showProperty(){
        //     //echo "Wheels starting to move";
        //     echo $this->hood;
        // }
    }
    echo $supercar->showProperty();
   
?>