<?php
//check if btn_update hasbeen clckd
if (isset($_POST["btn_update"])){
    $userId =$_POST["u_id"];
    $userName= $_POST["name"];
    $sub= $_POST["sub"];

    //connect to the database  to return back the data
    require_once "connection_db.php";
    //create the update query
    $updateQuery = "UPDATE `teachers` SET `name`='$userName',`subject`='$sub' WHERE id='$userId'";

    //execute the update query by use of mysqli_query() method
    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)){
        //        location
        header("location:teachers_list.php?udone=teacher updated");
    }else{
        echo "Updating failed";
    }
}