<?php 
    //the first letter for a class has to be CAPS

    class Car{
        function MoveWheels(){
            echo "Wheels starting to move";
        }
    }
    if(method_exists("Car","MoveWheels")){
        echo "Wheels are working";
    }else{
        echo "An issue has risen";
    }
    // //checking is class is working with predifined
    // //called cass_exists
    // if(class_exists("Car")){
    //     echo "This Class car exists";
    // } else {
    //     echo "It does not exist";
    // }
?>