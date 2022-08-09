<?php 
//the $_POST is the associated array
if(isset($_POST['submit'])) {
    //my version
    //$username_password = $_POST['username' ."<br>". 'password'];
    //echo $username_password;

    //The way the sir made it.
    $name =["Ian","Joe","Fiona", "Jane"];
    $minimun = 5;
    $maximum = 5;
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimun){
        echo "Username has to be longer than 5";
    }
    
    if(strlen($username) > $maximum){
        echo "Username cannot to be longer than 10";
    }

    if(in_array($username,$name)){
        echo "Sorry you are not alowed to use that name";
    } else {
        echo "Welcome to this excersise";
    }
    
    //echo "Hello " . $password;
   // echo "Your password is " . $username;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="form_process.php" method="post">

    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">

    </form>
</body>
</html>