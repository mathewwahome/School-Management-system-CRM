<?php

if(isset($_POST["btn_submit"])){

//     start receiving from form
    $name  =  $_POST["u_name"];
    $email =  $_POST["u_email"];
    $pass  =  $_POST["u_pass"];
//    now connect to the database to save the data
    require_once "db_connection.php";
//  create an insert query to save the data
    $insertQuery = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$pass')";
//finakky save the data by use of mysqli_query function
    $save = mysqli_query ($connection,$insertQuery);
//  check if the saving was succesfull
    if(isset($save)){
        echo"user registration succesfull";
    }else{
        echo "user registration failed;";
    }
}