<?php
// session_start();
// if (!isset($_SESSION['name'])){
//     header('location:index.php');
// }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/hod.css">
</head>
<!--The HOD has the following abilities
1.register teachers
2.register students
3.add/update student results
4.can add student list

5.view the merit of any class
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
<!-- sidebar -->
<section>
    <div class="row m-4">
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>Add/Delete Teacher</h4></a>
            </div>
            <div class="card-body">
                <form action="teachers_list.php">
                    <button class="btn btn-info merit_results hod_reg_tr">Add Teacher</button>
                    <button class="btn btn-danger merit_results hod_reg_tr">Delete Teacher</button>
                    <button class="btn btn-info merit_results hod_reg_tr">Update Teacher</button>
                </form>
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
                <a href=""><h4>Enter/Update results</h4></a>
            </div>
            <div class="card-body">
                <!--                merit form 1,2,3,4-->
                <a href="hodmerit.php"><button class="btn btn-info merit_results">Form One Merit</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">Form Two Merit</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">Form Three Merit</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">Form Four Merit</button></a>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>View merit</h4></a>
            </div>
            <div class="card-body">
<!--                merit form 1,2,3,4-->
                <a href="merit.php"><button class="btn btn-info merit_results">Form One Merit</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">Form Two Merit</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">Form Three Merit</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">Form Four Merit</button></a>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>Result of any student</h4></a>
            </div>
            <div class="card-body">
                <a href="merit.php"><button class="btn btn-info merit_results">Add student results#</button></a>
                <a href="hodmyresult.php"><button class="btn btn-info merit_results">View spesific std results</button></a>
                <a href="hodmerit.php"><button class="btn btn-info merit_results">Update student results</button></a>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>List of teachers/student</h4></a>
            </div>
            <div class="card-body">
                <a href="teachers_list.php"><button class="btn btn-info merit_results">View List of teachers</button></a>
                <a href="studentslist.php"><button class="btn btn-info merit_results">View List of students</button></a>
            </div>
        </div>  <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>Exam calender#</h4></a>
            </div>
            <div class="card-body">
                <a href="#"><button class="btn btn-info merit_results">View Exam calender</button></a>
                <a href="#"><button class="btn btn-info merit_results">View List of students</button></a>
            </div>
        </div>  <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>List of School activities#</h4></a>
            </div>
            <div class="card-body">
                <a href="#"><button class="btn btn-info merit_results">View School activities</button></a>
                <a href="#"><button class="btn btn-info merit_results">View List of students</button></a>
            </div>
        </div>  <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>School Timetable#</h4></a>
            </div>
            <div class="card-body">
                <a href="#"><button class="btn btn-info merit_results"> List of teachers timetable</button></a>
                <a href="#"><button class="btn btn-info merit_results"> List of students timetable</button></a>
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