<?php
//check if btn_update hasbeen clckd
if (isset($_POST["btn_update"])){
    $userId =$_POST["u_id"];
    $userName= $_POST["u_name"];
    $userEmail= $_POST["u_email"];
    $userpassword =$_POST["u_pass"];

    //connect to the database  to return back the data
    require_once "db_connection.php";
    //create the update query
    $updateQuery = "UPDATE `users` SET `jina`='$userName',`arafa`='$userEmail',`siri`='$userpassword' WHERE id='$userId'";

    //execute the update query by use of mysqli_query() method
    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)){
        //        location
                header("location:users.php");
    }else{
        echo "Updating failed";
    }
}