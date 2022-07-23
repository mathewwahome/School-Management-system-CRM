<?php
session_start();
if (!isset($_SESSION['name'])){
    header('location:index.php');
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
    <title>myresults page</title>
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
                            <a class="nav-link" href="merit.php">Classmerit</a>
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
<section>
    <div>
        <?php
        //check if the updatebutton has been clicked
        if (isset($_POST['serch_btn'])) {
            $name = $_POST['stdname'];
            $adm = $_POST['stdadm'];

            require_once "connection_db.php";

            $selectquery = "SELECT * FROM `results` WHERE studentname='$name'  and adimision='$adm' ";
            $selected = mysqli_query($connection, $selectquery);
            echo "
                <center>
                    <h1>$name <br>Admission no. $adm</h1>
                </center>";
        }
        ?>
    </div>
    <div>

        <table class="table table-dark table-hover">
            <tr>
                <th>Name</th>
                <th>Points</th>
                <th>Change</th>
                <th>Grade</th>
                <th>Marks</th>
                <th>Rank</th>
                <!--                to do-->
            </tr>

            <?php
            if (isset($_POST['serch_btn'])) {
                $name = $_POST['stdname'];
                $adm = $_POST['stdadm'];
                $pass = $_POST['stdpass'];

                $md5 = md5($pass);
                require_once "connection_db.php";

                $selectquery = "SELECT * FROM `results` WHERE studentname='$name'  and adimision='$adm' ";
                $selected = mysqli_query($connection, $selectquery);
//            details verification
                $counttherow = mysqli_num_rows($selected);
                if ($counttherow > 0) {
                    session_start();
                    $_SESSION['stdname'] = $name;
                    foreach ($selected as $student) {
                        $id = $student['id'];
                        $admission = $student['adimision'];
                        $name = $student['studentname'];
                        $math = $student['math'];
                        $eng = $student['english'];
                        $kisw = $student['kiswahili'];
                        $bio = $student['biology'];
                        $phy = $student['physics'];
                        $chem= $student['chemistry'];
                        $bst = $student['bustness'];
                        $cre = $student['CRE'];
                        $histo = $student['history'];
                        $comp = $student['computer'];
                        $grade = $student['grade'];
                        $position = $student['position'];
                        echo "
                        <tr>
                            <td>English</td>
                            <td>#point</td>
                            <td>#change</td>
                            <td>$grade</td>
                            <td>$eng</td>
                            <td>$position</td>
                          
                        </tr>
                        <tr>
                            <td>Kiswahili</td>
                            <td>#point</td>
                            <td>#change</td>
                            <td>$grade</td>
                            <td>$kisw</td>
                            <td>$position</td>
                          
                        </tr>
                        <tr>
                            <td>Math</td>
                            <td>#point</td>
                            <td>#change</td>
                            <td>$grade</td>
                            <td>$math</td>
                            <td>$position</td>
                          
                        </tr>
                        <tr>
                            <td>Physics</td>
                            <td>#point</td>
                            <td>#change</td>
                            <td>$grade</td>
                            <td>$phy</td>
                            <td>$position</td>
                          
                        </tr>
                        <tr>
                            <td>Chem</td>
                            <td>#point</td>
                            <td>#change</td>
                            <td>$grade</td>
                            <td>$chem</td>
                            <td>$position</td>
                          
                        </tr>
                        <tr>
                            <td>Histo</td>
                            <td>#point</td>
                            <td>#change</td>
                            <td>$grade</td>
                            <td>$histo</td>
                            <td>$position</td>
                          
                        </tr>
                        <tr>
                            <td>CRE</td>
                            <td>#point</td>
                            <td>#change</td>
                            <td>$grade</td>
                            <td>$cre</td>
                            <td>$position</td>
                          
                        </tr>
                        <tr>
                            <td>Bst</td>
                            <td>#point</td>
                            <td>#change</td>
                            <td>$grade</td>
                            <td>$bst</td>
                            <td>$position</td>
                          
                        </tr>
                        <tr>
                            <td>Comp</td>
                            <td>#point</td>
                            <td>#change</td>
                            <td>$grade</td>
                            <td>$comp</td>
                            <td>$position</td>
                        </tr>";

                    }
                }
            } else{
                echo "sorry";
                }
            ?>


        </table>
    </div>
</section>
<footer>

</footer>
</body>
</html>