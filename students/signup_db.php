<?php
if (isset($_POST['btn_register'])){
    $name = $_POST['s_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admission = $_POST['admission'];
    $harshpassword = md5($password);
    $passwordlgth = strlen($password);

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    require_once "../database/connection_db.php";

    $checkstudentQuerly = "SELECT * FROM `students_list` WHERE `name`='$name' and `admission`='$admission'";
    $checkdone = mysqli_query($connection, $checkstudentQuerly);
    $checksumdone = mysqli_num_rows($checkdone);
    if ($checksumdone > 0) {
        if ($passwordlgth < 6) {
            echo "sorry the password is too short";
        } else {
            $selectquery = "SELECT * FROM `students` WHERE admission = '$admission'";
            $selectingquerycon = mysqli_query($connection, $selectquery);
            $additionquery = "INSERT INTO `students`(`id`, `name`, `email`, `password`, `admission`) 
                    VALUES (null,'$name','$email','$harshpassword','$admission')";
            $serchusers = mysqli_num_rows($selectingquerycon);
            if ($serchusers > 0) {
                header("Location:signup.php?error=Youguy myguy you aready have an account!!!");
            } else {
                $saveadditionaquery = mysqli_query($connection, $additionquery);
                if (isset($saveadditionaquery)) {
                    header("location:login.php");
                } else {
                    echo "Did not connect to the database.";
                }
            }
        } 
    } else {
        header("location:signup.php?sorry=you are not a student in this school!");
    }
    
  
}
