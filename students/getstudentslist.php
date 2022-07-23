<?php
if (isset($_POST['addstd_btn'])){
    $name = $_POST['stdname'];
    $adm = $_POST['stdadm'];
    $form = $_POST['form'];

    require_once "connection_db.php";
    $insertQuery = "INSERT INTO `students_list`(`id`, `admission`, `name`, `form`)
                    VALUES (null,'$name','$adm','$form')";
    $save = mysqli_query($connection, $insertQuery);
    if (isset($save)){
        header("location:studentslist.php");
    }else{
        echo "sorry";
    }
}
?>
<!---->