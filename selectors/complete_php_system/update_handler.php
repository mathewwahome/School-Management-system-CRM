<?php
//check if update button clicked
if(isset($_POST["btn_update"])){
    //receive updated data from the form
    $userId=$_POST["u_id"];
    $updateName=$_POST["u_name"];
    $updateEmail=$_POST["u_email"];
    $updatePassword=$_POST["u_pass"];
    //connect to the database to return the data
    require_once "db_connection.php";
    //create an update query
    $updateQuery="UPDATE `users` SET `jina`='$updateName',`arafa`='$updateEmail',`siri`='$updatePassword' WHERE id='$userId'";
    //execute the update query using the mysqli_query() method
    $update=mysqli_query($connection,$updateQuery);
    //check if the update was successful
    if(isset($update)){
        //redirect the user back to users.php to see the changes
        header("location:users.php");
    }else{
        echo"Updating Failed";
    }
}