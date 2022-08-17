<?php include "db.php";?>
<?php

function showAllData(){
    global $connection;
     $query = "SELECT * FROM users";
     $result = mysqli_query($connection,$query);
     if(!$result){
      die('Query failed' );
     }

     while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
     echo "<option value='$id'>$id</option>"; 
    }
}

    function UpdateTable(){
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
    
        //the code below is using the continate
        //function meanins it an make the ode more readible 
        //for php its .= as like 13 and 14 are
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";
    
    
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("QUERY FAILED".mysqli_error($connection));
        }
    }

    function DeleteRows(){
        global $connection;
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        $id = $_POST['id'];
    
        //the code below is using the continate
        //function meanins it an make the ode more readible 
        //for php its .= as like 13 and 14 are
        $query = "DELETE FROM users  ";
        $query .= "WHERE id = $id ";
    
    
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("QUERY FAILED".mysqli_error($connection));
        }
    }
?>