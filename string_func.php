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
        //website with all the string functions
        //https://www.php.net/manual/en/ref.strings.php
        $string = "Hello Ian";
        //this is the string total intger length Including spaces
        echo strlen($string);

        echo "<br>";
        //everything letter is transformed to upper case
        echo strtoupper($string);

        echo "<br>";
        //everything letter is transformed to lower case
        echo strtolower($string);


        
    ?>
</body>
</html>