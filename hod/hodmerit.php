<?php
session_start();
if (!isset($_SESSION['name'])){
    header('location:../index.php');
}
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

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
                            <a class="nav-link" href="../results/results.php">MyResults</a>
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
            require_once "../database/connection_db.php";
            $selectQuery = "SELECT * FROM `results` ORDER BY marks DESC";
            $selectdone = mysqli_query($connection, $selectQuery);


            $previous_marks = 0;            
            $position = 1;


            foreach ($selectdone as $key => $student ){
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

                if($previous_marks != $marks){
                    $position = $key + 1;
                }

                $previous_marks = $marks;//by marks to get position('usrt --function')
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
                            <td><a class='btn btn-info' href='hodmeritupdate.php?u_id=$id&u_name=$name'>Update</a></td>
               
                        </tr>";

            }
            ?>


        </table>
    </div>
</section>
<footer>

</footer>
</body>
</html>