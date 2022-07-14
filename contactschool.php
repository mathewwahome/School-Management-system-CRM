<?php
if (isset($_POST['user_message'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $subjet = $_POST['subject'];
    $message = $_POST['message'];

    $mailto = "mathewwahome2003@gmail.com";
    $header = "From: ".$mailfrom;
    $text = "You ha a mess from ".$name. ".\n\n".$message;

    mail($mailto, $subjet, $text, $header);

    $header ("location:index.php?mailsent");
}