<?php
if (isset($_POST['btn_lib_reg'])) {
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $password = $_POST['password'];
    $pin = $_POST['pin'];
    $regnumber = $_POST['reg_number'];
    $md5 = md5($password);

    $passwordlngth = strlen($password);

    require_once "../database/connection_db.php";
    $insertquerly = "INSERT INTO `liblarian`(`id`, `name`, `emil`, `regno`, `pin`, `password`)
     VALUES (null,'$name','$email','$regnumber','$pin','$md5')";

    $selectquery = "SELECT * FROM `liblarian` WHERE `emil`='$email' and `regno`=$regnumber ";
    $selected = mysqli_query($connection, $selectquery);
    $counttherow = mysqli_num_rows($selected);
    if ($counttherow > 0) {
        if($email == `emil`){
            header("Location: signup.php?accounton=An accout with that email exist..");
            exit();
        }elseif($regnumber ==`regno`){
            header("Location: signup.php?accounton=An accout with that registration no. exist.."); 
        }
    }elseif ($passwordlngth < 6) {
        header("location:signup.php?shrotpass=The password is too short");
    } elseif ($pin != 4988){
        header("location:signup.php?wrongpin=Wrong pin");

    }
    
    else {
        $insertmysqli = mysqli_query($connection, $insertquerly);
        if (isset($insertmysqli)) {
            header("location:login.php");
        }
    }
}
