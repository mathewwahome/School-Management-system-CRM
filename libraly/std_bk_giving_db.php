<?php
if (isset($_POST['give_bk'])) {
    $studentname = $_POST['studentname'];
    $admission = $_POST['admissionno'];
    $bookname = $_POST['book_name'];
    $subject = $_POST['subject'];
    $booknumber = $_POST['booknumber'];

    require_once '../database/connection_db.php';
    $insertquerly = "INSERT INTO `std_lib_books`(`id`, `admission`, `student_name`, `subject`, `book_name`,`book_number`)
     VALUES (null,'$admission','$studentname','$bookname','$subject', '$booknumber')";
    $selectQuery = "SELECT * FROM `std_lib_books` WHERE `student_name` = '$studentname' and `admission` ='$admission'and `book_number` = '$booknumber'";
    $selectedQuery = mysqli_query($connection, $selectQuery);
    $selectstudentscount = mysqli_num_rows($selectedQuery);
    if ($selectstudentscount >= 5) {
        header("location:libraly.php?more=you can not be given more than three books");
    } else {

        $insertconnect = mysqli_query($connection, $insertquerly);
        if (isset($insertconnect)) {
            header("location:libraly.php?given=The book has been given");
        }
    }
} elseif (isset($_POST['collect_bk'])) {
    $studentname = $_POST['studentname'];
    $admission = $_POST['admissionno'];
    $bookname = $_POST['book_name'];
    $subject = $_POST['subject'];
    $booknumber = $_POST['booknumber'];

    require_once '../database/connection_db.php';

    $selectquerly = "DELETE FROM `std_lib_books`
     WHERE `admission`='$admission' and `student_name`='$studentname' and `subject`='$subject' and `book_name`='$bookname' and `book_number`='$booknumber'";
    $selectconnect = mysqli_query($connection, $selectquerly);
    if (isset($selectconnect)){
        echo "deleted";
    }
}
