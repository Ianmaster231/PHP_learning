<?php 
    //the first letter for a class has to be CAPS

use Car as GlobalCar;

    class Car{

    }
    //checking is class is working with predifined
    //called cass_exists
    if(class_exists("Car")){
        echo "This Class car exists";
    } else {
        echo "It does not exist";
    }
?>