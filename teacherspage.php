<?php
session_start();
if (!isset($_SESSION['name'])){
    header('location:index.php');
}
?>

<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers page</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/hod.css">
</head>
<!--The TEACHER has the following abilities
1.
-->
<body>
<header>
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
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="float-right mr-4">
                    <div class="btn-group">
                        <img class="avater" src="assets/images/adrian-regeci-1Ad6gTbYAsM-unsplash.jpg" type="button" data-bs-toggle="dropdown">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="myaccount.php">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<section>
    <div class="row m-4">
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>Update my account</h4></a>
            </div>
            <div class="card-body">
                <?php if (isset($_GET['update'])) { ?>
                    <p class="error" style="color: green"><?php echo $_GET['update']; ?></p>
                <?php } ?>
                <a href="del_teacher.php"><button class="btn btn-danger del_teacher merit_results">Delete My Account</button></a>
                <a href="del_teacher.php"><button class="btn btn-info upd_teacher merit_results">Update My Account</button></a>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>Add/Delete Student</h4></a>
            </div>
            <div class="card-body">
                <a href="studentslist.php"><button class="btn btn-info merit_results">Add student</button></a>
                <a href="studentslist.php"><button class="btn btn-danger merit_results">Delete student</button></a>
                <a href="studentslist.php"><button class="btn btn-info merit_results">Update student</button></a>
            </div>
        </div>

        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>View merits</h4></a>
            </div>
            <div class="card-body">
                <form action="teachers_merit_view.php" method="post">
                    <input type="submit" value="Form One Merits" name='one' class="btn btn-info one merit_results">
                    <input type="submit" value="Form two Merits" name='two' class="btn btn-info merit_results">
                    <input type="submit" value="Form three Merits" name='three' class="btn btn-info merit_results">
                    <input type="submit" value="Form four Merits" name='four' class="btn btn-info merit_results">
                </form>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>Result of any student/(Exam Upload)</h4></a>
            </div>
            <div class="card-body">
                <a href="examupload.php"><button class="btn btn-info merit_results" name="upload_btn">Upload Exam Results</button></a>
                <a href="examupload.php"><button class="btn btn-info merit_results">Update student results</button></a>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>Exam calender</h4></a>
            </div>
            <div class="card-body">
                <a href="merit.php"><button class="btn btn-info merit_results">View Exam calender</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">View List of students</button></a>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>List of School activities</h4></a>
            </div>
            <div class="card-body">
                <a href="merit.php"><button class="btn btn-info merit_results">View School activities</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">View List of students</button></a>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>School Timetable</h4></a>
            </div>
            <div class="card-body">
                <a href="merit.php"><button class="btn btn-info merit_results"> List of teachers timetable</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results"> List of students timetable</button></a>
            </div>
        </div>
    </div>
</section>
<footer>
    <!--    jumbotron section-->
    <div class="mt-4 p-5 rounded footer">
        <h1><font style="color: deeppink;font-family: 'Poppins', 'Montserrat', sans-serif">X</font>-school</h1>
        <p>The school to be in</p>
    </div>
</footer>
</body>
</html>