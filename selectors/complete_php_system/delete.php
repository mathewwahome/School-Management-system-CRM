<?php
//check if delete button has been clicked
if (isset($_GET["u_id"])){
    //receive the id from the url
    $userId=$_GET["u_id"];
    //connect to the db to delete
    require_once"db_connection.php";
    //create a delete query
    $deleteQuery="DELETE FROM `users` WHERE id='$userId'";
    //use the mysqli-query() to execute the delete query
    $delete=mysqli_query($connection ,$deleteQuery);
    //check if the deletion was successfull
    if (isset ($delete) ){
        //redirect the user back to users.php
        header("location:users.php");
    }else{
        echo"Deleting failed";
    }
}
