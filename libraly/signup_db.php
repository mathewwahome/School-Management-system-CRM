<?php
if (isset($_POST['btn_lib_reg'])) {
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $password = $_POST['password'];
    $pin = $_POST['pin'];
    $regnumber = $_POST['reg_number'];
    $md5 = md5($password);
    require_once "../database/connection_db.php";

    $insertquerly = "INSERT INTO `liblarian`(`id`, `name`, `emil`, `regno`, `pin`, `password`)
     VALUES (null,'$name','$email','$regnumber','$pin','$md5')";

    $insertmysqli = mysqli_query($connection, $insertquerly);

    // $selectquerly = "SELECT * FROM `liblarian` WHERE `name`='$name'";
    // $select = mysqli_query($connection, $selectquerly);

    if (isset($insertmysqli)) {
        header("location:login.php");
    }
}
