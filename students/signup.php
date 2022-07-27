<?php
// get the data in the student register chechk them in
//  the school student list then if they are there insert 
// the student in the database of the school they belong to else promptback.

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/signup.css">
</head>

<body>
    <section>
        <div class="signup_main_section">
            
                <div class="signup_minimain_section">
                    <h1>SignUp Here</h1>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error" style="color: red"><?php echo $_GET['error']; ?> <a href="login.php">Login Then</a></p>
                    <?php } ?>
                    <?php if (isset($_GET['sorry'])) { ?>
                        <p class="error" style="color: red"><?php echo $_GET['sorry']; ?></p>
                    <?php } ?>
                    <h2>Register here</h2>
                    <form class="form" method="post" action="signup_db.php">
                        <label>User Name</label>
                        <input class="form-control mb-4 p-2" name="s_name" required placeholder="Full Names" type="text">
                        <label>Email</label>
                        <input class="form-control mb-4 p-2" name="email" required placeholder="Email" type="text">
                        <label>Password</label>
                        <input class="form-control mb-4 p-2" name="password" required placeholder="Password" type="password">
                        <label>Adimssion</label>
                        <input class="form-control mb-4 p-2" name="admission" required placeholder="Admission" type="text">
                        <input value="Register" name="btn_register" class=" btn btn-info mt-2" type="submit">

                    </form>
                </div>
            

        </div>
    </section>
</body>

</html>