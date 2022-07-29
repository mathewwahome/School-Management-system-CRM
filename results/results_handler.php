<?php
if (isset($_POST["resultsadd_btn"])) {
    $addmission = $_POST["u_addmin"];
    $student = $_POST["u_name"];
    $math = $_POST["u_m"];
    $english = $_POST["u_e"];
    $kiswa = $_POST["u_k"];
    $chem = $_POST["u_c"];
    $phy = $_POST["u_p"];
    $cre = $_POST["u_C"];
    $bio = $_POST["u_b"];
    $histo = $_POST["u_h"];
    $bst = $_POST["u_bs"];
    $comp = $_POST["u_comp"];
//meangrade
    $marks = ($math + $english + $kiswa + $chem + $phy + $cre + $bio + $histo + $bst + $comp);
    $average_marks = ($math + $english + $kiswa + $chem + $phy + $cre + $bio + $histo + $bst + $comp) / 9;

    if ($average_marks <= 35.0) {
        $meangrade = "E";
    } elseif ($average_marks <= 39.0) {
        $meangrade = "D-";
    } elseif ($average_marks <= 44.0) {
        $meangrade = "D";
    } elseif ($average_marks <= 50.0) {
        $meangrade = "D+";
    } elseif ($average_marks <= 54.0) {
        $meangrade = "C-";
    } elseif ($average_marks <= 59.0) {
        $meangrade = "C";
    } elseif ($average_marks <= 65.0) {
        $meangrade = "C+";
    } elseif ($average_marks <= 70.0) {
        $meangrade = "B-";
    } elseif ($average_marks <= 75.0) {
        $meangrade = "B";
    } elseif ($average_marks <= 80.0) {
        $meangrade = "B+";
    } elseif ($average_marks <= 85.0) {
        $meangrade = "A-";
    } else {
        $meangrade = "A";
    }
//getting the positions of students
//to be done mark.
//    calculating the grade...
        require_once "../database/connection_db.php";

        $additionQuery = "INSERT INTO `results`(`id`, `adimision`, `studentname`, `math`, `english`,
                      `kiswahili`, `chemistry`, `physics`, `CRE`, `biology`, `history`, `bustness`,
                      `computer`,`grade`,`position`,`marks`)
                    VALUES (null,'$addmission','$student','$math','$english','$kiswa','$chem',
                            '$phy','$cre','$bio','$histo','$bst','$comp','$meangrade','tt','$marks')";
        $additionfinal = mysqli_query($connection, $additionQuery);

        if (isset($additionfinal)) {
            header("location:addresults.php");
        } else {
            echo "sorry";
        }


}
if (isset($_POST['add_stdone_open_results'])){
    $res= $_POST['open'];

    require_once "../database/connection_db.php";
    $insertq= "UPDATE `results` SET `computer`='$res' WHERE adimision=0";
    $insert = mysqli_query($connection, $insertq);
    if (isset($insert)) {
        header("location:addresults.php");
    } else {
        echo "sorry";
    }
}
?>

