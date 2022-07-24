<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User libraly Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/signup.css">
</head>
<body>
    <header>

    </header>
    <section>
    <center>
        <div class="signup_container">
            <form action="signup_db.php" id='lib_signup_form' method='post'>
            <center>
                <h1>Welcome, Signup Here.</h1>
            </center>
            <?php if (isset($_GET['succ'])) { ?>
                <p class="succ" style="color: green"><?php echo $_GET['succ']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['errorl'])) { ?>
                <p class="errorl" style="color: red"><?php echo $_GET['errorl']; ?></p>
            <?php } ?>
            
            <label >User Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" required>
            <label >Email</label>
            <input type="email" required class="form-control" placeholder="Email" name="email">
            <label >Libralian No.</label>
            <input type="text" required class="form-control" placeholder="Registration number" name="reg_number">
            <label >Pin</label>
            <input type="password" name="pin" class="form-control" placeholder="Pin" required>
            <label >Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <input type="submit" name="btn_lib_reg" class="btn btn-outline-info mt-2" value='Register' required>
           
        </form>
       
        </div>
        </center>
      
    </section>
    <footer>

    </footer>
</body>
</html>
