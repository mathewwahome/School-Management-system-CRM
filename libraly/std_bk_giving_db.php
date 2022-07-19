<?php
if (isset($_POST['give_bk'])){
    $studentname = $_POST['studentname'];
    $admission = $_POST['admissionno'];
    $bookname = $_POST['book_name'];
    $subject = $_POST['subject'];
    $booknumber = $_POST['booknumber'];

    require_once '../connection_db.php';
    $insertquerly = "INSERT INTO `std_lib_books`(`id`, `admission`, `student_name`, `subject`, `book_name`,`book_number`)
     VALUES (null,'$admission','$studentname','$bookname','$subject', '$booknumber')";
    $selectQuery = "SELECT * FROM `std_lib_books` WHERE `student_name` = '$studentname' and `admission` ='$admission'and `book_number` = '$booknumber'";
    $selectedQuery = mysqli_query($connection, $selectQuery);
    $selectstudentscount = mysqli_num_rows($selectedQuery);
    if($selectstudentscount >= 5){
        // header("location:lib_users.php");
        echo "you can not be given more than three books";
    }else{
    
    $insertconnect = mysqli_query($connection,$insertquerly);
    if (isset($insertconnect)){
        header("location:std_given_bk_list.php?given=given");
    }

    }
}



    // elseif (isset($_POST['get_bk'])){
    //     $studentname = $_POST['studentname'];
    //     $admission = $_POST['admissionno'];
    //     $bookname = $_POST['book_name'];
    //     $subject = $_POST['subject'];

    //     require_once '../connection_db.php';

    //     $selectquerly = '';
    //     $selectconnect = mysqli_query($connection,$selectquerly);
    //     $selectcheck = mysqli_num_rows($selectconnect);

        
    // }
    ?>
