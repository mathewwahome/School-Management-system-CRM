<?php
session_start();
if (isset($_POST['btn_lib_logn'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $regnumber = $_POST['reg_number'];
    $pin = $_POST['pin'];
    $hrshpassword = md5($password);

    require_once "../database/connection_db.php";

    $selectquery = "SELECT * FROM `liblarian` WHERE name='$name' and password='$hrshpassword' and pin='$pin'";
    $selected = mysqli_query($connection, $selectquery);
    $counttherow = mysqli_num_rows($selected);
    if ($counttherow > 0) {
        $row = mysqli_fetch_assoc($selected);
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: libraly.php");
        exit();
    } else if ($name != ['name']) {
        header("Location: login.php?errorl=Incorect User name ");
    } else if ($hrshpassword != ['password']) {
        header("Location: login.php?errorl=Incorect password ");
    } elseif ($pin != ['pin']) {
        header("location:login.php?errorl=Incorrect pin");
    } elseif ($regnumber != ['regno']) {
        header("location:login.php?errorl=Incorrect regno");
    } else {
        header("location: login.php?errorl=un registered user");
    }
}
