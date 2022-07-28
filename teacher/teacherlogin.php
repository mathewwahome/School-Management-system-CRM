<?php
if (isset($_POST['login_btn'])){
    $name = $_POST['t_name'];
    $password = $_POST['t_pass'];
    $department = $_POST['department'];
    $pin =$_POST['pin'];

    $md5 = md5($password);
//    specific access
    $admin ='admin';
    $t ='admin123';
    $depzero= "zero";

    $depone ='hod';
    $deptwo = 'classteacher';
    $depthree= 'teacher';

    require_once "../database/connection_db.php";

    $selectQuery = "SELECT * FROM `teachers` WHERE name= '$name' and password= '$md5' and pin='$pin'";
    $select = mysqli_query($connection, $selectQuery);
    $checkteacher = mysqli_num_rows($select);
    if ($checkteacher > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];

//        specific access
        if ($name == 'admin' && $department == 'zero' && $password == "admin123"){
            header("location:../admin/admin.php");
        }elseif ($department == 'hod'){
            header("location:../hod/hod.php");
        }elseif ($department == 'classteacher'){
            header("location:teacherspage.php");
        }elseif ($department == 'teacher'){
            header("location:teacherspage.php");
        }else{
            echo "enter a valid depertment";
        }
        exit();

    }else {
        echo "sorry the name or password is wrong";
    }
}