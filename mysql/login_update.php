<?php include "db.php";
        
   $query = "SELECT * FROM users";
   $result = mysqli_query($connection,$query);
   if(!$result){
    die('Query failed' );
   }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="col-sm-6">
            <?php 
            //gives more detail in the array for mysqli_fetch_assoc
                while($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <pre>
                        <?php
                        print_r($row);
                        ?>
                    </pre>
                    <?php

                    
                }
           ?>
        </div>
    </div>



</body>
</html>