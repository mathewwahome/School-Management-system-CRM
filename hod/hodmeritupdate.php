<?php
// session_start();
// if (!isset($_SESSION['name'])){
//     header('location:../index.php');
// }
?>
<?php

//check if the updatebutton has been clicked
if (isset($_GET["u_id"])){
//    receive the data from the url
    $userId = $_GET["u_id"];
    $userName =$_GET["u_name"];

require_once "../database/connection_db.php";
$sql = "SELECT * FROM `results` WHERE id = '$userId'";
$conectsql =mysqli_query($connection,$sql);
foreach ($conectsql as $student) {
    $id = $student['id'];
    $admission = $student['adimision'];
    $name = $student['studentname'];
    $math = $student['math'];
    $eng = $student['english'];
    $kisw = $student['kiswahili'];
    $bio = $student['biology'];
    $phy = $student['physics'];
    $bst = $student['bustness'];
    $cre = $student['CRE'];
    $chem =$student['chemistry'];
    $histo = $student['history'];
    $comp = $student['computer'];
    $grade = $student['grade'];
    $marks = $student['marks'];
    //                    to do......................
    $position = $id;
}
}
//                the usort function---
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body>

<section>
    <div class="col-4">
        <h4>Update Results for #name.</h4>
        <form class="form" method="post" action="../results/meritupdate_handler.php">

            <input value="<?php echo $userId; ?>" name="u_id" type="hidden">
            <input type="text" value="<?php echo $admission; ?>" name="u_addmin" class="form-control" placeholder="Admission">
            <input type="text"  value="<?php echo $userName; ?>" name="u_name" class="form-control" placeholder="StudentName">
            <input type="text"  value="<?php echo $math; ?>" name="u_m" class="form-control" placeholder="Math">
            <input type="text" value="<?php echo $eng; ?>" name="u_e" class="form-control" placeholder="English">
            <input type="text" value="<?php echo $kisw; ?>" name="u_k" class="form-control" placeholder="Kiswahili">
            <input type="text" value="<?php echo $chem; ?>" name="u_c" class="form-control" placeholder="Chemistry">
            <input type="text" value="<?php echo $phy; ?>" name="u_p" class="form-control" placeholder="Physics">
            <input type="text" value="<?php echo $cre; ?>" name="u_C" class="form-control" placeholder="CRE">
            <input type="text" value="<?php echo $bio; ?>" name="u_b" class="form-control" placeholder="Biology">
            <input type="text" value="<?php echo $histo; ?>" name="u_h" class="form-control" placeholder="History">
            <input type="text" value="<?php echo $bst; ?>" name="u_bs" class="form-control" placeholder="Business">
            <input type="text" value="<?php echo $comp; ?>" name="u_comp" class="form-control" placeholder="Computer">
            <input class="btn btn-outline-info btn-block" name="btn_update" type="submit" value="Update">
            <a class="btn btn-outline-success btn-block" href="hodmerit.php">Back</a>


        </form>
    </div>
</section>

<!--the  end of the  form section-->
</body>
</html>
