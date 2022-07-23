<?php
if (isset($_POST['serch_btn'])){
    $name = $_POST['stdname'];
    $adm = $_POST['stdadm'];
    $pass = $_POST['stdpass'];

    $md5 = md5($pass);

    require_once "connection_db.php";

//    confirming if the password is corect ====== "calling the student signup_db"
    $selectquery = "SELECT * FROM `students` WHERE name='$name' and password='$md5' and admission='$adm' ";
    $selected = mysqli_query($connection, $selectquery);
    $counttherow = mysqli_num_rows($selected);
    if ($counttherow > 0){
        session_start();
        $_SESSION['stdname'] = $name;
        header("location:myresult.php");

    }else if ('name' !=$name){
        echo "wrong name";
    }
}
?>

