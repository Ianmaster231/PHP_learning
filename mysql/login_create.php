<?php include "db.php";
    
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $query = "INSERT INTO users(username,password)";
    //this line will concitatnate
    $query .= "VALUES ('$username','$password')";

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
        <form action="login_create.php" method="post">
                <div class="form-roup">
                    <label for="username" class="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-roup">
                    <label for="password" class="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>