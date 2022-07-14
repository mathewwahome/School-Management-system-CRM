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
    <title>classteacherlist</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<!--The class teacher has the following abilities
1.Add student to the class list.
2.Update the student register.
3.View the class merit or any other class.
4.View school activities.
-->
<body>
<!--students of a sertain class as recorded by the class teacher-->
<header>
<!--    navbar-->
    <!--    bootstrap header-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top mb-4">
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
                        <a class="nav-link" href="signup.php">Signup</a>
                    </li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Login</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">As Teacher</a></li>
                            <li><a class="dropdown-item" href="#">As Student</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section>
    <div class="row " style="margin-top: 80px">
        <div class="col-4">
            <div>
                <h4>Add Student</h4>
            </div>
            <div>
                <form action="classteacherlist_reg.php" method="post" class=" position-fixed">

                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label >Student Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Student Name" required>
                    <label >Admission</label>
                    <input type="text" class="form-control" name="admission" placeholder="Admission" required>
                    <input type="submit" class="btn btn-info" value="Insert" name="insert_btn">
                </form>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <h4 class="position-fixed">List of students</h4>
            <table class="table table-dark table-hover">
                <tr>
                    <th>Admission</th>
                    <th>Name</th>
                </tr>
                <?php
                require_once "connection_db.php";
                $selectQuery = "SELECT * FROM `form_one_list` ORDER BY admission ASC";
                $selectdone = mysqli_query($connection, $selectQuery);
                foreach ($selectdone as $student){
                    $admission = $student['admission'];
                    $name = $student['name'];
                    echo "<tr>
                            <td>$admission</td>     
                            <td>$name</td>
                        </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</section>
</body>
</html>