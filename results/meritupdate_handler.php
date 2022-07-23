<?php
//check if btn_update hasbeen clckd
if (isset($_POST["btn_update"])){
    $userId =$_POST["u_id"];
    $userName= $_POST["u_name"];
    $bio = $_POST["u_b"];
    $cre= $_POST["u_C"];
    $bst= $_POST["u_bs"];
    $histo= $_POST["u_h"];
    $comp= $_POST["u_comp"];
    $phy= $_POST["u_p"];
    $chem= $_POST["u_c"];
    $kiswa= $_POST["u_k"];
    $eng= $_POST["u_e"];
    $math= $_POST["u_m"];
    $adm= $_POST["u_addmin"];

    $marks = ($math + $eng + $kiswa + $chem + $phy + $cre + $bio + $histo + $bst + $comp);
    $average_marks = ($math + $eng + $kiswa + $chem + $phy + $cre + $bio + $histo + $bst + $comp) / 9;

    if ($average_marks <= 30.0){
        $meangrade = "E";
    }elseif ($average_marks <= 40.0){
        $meangrade = "D-";
    }elseif ($average_marks <= 50.0){
        $meangrade = "D";
    }elseif ($average_marks <= 60.0){
        $meangrade = "D+";
    }elseif ($average_marks <= 70.0){
        $meangrade = "C-";
    }elseif ($average_marks <= 80.0){
        $meangrade = "A";
    }else {
        $meangrade = "A+";
    }
    
    //connect to the database  to return back the data
    require_once "connection_db.php";
    //create the update query
    $updateQuery = "UPDATE `results` SET 
                     `adimision`='$adm',`studentname`='$userName',
                     `math`='$math',`english`='$eng',`kiswahili`='$kiswa',
                     `chemistry`='$chem',`physics`='$phy',`CRE`='$cre',`biology`='$bio',
                     `history`='$histo',`bustness`='$bst',`computer`='$comp',`grade`='$meangrade',`marks`='$marks'
                      WHERE id='$userId'";

    //execute the update query by use of mysqli_query() method
    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)){
        //        location
        header("location:hodmerit.php");
    }else{
        echo "Updating failed";
    }
}