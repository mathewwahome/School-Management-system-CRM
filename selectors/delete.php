<?php
//ckeck if the delete button has beeen clkd
if (isset($_GET["u_id"])){
    //reseive the id from the url
    $userId = $_GET["u_id"];
    //connect to the db to delete
    require_once "db_connection.php";
    //create a delete query.....
    $deleteQuery = "DELETE FROM `users` WHERE id='$userId'";
    //use the mysqliquery method to execute the delete fornction
    $delete = mysqli_query($connection, $deleteQuery);
    //check if the delete function worked
    if (isset($delete)){
//        redilect the user back to user.php
        header("location:users.php");
    }else{
        echo "failed to delete the user";
    }

}




