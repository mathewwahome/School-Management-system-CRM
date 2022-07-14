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
    <title>ADMIN</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<!--The ADMIN has the following abilities
1.
2.
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
                            <li><a class="dropdown-item" href="myaccount.php">My Account</a></li><!---- #####--->
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
                <a href=""><h4>Add/Delete Teacher</h4></a>
            </div>
            <div class="card-body">
                <a href="merit.php"><button class="btn btn-info merit_results">Add Teacher</button></a>
                <a href="merit.php"><button class="btn btn-danger merit_results">Delete Teacher</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">Update Teacher</button></a>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>Add/Delete Student</h4></a>
            </div>
            <div class="card-body">
                <a href="merit.php"><button class="btn btn-info merit_results">Add student</button></a>
                <a href="merit.php"><button class="btn btn-danger merit_results">Delete student</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">Update student</button></a>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>Enter/Update results</h4></a>
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
                <a href=""><h4>View Merits</h4></a>
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
                <a href=""><h4>My Results</h4></a>
            </div>
            <div class="card-body">
                <a href="merit.php"><button class="btn btn-info merit_results">Results For any user</button></a>
            </div>
        </div>
        <div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>List of teachers/students</h4></a>

            </div>
            <div class="card-body">
                <a href="merit.php"><button class="btn btn-info merit_results">List of teachers</button></a>
                <a href="merit.php"><button class="btn btn-info merit_results">List of students</button></a>

            </div>
        </div><div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>My Results</h4></a>

            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet, consequatur, deleniti distinctio dolor doloribus ea, eos e
                    um explicabo facere facilis iste iure nam officiis pariatur perspiciatis provident vitae!</p>
            </div>
        </div><div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>My Results</h4></a>

            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet, consequatur, deleniti distinctio dolor doloribus ea, eos e
                    um explicabo facere facilis iste iure nam officiis pariatur perspiciatis provident vitae!</p>
            </div>
        </div><div class="card m-3" style="width: 400px;">
            <div class="card-header">
                <a href=""><h4>My Results</h4></a>

            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet, consequatur, deleniti distinctio dolor doloribus ea, eos e
                    um explicabo facere facilis iste iure nam officiis pariatur perspiciatis provident vitae!</p>
            </div>
        </div>
    </div>
</section>
<footer>
    <!--    jumbotron section-->
    <div class="mt-4 p-5 rounded">
        <h1><font style="color: deeppink;font-family: 'Poppins', 'Montserrat', sans-serif">X</font>-school</h1>
        <p>The school to be in</p>
    </div>
</footer>
</body>
</html>