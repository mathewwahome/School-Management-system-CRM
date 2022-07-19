<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User libraly Signup</title>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js.map"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/lib_std_sgnup.css">
</head>
<body>
    <header>

    </header>
    <section>
        <form action="lib_users_db.php" class='lib_signup_form' method='post'>
            <center>
                <h1>Welcome</h1>
            </center>
            <?php if (isset($_GET['lierror'])) { ?>
                <p class="lierror" style="color: red"><?php echo $_GET['lierror']; ?></p>
            <?php } ?>
            <label >User Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" required>
            <label >Pin</label>
            <input type="password" name="pin" class="form-control" placeholder="Pin" required>
            <label >Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <input type="submit" name="btn_li_std_reg" class="btn btn-outline-info mt-2" value='Register' required>
            <?php if (isset($_GET['succ'])) { ?>
                <p class="succ" style="color: green"><?php echo $_GET['succ']; ?></p>
            <?php } ?>
        </form>
    </section>
    <footer>

    </footer>
</body>
</html>
