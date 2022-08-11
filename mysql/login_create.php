<?php 
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $connection = mysqli_connect('localhost','root','','loginapp');
    if($connection){
     echo "We ae connected";
    } else {
    die("Database connection failed");
    }

    $query = "INSERT INTO users(username,password)";
    //this line will concitatnate
    $query .= "VALUES ('$username','$password')";

   $result = mysqli_query($connection,$query);

   if(!$result){
    die('Query failed' );
   }
?>