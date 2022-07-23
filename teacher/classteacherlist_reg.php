<?php
if (isset($_POST['insert_btn'])){
    $name = $_POST['name'];
    $adm = $_POST['admission'];
    $user_data ='name='. $name. '&admission='. $adm;

    require_once "connection_db.php";

    $insertQuery = "INSERT INTO `form_one_list`(`id`, `name`, `admission`) VALUES (null,'$name','$adm')";

    $selectQuery = "SELECT * FROM `form_one_list` WHERE admission=$adm";
    $selected = mysqli_query($connection, $selectQuery);
    $countingthrough = mysqli_num_rows($selected);
    if ($countingthrough > 0){
        header("Location:classteacherlist.php?error=A student with that admission has been registered.&$user_data");
    }else {
        $save = mysqli_query($connection, $insertQuery);
        if (isset($save)) {
            header("location:classteacherlist.php");
        } else {
            echo "sorry";
        }
    }
}
?>