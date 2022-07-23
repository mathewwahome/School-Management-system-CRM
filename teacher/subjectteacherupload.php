<?php
session_start();
if (!isset($_SESSION['name'])){
    header('location:index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>merit page</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<section>
    <div class="mt-4">
        <?php
            if (isset($_POST['firsttermupload'])) {
                $subject = $_POST['subject'];
                echo "<h1>$subject Subject Results</h1>";
            }
            ?>
        <form action='results_handler.php' method='post'>
        <table class="table table-dark table-hover">

            <tr>
                <th>Admission</th>
                <th>Name</th>
                <th>open</th>
                <th>mid</th>
                <th>end</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
<?php

//check if the updatebutton has been clicked
if (isset($_GET["u_id"])) {
//    receive the data from the url
    $userId = $_GET["u_id"];
    $userName = $_GET["u_name"];
    $userEmail = $_GET["u_mail"];
    $userPassword = $_GET["u_pass"];
}


if (isset($_POST['firsttermupload'])) {
    $tname = $_POST['tname'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $pin = $_POST['pin'];
    $form = $_POST['form'];

    require_once "connection_db.php";

    $selectteacher = "SELECT * FROM `teachers` WHERE pin='$pin' and name='$tname' and subject='$subject'";
    $teacher = mysqli_query($connection, $selectteacher);
    $teachersnum = mysqli_num_rows($teacher);
    if ($teachersnum > 0) {
        if ($form == 'one' or 1) {
            $selectteacher = "SELECT * FROM `students_list` WHERE form=1";
            $students = mysqli_query($connection, $selectteacher);
            $studentsnum = mysqli_num_rows($students);
            if ($studentsnum > 0) {
                foreach ($students as $student) {
                    $id = $student['id'];
                    $adm = $student['admission'];
                    $name = $student['name'];
                    echo " <form action='results_handler.php' method='post'>

                        <tr>
                            <td>$adm</td>
                            <td>$name</td>
                            <td><input style='width: auto' name='open' type='text'></td>
                            <td><input style='width: auto' name='mid' type='text'></td>
                            <td><input style='width: auto' name='end' type='text'></td>
                        </tr>
                       <tr><td><input type='submit' name='add_stdone_open_results u_id' value='Submit'></td></tr>
                    </form> 
                    ";
                }
            }
        }
    }
}else if (isset($_POST['sectermupload'])){
    $tname = $_POST['tname'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $pin = $_POST['pin'];
    $form = $_POST['form'];

    require_once "connection_db.php";

    $selectteacher = "SELECT * FROM `teachers` WHERE pin='$pin' and name='$tname' and subject='$subject'";
    $teacher = mysqli_query($connection, $selectteacher);
    $teachersnum= mysqli_num_rows($teacher);
    if ($teachersnum > 0){
        if ($form == 'two' or 2){
            $selectteacher = "SELECT * FROM `students_list` WHERE form=1";
            $students = mysqli_query($connection, $selectteacher);
            $studentsnum= mysqli_num_rows($students);
            if ($studentsnum > 0){
                foreach ($studentsnum as $student){
                    $id = $student['id'];
                    $adm = $student['admission'];
                    $name = $student['name'];

                    echo " <form action='results_handler.php' method='post'>
                        <tr>
                            <td>$adm</td>
                            <td>$name</td>
                            <td><input style='width: auto' type='text'></td>
                            <td><input style='width: auto' type='text'></td>
                            <td><input style='width: auto' type='text'></td>
                        </tr>
                        <tr><td><input type='submit' name='add_stdtwo_results' value='Submit'></td></tr>
                    </form>";
                }
            }
        }
    }
}else if (isset($_POST['thirdtermupload'])){
    $tname = $_POST['tname'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $pin = $_POST['pin'];
    $form = $_POST['form'];

    require_once "connection_db.php";

    $selectteacher = "SELECT * FROM `teachers` WHERE pin='$pin' and name='$tname' and subject='$subject'";
    $teacher = mysqli_query($connection, $selectteacher);
    $teachersnum= mysqli_num_rows($teacher);
    if ($teachersnum > 0){
        if ($form == 'three' or 3){
            $selectteacher = "SELECT * FROM `students_list` WHERE form=1";
            $students = mysqli_query($connection, $selectteacher);
            $studentsnum= mysqli_num_rows($students);
            if ($studentsnum > 0){
                foreach ($studentsnum as $student){
                    $id = $student['id'];
                    $adm = $student['admission'];
                    $name = $student['name'];

                    echo " <form action='results_handler.php' method='post'>
                        <tr>
                            <td>$adm</td>
                            <td>$name</td>
                            <td><input style='width: auto' type='text'></td>
                            <td><input style='width: auto' type='text'></td>
                            <td><input style='width: auto' type='text'></td>
                        </tr>
                        <tr><td><input type='submit' name='add_stdthree_results' value='Submit'></td></tr>
                    </form>";
                }
            }
        }
    }
}else if (isset($_POST['fourtermupload'])){
    $tname = $_POST['tname'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];
    $pin = $_POST['pin'];
    $form = $_POST['form'];

    require_once "connection_db.php";

    $selectteacher = "SELECT * FROM `teachers` WHERE pin='$pin' and name='$tname' and subject='$subject'";
    $teacher = mysqli_query($connection, $selectteacher);
    $teachersnum= mysqli_num_rows($teacher);
    if ($teachersnum > 0){
        if ($form == 'four' or 4){
            $selectteacher = "SELECT * FROM `students_list` WHERE form=1";
            $students = mysqli_query($connection, $selectteacher);
            $studentsnum= mysqli_num_rows($students);
            if ($studentsnum > 0){
                foreach ($studentsnum as $student){
                    $id = $student['id'];
                    $adm = $student['admission'];
                    $name = $student['name'];

                    echo " <form action='results_handler.php' method='post'>
                        <tr>
                            <td>$adm</td>
                            <td>$name</td>
                            <td><input style='width: auto' type='text'></td>
                            <td><input style='width: auto' type='text'></td>
                            <td><input style='width: auto' type='text'></td>
                        </tr>
                        <tr><td><input type='submit' name='add_stdfour_results' value='Submit'></td></tr>
                    </form>";
                }
            }
        }
    }
}
?>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type='submit' class="btn btn-info" name='add_stdone_open_results' value='Submit open'></td>
                    <td><input type='submit' class="btn btn-info" name='add_stdone_mid_results' value='Submit mid'></td>
                    <td><input type='submit' class="btn btn-info" name='add_stdone_end_results' value='Submit end'></td>
                </tr>
        </table>
        </form>

    </div>
</section>
</body>
</html>



