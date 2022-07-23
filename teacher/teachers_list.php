<?php
session_start();
if (!isset($_SESSION['name'])){
    header('location:index.php');
}
?>
<?php
//check if the updatebutton has been clicked
if (isset($_GET["u_id"])){
//    receive the data from the url
    $userId = $_GET["u_id"];
    $tname =$_GET['name'];
    $sub=$_GET["sub"];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teachers registration</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<header>
<div><a href="hod.php"><button class="float-right btn btn-info">Home</button></a>
</div>
</header>
<section>
    <div class="row">
        <div class="col-6 ml-2">
            <div>
                <h1>HOD->Teachers registration</h1>
                <form action="registertr.php" method="post" class="form ">
                    <label >Tr Name</label>
                    <input type="text" name="name" required placeholder="Tr Name" class="form-control">
                    <label >Subject you teach</label>
                    <input type="text" name="sub" placeholder="Subject" required class="form-control">
                    <label >Class Teacher</label>
                    <input type="text" name="form" placeholder="Classteacher Form" class="form-control">
                    <label >Department</label>
                    <input type="text" name="department" required placeholder="Department" class="form-control">
                    <label >Password</label>
                    <input type="password" placeholder="Password" required class="form-control " name="password">
                    <label >Pin:<p style="color: green;">The pin given by the HOD</p></label>
                    <input type="password" placeholder="Pin" required class="form-control mb-4" name="pin">
                    <input type="submit" name="btn_reg" value="Register" class="btn btn-info">
                </form>
            </div>
            <div>
                <h3>Update teacher details</h3>
                <form action="teachersupdate.php" method="post" class="form mb-4">
                    <input value="<?php echo $userId; ?>" name="u_id" type="hidden">
                    <label >Teachers Name</label>
                    <input type="text" value="<?php echo $tname; ?>" name="name" placeholder="Tr Name" class="form-control">
                    <label >Subject</label>
                    <input type="text" value="<?php echo $sub; ?>" name="sub" placeholder="Subject" class="form-control">
                    <input type="submit" value="Update" name="btn_update" class="btn btn-info mt-2">
                    <?php if (isset($_GET['udone'])) { ?>
                        <p class="error" style="color: green"><?php echo $_GET['udone']; ?></p>
                    <?php } ?>
                </form>
            </div>
            <?php if (isset($_GET['mess'])) { ?>
                <p class="error" style="color: darkred"><?php echo $_GET['mess']; ?></p>
            <?php } ?>
        </div>
        <div class="col-4">
            <table class="table table-bordered table-hover table-dark ">
                <h3>Teachers list.</h3>
                <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                require_once "connection_db.php";
                $selectQuery = "SELECT * FROM `teachers` ORDER BY name ASC";
                $selectdone = mysqli_query($connection, $selectQuery);
                foreach ($selectdone as $teacher){
                    $id = $teacher['id'];
                    $sub = $teacher['subject'];
                    $name = $teacher['name'];

                    echo "<tr>
                            <td>$name</td>
                            <td>$sub</td>
                            <td><a class='btn btn-info' href='teachers_list.php?u_id=$id&name=$name&sub=$sub'>Update</a></td>
                            <td><a class='btn btn-danger' href='delete.php?u_idtr=$id'>Delete</a></td>

                        </tr>";
                }
                ?>

            </table>
        </div>
    </div>
</section>
</body>
</html>
