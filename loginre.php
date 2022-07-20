<?php
session_start();
if (isset($_POST['login_btn'])){
    $name = $_POST['name'];
    $password = $_POST['u_pass'];
    $admission = $_POST['u_admission'];
    $hrshpassword = md5($password);

    require_once "connection_db.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
    $selectquery = "SELECT * FROM `students` WHERE name='$name' and password='$hrshpassword'";
    $selected = mysqli_query($connection, $selectquery);
    $counttherow = mysqli_num_rows($selected);
    if ($counttherow > 0){
        $row = mysqli_fetch_assoc($selected);
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: students.php");
        exit();

    }else if ($name != ['name'] ){
        header("Location: login.php?errorl=Incorect User name ");
    }else if ($hrshpassword != ['password']){
        header("Location: login.php?errorl=Incorect password ");
    }else{
        header("location: login.php?errorl=Incorect admission");
    }
}
