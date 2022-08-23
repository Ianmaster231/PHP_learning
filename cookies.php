<?php 
    $name = "Cookie_IZ";
    $value = "100";
    $experation = time() + (60 * 60 * 24 * 7);
    setcookie($name,$value,$experation);
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
    <?php 
        if(isset($_COOKIE["Cookie_IZ"])){
            
            $someOne = $_COOKIE["Cookie_IZ"];
            echo $someOne;
        } else {

            $someOne = "";
        }
    ?>
</body>
</html>