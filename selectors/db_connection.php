<?php
//connecting to the database by calling the user and the database.....
$host = "localhost";
$user = "root";
$password = "";
$dbName = "lubinu";

$connection = mysqli_connect($host,$user,$password,$dbName);
//check if issset
//futher operations
if (!isset($connection)){
    die("Db connection failled");
}