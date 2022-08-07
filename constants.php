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
    
    $num = 10;
    $num = 20;
    echo $num;
    //this is how to define a constant  
    define("NAME" , 1997);



    echo NAME;
    

    //other newer examples
    // Works as of PHP 5.3.0
 
const CONSTANT = 'Hello World';
 
 
echo CONSTANT;
 
 
// Works as of PHP 5.6.0
 
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
 
echo ANOTHER_CONST;
 
 
const ANIMs = array('dog', 'cat', 'bird');
 
echo ANIMs[1]; // outputs "cat"
 
 
// Works as of PHP 7
 
define('ANIMALS', array(
 
'dog',
 
'cat',
 
'bird'
 
));
 
echo ANIMALS[1]; // outputs "cat"

    ?>
</body>
</html>