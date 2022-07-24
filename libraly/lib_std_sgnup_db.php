<?php
if(isset($_POST['btn_li_std_reg'])){
    $name = $_POST['name'];
    $year = $_POST['year'];
    $form = $_POST['form'];
    $addmission = $_POST['addmission'];

    require_once "../database/connection_db.php";

    $selectquery = "SELECT `id`, `name`, `year`, `form`, `admission` FROM `lib_std_reg` WHERE admission='$addmission'";

    $selected = mysqli_query($connection,$selectquery);
    $insertquery ="INSERT INTO `lib_std_reg`(`id`, `name`, `year`, `form`, `admission`) 
    VALUES (null,'$name','$year','$form','$addmission')";

    $selectednum = mysqli_num_rows($selected);
    if($selectednum > 0){
        header("location:libraly.php?lierror=Sorry the student is registered..");
    }else{
        $insert = mysqli_query($connection,$insertquery);
        if(isset($insert)){
            header("location:libraly.php?succ=student registered");
        }
    }

}