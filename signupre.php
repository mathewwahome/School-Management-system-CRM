<?php
if (isset($_POST['btn_register'])){
    $name =$_POST['u_name'];
    $email = $_POST['u_email'];
    $password= $_POST['u_password'];
    $admission =$_POST['u_admission'];

    $harshpassword = md5($password);
    $passwordlgth = strlen($password);

    require_once "connection_db.php";
    if ($passwordlgth < 6){
        echo "sorry the password is too short";
    }else {
        $selectquery = "SELECT * FROM `students` WHERE admission = '$admission'";
        $selectingquerycon = mysqli_query($connection, $selectquery);
        $additionquery = "INSERT INTO `students`(`id`, `name`, `email`, `password`, `admission`) 
                    VALUES (null,'$name','$email','$harshpassword','$admission')";
        $serchusers = mysqli_num_rows($selectingquerycon);
        if ($serchusers > 0){
            header("Location:signup.php?error=The Admission has Already Been Used");
        }else{
            $saveadditionaquery = mysqli_query($connection, $additionquery);
            if (isset($saveadditionaquery)){
                header("location:login.php");
            }else{
                echo "sorry";
            }
        }



    }
}
