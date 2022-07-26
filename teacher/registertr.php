<?php
if (isset($_POST['btn_reg'])){

    $name = $_POST['name'];
    $sub = $_POST['sub'];
    $form = $_POST['form'];
    $department = $_POST['department'];
    $password = $_POST['password'];
    $pin = $_POST['pin'];

    $md5 = md5($password);//md5
    $pinc = 8380;

    require_once "../database/connection_db.php";
    $insertquery = "INSERT INTO `teachers`(`id`, `name`, `subject`, `form`, `department`, `password`, `pin`) 
                VALUES (null,'$name','$sub','$form','$department','$md5','$pin')";
    $selectQuery = "SELECT * FROM `teachers` WHERE name='$name'";
    $select = mysqli_query($connection,$selectQuery);
    $checkrows= mysqli_num_rows($select);
    if ($checkrows > 0 ){
       header("location:teacherregister.php?sorry= An account aready exists");
    }elseif ($pin != $pinc){
        header("location:teacherregister.php?error=Sorry Wrong pin!");

    }else{
        $insert = mysqli_query($connection, $insertquery);
        if (isset($insert)){
            header("location:teacher.php?oky= Login now please");
        }else {
            echo "failed to insert";
        }
    }
//verification of the pin and checking if the teacher name is there and if the input fields are correctly field

}
?>

