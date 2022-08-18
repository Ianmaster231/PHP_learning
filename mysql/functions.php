<?php include "db.php";?>
<?php

function createRows(){
    if(isset($_POST['submit'])){
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
            $query = "INSERT INTO users(username,password)";
            //this line will concitatnate
            $query .= "VALUES ('$username','$password')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die('Query failed');
        } else {
            echo "Record Created";
        }
    }
}

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
        if(isset($_POST['submit'])){
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
        } else {
            echo "Record Update";
        }
    }
    }

    function DeleteRows(){
        if(isset($_POST['submit'])){
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
        }else {
            echo "Record Deleted";
        }
    }
}

    function readRows(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
        if(!$result){
        die('Query failed' );
        }

         //gives more detail in the array for mysqli_fetch_assoc
         while($row = mysqli_fetch_assoc($result)) {
            print_r($row);
        }
    }
?>