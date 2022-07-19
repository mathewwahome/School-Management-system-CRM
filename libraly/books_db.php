<?php

if (isset($_POST['btn_insert'])){
    $bookname = $_POST['book_name'];
    $subject = $_POST['subject'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $number = $_POST['number'];
    
    require_once "../connection_db.php";
    
    $insertQuery = "INSERT INTO `liblary_books`(`id`,`book_name`, `subject`, `author`, `description`, `location`,`number`)
                    VALUES (null,'$bookname','$subject','$author','$description','$location','$number')";
    $insert=mysqli_query($connection, $insertQuery);
    if(isset($insert)){
        header("location:books.php");
    }else{
        echo "sorry";
    }
}
?>