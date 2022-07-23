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
    $meangade = ($math + $english + $kiswa + $chem + $phy + $cre + $bio + $histo + $bst + $comp) / 9;

    if ($meangade <= 30){
        $meangade = "E";
    }elseif ($meangade <= 40){
        $meangade = "D-";
    }elseif ($meangade <= 50){
        $meangade = "D";
    }elseif ($meangade <= 60){
        $meangade = "D+";
    }elseif ($meangade <= 70){
        $meangrade = "C-";
    }elseif ($meangade <= 80){
            $meangade = "A";
    }else ($meangade= "A+");
//getting the positions of students
//to be done mark.
//    calculating the grade...
        require_once "connection_db.php";

        $additionQuery = "INSERT INTO `results`(`id`, `adimision`, `studentname`, `math`, `english`,
                      `kiswahili`, `chemistry`, `physics`, `CRE`, `biology`, `history`, `bustness`,
                      `computer`,`grade`,`position`,`marks`)
                    VALUES (null,'$addmission','$student','$math','$english','$kiswa','$chem',
                            '$phy','$cre','$bio','$histo','$bst','$comp','$meangade','tt','$marks')";
        $additionfinal = mysqli_query($connection, $additionQuery);

        if (isset($additionfinal)) {
            header("location:addresults.php");
        } else {
            echo "sorry";
        }


}
if (isset($_POST['add_stdone_open_results'])){
    $res= $_POST['open'];

    require_once "connection_db.php";
    $insertq= "UPDATE `results` SET `computer`='$res' WHERE adimision=0";
    $insert = mysqli_query($connection, $insertq);
    if (isset($insert)) {
        header("location:addresults.php");
    } else {
        echo "sorry";
    }
}
?>

