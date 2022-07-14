<?php

//check if the updatebutton has been clicked
if (isset($_GET["u_id"])) {
//    receive the data from the url
    $userId = $_GET["u_id"];
    $userName = $_GET["u_name"];


    require_once "connection_db.php";
    $sql = "SELECT * FROM `results` WHERE id = '$userId'";
    $conectsql = mysqli_query($connection, $sql);
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
        $chem = $student['chemistry'];
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
<!--merit page-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOD merit</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<header>
    <!--    bootstrap header-->
    <div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-size: 30px"><font style="color: deeppink;font-family: 'Poppins', 'Montserrat', sans-serif">X-</font>School</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="collapsibleNavbar">
                    <ul class="navbar-nav navnavfloat">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="results.php">MyResults</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<section class="mt-4">
    <center>
        <div class="mt-4">
            <h4>Form One Merit</h4>
        </div>
    </center>
</section>
<section>
    <div class="mt-4">
        <table class="table table-dark table-hover">
            <tr>
                <th>Admission</th>
                <th>Name</th>
                <th>Math</th>
                <th>Eng</th>
                <th>Kiswa</th>
                <th>Bio</th>
                <th>Phy</th>
                <th>BST</th>
                <th>CRE</th>
                <th>Histo</th>
                <th>comp</th>
                <th>Grade</th>
                <th>Position</th>
            </tr>

            <?php
            require_once "connection_db.php";
            $selectQuery = "SELECT * FROM `results` ORDER BY marks DESC";
            $selectdone = mysqli_query($connection, $selectQuery);
            foreach ($selectdone as $student){
                $id = $student['id'];
                $admission = $student['adimision'];
                $name = $student['studentname'];
                $math = $student['math'];
                $eng = $student['english'];
                $kisw = $student['kiswahili'];
                $bio = $student['biology'];
                $phy = $student['physics'];
                $bst= $student['bustness'];
                $chem =$student['chemistry'];
                $cre = $student['CRE'];
                $histo = $student['history'];
                $comp = $student['computer'];
                $grade =$student['grade'];
                $marks =$student['marks'];
                //                    to do......................

                $position = $id;//by marks to get position('usrt --function')
//                the usort function---------mark wahome....
//                calculating----
//                1.the mean grade of the class
//                2.of the subject
//                3.additional points of mean, from the previous exam
                echo "<tr>
                            <td>$admission</td>
                            <td>$name</td>
                            <td>$math</td>
                            <td>$eng</td>
                            <td>$kisw</td>
                            <td>$bio</td>
                            <td>$phy</td>
                            <td>$bst</td>
                            <td>$cre</td>
                            <td>$histo</td>
                            <td>$comp</td>
                            <td>$grade</td>
                            <td>$position</td>
                            <td><a class='btn btn-info' href='tr.php?u_id=$id&u_name=$name'>Update</a></td>
               
                        </tr>";

            }
            ?>


        </table>
    </div>
</section>
<section>
    <div class="col-4">
        <h4>Update Results for #name.</h4>
        <form class="form" method="post" action="meritupdate_handler.php">

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
<footer>

</footer>
</body>
</html>