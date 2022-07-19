<?php
if(isset($_POST['btn_li_std_reg'])){
    $name = $_POST['name'];
    $pin =$_POST['pin'];
    $password = $_POST['password'];

    require_once "../connection_db.php";

    $selectquery = "SELECT `id`, `name`, `pin`, `password` FROM `lib_users` WHERE name='$name' and pin='$pin'";

    $selected = mysqli_query($connection,$selectquery);
    $insertquery ="INSERT INTO `lib_users`(`id`, `name`, `pin`, `password`) 
    VALUES (null,'$name','$pin', '$password')";

    $selectednum = mysqli_num_rows($selected);
    if($selectednum > 0){
        header("location:lib_users.php?lierror=Sorry an account with the detail exists.");
    }else{
        $insert = mysqli_query($connection,$insertquery);
        if(isset($insert)){
            header("location:login.php?succ=Welcom to the school libraly system.");
        }
    }

}