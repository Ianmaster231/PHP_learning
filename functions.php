<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    function say_Something(){

        echo "Hello Student, do you like pizza" . "<br>";
        calculate();
    }

    function calculate(){
        echo 1 + 4;
    }
    say_Something();
    ?>
</body>
</html>