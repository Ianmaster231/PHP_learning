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
    //old way
    //$numberList = array();  
    //example1 with string  
    //$nameList = ['name' =>'Ian'];
    // the value in te [] are called indices the firsst one is 
    //structure as 0,1,2,3,4
    $numberList = [2,34,5,89,'ian',345,'<h1>test</h1>']; 

    //print_r($numberList); This is t check the structure and value 
    //of the indicesrom the array list.

    //echo $numberList[0]; To call a spcific indices
    echo $numberList[5];
    ?>
</body>
</html>