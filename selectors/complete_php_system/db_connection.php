<?php
$host="localhost";
$user="root";
$password="";
$dbName= "luninu_db";
//connect to db
$connection=mysqli_connect($host,$user,$password,$dbName);
//check if the connection failed so that you can stop further operations
if(!isset($connection)){
    die("Db connection failed");
}