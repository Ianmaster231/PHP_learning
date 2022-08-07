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

        function addNums($nums1, $nums2){
            $sum = $nums1 + $nums2;
            return $sum;
        }
        $result = addNums(4,5);
        echo $result;
        echo "<br>";
        
        $result = addNums(100,$result);

        echo $result;
    ?>
</body>
</html>