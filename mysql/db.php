<?php 
$connection = mysqli_connect('localhost','root','','loginapp');

if($connection){
    echo "We ae connected";
} else {
    die("Database connection failed");
}

?>