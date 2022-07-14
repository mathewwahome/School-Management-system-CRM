<?php
//ckeck if the delete button has beeen clkd
if (isset($_GET["u_id"])){
    //reseive the id from the url
    $userId = $_GET["u_id"];
    //connect to the db to delete
    require_once "connection_db.php";
    //create a delete query.....
    $deleteQuery = "DELETE FROM `students_list` WHERE id='$userId'";
    //use the mysqliquery method to execute the delete fornction
    $delete = mysqli_query($connection, $deleteQuery);
    //check if the delete function worked
    if (isset($delete)){
//        redilect the user back to user.php
        header("location:studentslist.php?mess=Student deleted");
    }else{
        header("location:studentslist.php?mess=Student delition failed");
    }

}
?>
<?php
//ckeck if the delete button has beeen clkd
if (isset($_GET["u_idtr"])){
    //reseive the id from the url
    $userId = $_GET["u_idtr"];
    //connect to the db to delete
    require_once "connection_db.php";
    //create a delete query.....
    $deleteQuery = "DELETE FROM `teachers` WHERE id='$userId'";
    //use the mysqliquery method to execute the delete fornction
    $delete = mysqli_query($connection, $deleteQuery);
    //check if the delete function worked
    if (isset($delete)){
//        redilect the user back to user.php
        header("location:teachers_list.php?mess=Teacher deleted");
    }else{
        header("location:teachers_list.php?mess=teacher delition failed");
    }

}

?>







