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

    /*
    $number = 6;

    if( $number < 10){
        echo "this";
    }
    
    if( $number < 20){
        echo "this";
    }

    if( $number < 40){
        echo "this";
    }
    */

    $number = 3;

    switch($number){

        case 34:
            echo "is it 34";
        break;
        case 37:
            echo "is it 37";
        break;
        case 38:
            echo "is it 38";
        break;
        case 3:
            echo "is it 3";
        break;    

        default :
            echo "we could not find anything";
        break;
    }

    ?>
</body>
</html>