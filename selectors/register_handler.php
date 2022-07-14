<?php
//if the button is clkd
if (isset($_POST["btn_reg"])){
    $name = $_POST["u_name"];
    $email = $_POST["u_email"];
    $pass = $_POST["u_pass"];

    //requesting for the database
    require_once "db_connection.php";
    //reate an insert to save
    $insertQuery ="INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$pass')";
    //use my sqli_query to save the data
    $save = mysqli_query($connection, $insertQuery);
    //check if the saving was succesful
    if (isset($save)){
        echo "user registration successfully"; //location: if true
    }else{
        echo "user registration failled"; //location: if false
    }
}
