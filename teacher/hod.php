<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOD</title>
    <link rel="stylesheet" href="assets/css/hod.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
</head>
<body>
    <header>

    </header>
    <section>
        <div></div>
        <div class='admin_content'>
            <div class='side_bar_hod'>
                <div class='img_hod'>
                    <h4>$name</h4>
                    <img src="assets/images/profile.jpg" alt="......">
                </div>
                <hr>
                <div><h4>dashboard</h4></div>
                <div><a href="#two" ><h4>Add Teacher</h4></a></div>
                <hr>
                <div><a href=""><h4>View merits</h4></a></div>
                <hr>
                <div><a href=""><h4>Update results</h4></a></div>
                <hr>
                <div><a href="#zero"><h4>View results</h4></a></div>
                <hr>
                <div><a href="#one"><h4>list of techers</h4></a></div>
                <div><a href=""><h4>Exam calender</h4></a></div>
                <hr>
                <div><a href=""><h4>school activities</h4></a></div>
                <hr>
                <div><a href=""><h4>Timetables</h4></a></div>
                <hr>
                <div><a href=""><h4>Delete student</h4></a></div>
                <hr>

            </div>
            <div class='content_container'>
                <div class="web_cuptuer">
                    <!-- ///progress bar -->
                </div>
                <hr>
                <div>
                    <h4>Students merit</h4>
                    
                </div>
                <hr>
                <div>
                    <div id="one">

                        Something

                    </div>
                </div>
                <hr>
                <div id="zero">
                <div class="col" >
            <h1>Login Here</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <form action="loginre.php" method="post">
                <label >User Name</label>
                <input type="text" name="name" required placeholder="Username full" class="p-4 mb-4 form-control">
                <label >Password</label>
                <input type="password" name="u_pass" required placeholder="password" class="p-4 mb-4 form-control">
                <label >Admission</label>
                <input type="text" name="u_admission" required placeholder="Admission" class="p-4 mb-4 form-control">
                <input type="submit" name="login_btn" value="Login" class="btn_login btn btn-info mt-3">
            </form>
            
                </div>
                <hr>
                <div>
                <div class="col">
            <h1>Login Here</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <form action="loginre.php" method="post">
                <label >User Name</label>
                <input type="text" name="name" required placeholder="Username full" class="p-4 mb-4 form-control">
                <label >Password</label>
                <input type="password" name="u_pass" required placeholder="password" class="p-4 mb-4 form-control">
                <label >Admission</label>
                <input type="text" name="u_admission" required placeholder="Admission" class="p-4 mb-4 form-control">
                <input type="submit" name="login_btn" value="Login" class="btn_login btn btn-info mt-3">
            </form>
            
                </div>
                <hr>
                <div>
                <div class="col">
            <h1>Login Here</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <form action="loginre.php" method="post">
                <label >User Name</label>
                <input type="text" name="name" required placeholder="Username full" class="p-4 mb-4 form-control">
                <label >Password</label>
                <input type="password" name="u_pass" required placeholder="password" class="p-4 mb-4 form-control">
                <label >Admission</label>
                <input type="text" name="u_admission" required placeholder="Admission" class="p-4 mb-4 form-control">
                <input type="submit" name="login_btn" value="Login" class="btn_login btn btn-info mt-3">
            </form>
            
                </div>
                <hr>
                <div>
                <div class="col">
            <h1>Login Here</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <form action="loginre.php" method="post">
                <label >User Name</label>
                <input type="text" name="name" required placeholder="Username full" class="p-4 mb-4 form-control">
                <label >Password</label>
                <input type="password" name="u_pass" required placeholder="password" class="p-4 mb-4 form-control">
                <label >Admission</label>
                <input type="text" name="u_admission" required placeholder="Admission" class="p-4 mb-4 form-control">
                <input type="submit" name="login_btn" value="Login" class="btn_login btn btn-info mt-3">
            </form>
            
                </div>
                <hr>
                <div  id="two">
                <div class="col">
            <h1>Login Here</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <form action="loginre.php" method="post">
                <label >User Name</label>
                <input type="text" name="name" required placeholder="Username full" class="p-4 mb-4 form-control">
                <label >Password</label>
                <input type="password" name="u_pass" required placeholder="password" class="p-4 mb-4 form-control">
                <label >Admission</label>
                <input type="text" name="u_admission" required placeholder="Admission" class="p-4 mb-4 form-control">
                <input type="submit" name="login_btn" value="Login" class="btn_login btn btn-info mt-3">
            </form>
            
                </div>
            </div>
        </div>
    </section>
    
    

</body>
</html>