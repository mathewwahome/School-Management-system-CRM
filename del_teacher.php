<?php
//ckeck if the delete button has beeen clkd
if (isset($_POST["del_btnteacher"])){
    //reseive the id from the url
    $pin = $_POST['pin'];
    $password = $_POST['password'];
    $md5 = md5($password);
    $name = $_POST['tname'];
    //connect to the db to delete
    require_once "connection_db.php";
    //create a delete query.....
    $deleteQuery = "DELETE FROM `teachers` WHERE pin='$pin' and password='$md5' and name='$name'";
    //use the mysqliquery method to execute the delete fornction
    $delete = mysqli_query($connection, $deleteQuery);

    if (isset($delete)){
        header("location:index.php");
    }else{
        echo "failed to delete the user";
    }
}elseif (isset($_POST['upd_btnteacher'])){//select confirm then update.
    $pin = $_POST["o_pin"];
    $new_pin = $_POST['n_pin'];
    $password = $_POST['password'];
    $new_password =$_POST['npass'];
    $name = $_POST['tname'];
    $md5 = md5($password);
    $md5new = md5($new_password);

    require_once "connection_db.php";
    $upQuery = "UPDATE `teachers` SET `password`='$md5new',`pin`='$new_pin'
               WHERE pin='$pin' and name='$name'";
    $selectq = "SELECT * FROM `teachers` WHERE pin='$pin' and password='$md5' and name='$name'";
    $sql = mysqli_query($connection,$selectq);
    $num_row =mysqli_num_rows($sql);
    if ($num_row > 0 ){
        $update = mysqli_query($connection, $upQuery);
        if (isset($update)){
            header("location:teacherspage.php?update=Account update succesful.");
        }else{
            echo "failed to delete the user";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete/Update teachers</title>
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
    <div>
        <h4>Delete Account</h4>
        <form action="del_teacher.php" class="form m-3" method="post">
            <input type="text" placeholder="name" class="form-control" name="tname" required>
            <input type="password" placeholder="pin" class="form-control" name="pin" required>
            <input type="password" placeholder="password" class="form-control" name="password"required>
            <input type="submit" value="Delete" class="btn btn-danger mt-2" name="del_btnteacher">
        </form>
    </div>
</section>

<section class="mt-4">
    <h4>Update Account</h4>
    <div>
        <form action="del_teacher.php" class="form m-3" method="post">
            <input type="text" placeholder="name" class="form-control" name="tname" required>
            <input type="text" placeholder="Old pin" class="form-control" required name="o_pin">
            <input type="password" placeholder="New pin" class="form-control" name="n_pin" required>
            <input type="password" placeholder="password" class="form-control" name="password" required>
            <input type="password" placeholder="New password" class="form-control" name="npass" required>
            <input type="submit" value="Update" class="btn btn-danger mt-2" name="upd_btnteacher">
        </form>
        <a href="teacherspage.php"><button  class="btn btn-success m-2">Back</button></a>
    </div>
</section>
</body>
</html>
