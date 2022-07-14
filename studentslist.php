<?php
session_start();
if (!isset($_SESSION['name'])){
    header('location:index.php');
}
?>
<?php
if (isset($_POST['insert_btn'])){
    $name = $_POST['name'];
    $adm = $_POST['adm'];
    $form= $_POST['form'];
    include_once "connection_db.php";

    $insertquery = "INSERT INTO `students_list`(`id`, `admission`, `name`, `form`)
                    VALUES (null,'$adm','$name','$form')";
    $insert = mysqli_query($connection,$insertquery);
    if (isset($insert)){
        header("location:studentslist.php?done=Student added.");
    }else{
        header("location:studentslist.php?error=Failed to add the student.");

    }
}
?>
<?php
if (isset($_POST['update_btn'])) {
    $userId =$_POST['u_id'];
    $name = $_POST['name'];
    $adm = $_POST['adm'];
    $form = $_POST['form'];
    include_once "connection_db.php";

    $insertquery = "UPDATE `students_list` SET `admission`='$adm',`name`='$name',`form`='$form' WHERE id='$userId'";
    $insert = mysqli_query($connection, $insertquery);
    if (isset($insert)) {
        header("location:studentslist.php?udone=Student Updated.");
    } else {
        header("location:studentslist.php?error=Failed to add the student.");

    }
}

?>
<?php
//check if the updatebutton has been clicked
if (isset($_GET["u_id"])){
//    receive the data from the url
    $userId = $_GET["u_id"];
    $userName =$_GET["u_name"];
    $adm=$_GET["u_adm"];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject students</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/hod.css">

</head>
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
                            <a class="nav-link" href="teacherspage.php">Teachers page</a>
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
    <div class="row m-2">
        <div class="col-6">
            <div>
                <h3>Insert student details</h3>
                <form action="studentslist.php" method="post" class="form">
                    <input type="text" name="name" placeholder="Name" class="form-control">
                    <input type="text" name="adm" placeholder="Admission" class="form-control">
                    <input type="number" name="form" placeholder="Form" class="form-control">
                    <input type="submit" value="Insert" name="insert_btn" class="btn btn-info mt-2">
                    <?php if (isset($_GET['done'])) { ?>
                        <p class="error" style="color: green"><?php echo $_GET['done']; ?></p>
                    <?php } ?>
                </form>
            </div>
            <div>
                <h3>Update student details</h3>
                <form action="studentslist.php" method="post" class="form">
                    <input value="<?php echo $userId; ?>" name="u_id" type="hidden">
                    <input type="text" value="<?php echo $userName; ?>" name="name" placeholder="Name" class="form-control">
                    <input type="text" value="<?php echo $adm; ?>" name="adm" placeholder="Admission" class="form-control">
                    <input type="number"  name="form" placeholder="Form" class="form-control">
                    <input type="submit" value="Update" name="update_btn" class="btn btn-info mt-2">
                    <?php if (isset($_GET['udone'])) { ?>
                        <p class="error" style="color: green"><?php echo $_GET['udone']; ?></p>
                    <?php } ?>
                </form>
            </div>
            <?php if (isset($_GET['mess'])) { ?>
                <p class="error" style="color: darkred"><?php echo $_GET['mess']; ?></p>
            <?php } ?>

        </div>
        <div class="col-6">
            <table class="table table-bordered table-hover table-dark ">
                <h3>Students list.</h3>
                <tr>
                    <th>ADM</th>
                    <th>Name</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                require_once "connection_db.php";
                $selectQuery = "SELECT * FROM `students_list` ORDER BY admission ASC";
                $selectdone = mysqli_query($connection, $selectQuery);
                foreach ($selectdone as $student){
                    $id = $student['id'];
                    $adm = $student['admission'];
                    $name = $student['name'];

                    echo "<tr>
                            <td>$adm</td>
                            <td>$name</td>
                            <td><a class='btn btn-info' href='studentslist.php?u_id=$id&u_name=$name&u_adm=$adm'>Update</a></td>
                            <td><a class='btn btn-danger' href='delete.php?u_id=$id'>Delete</a></td>

                        </tr>";
                }
                ?>
            </table>

        </div>
    </div>
</section>
<footer>

</footer>
</body>
</html>
