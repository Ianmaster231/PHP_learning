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
    // website math functions
    //https://www.php.net/manual/en/ref.math.php
    //raised to the power of exponent
    //The function pow() is used to calculate the power raised to the base value. 
    //It takes two arguments. 
    //It returns the power raised to the base value.
    echo pow(2,7);

    echo "<br>";
    //this iss random number generate every refresh
    echo rand(1,100);

    echo "<br>";
    //this is square route
    //The sqrt() function returns square root of a positive float number.
    echo sqrt(100);

    echo "<br>";
    //rounds a number UP to the nearest integer
    echo ceil(4.6);

    echo "<br>";

    echo floor(4.6);

    echo "<br>";
    //rounding the number
    echo round(4.5);
    ?>
</body>
</html>