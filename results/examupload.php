<?php
session_start();
if (!isset($_SESSION['name'])){
    header('location:../index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/hod.css">
    <title>Exams Upload Page</title>
</head>
<body>
<header>
<!--    navbar----bootstrap-->
</header>
<section>
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Upload Exam</button>
        <ul class="dropdown-menu">
            <form action="examupload.php" method="post">
                <li ><button style="background-color: green" name="formone">Form One</button></li>
                <li><button style="background-color: deeppink" name="formtwo">Form Two</button></li>
                <li><button style="background-color: aqua" name="formthree">Form Three</button></li>
                <li><button style="background-color: aqua" name="formfour">Form four</button></li>
            </form>
          </ul>
    </div>
</section>
<section>
    <div>
        <?php
            if (isset($_POST['formone'])){
                echo '
                        <div class="row">
                        <div class="col-6">
                            <form class="form" method="post" action="subjectteacherupload.php">
                                <h4>Please fillout term one.</h4>
                                <label >Teacher Name</label>
                                <input type="text" name="tname" placeholder="Teacher Name" required class="form-control">
                                <label >Open,Mid or End</label>
                                <input name="time" placeholder="Open,Mid or End" required class="form-control" type="text">
                                <label >Subject</label>
                                <input name="subject" placeholder="Subject" required class="form-control" type="text">
                                <label >Pin</label>
                                <input name="pin" placeholder="Your Pin" required class="form-control" type="text">
                                <label >Class/Form</label>
                                <input name="form" placeholder="Form what" required class="form-control" type="text">
                                <input name="firsttermupload" value="Submit" class="btn btn-info mt-2" type="submit">
                            </form>
                        </div>
                        </div>';
            }elseif (isset($_POST['formtwo'])){
                echo '
                        <div class="row">
                        <div class="col-6">
                            <form class="form" method="post" action="subjectteacherupload.php">
                                <h4>Please fillout term three.</h4>
                                <label >Teacher Name</label>
                                <input type="text" name="tname" placeholder="Teacher Name" required class="form-control">
                                <label >Open,Mid or End</label>
                                <input name="time" placeholder="Open,Mid or End" required class="form-control" type="text">
                                <label >Subject</label>
                                <input name="subject" placeholder="Subject" required class="form-control" type="text">
                                <label >Pin</label>
                                <input name="pin" placeholder="Your Pin" required class="form-control" type="text">
                                <label >Class/Form</label>
                                <input name="form" placeholder="Form what" required class="form-control" type="text">
                                <input name="sectermupload" value="Submit" class="btn btn-info mt-2" type="submit">
                            </form>
                        </div>
                        </div>';
            }elseif (isset($_POST['formthree'])){
                echo '
                        <div class="row">
                        <div class="col-6">
                            <form class="form" method="post" action="subjectteacherupload.php">
                                <label >Teacher Name</label>
                                <input type="text" name="tname" placeholder="Teacher Name" required class="form-control">
                                <h4>Please fillout term three</h4>
                                <label >Open,Mid or End</label>
                                <input name="time" placeholder="Open,Mid or End" required class="form-control" type="text">
                                <label >Subject</label>
                                <input name="subject" placeholder="Subject" required class="form-control" type="text">
                                <label >Pin</label>
                                <input name="pin" placeholder="Your Pin" required class="form-control" type="text">
                                <label >Class/Form</label>
                                <input name="form" placeholder="Form what" required class="form-control" type="text">
                                <input name="thirdtermupload" value="Submit" class="btn btn-info mt-2" type="submit">
                            </form>
                        </div>
                        </div>';
            }elseif (isset($_POST['formfour'])){
                echo '
                        <div class="row">
                        <div class="col-6">
                            <form class="form" method="post" action="subjectteacherupload.php">
                                <label >Teacher Name</label>
                                <input type="text" name="tname" placeholder="Teacher Name" required class="form-control">
                                <h4>Please fillout term three</h4>
                                <label >Open,Mid or End</label>
                                <input name="time" placeholder="Open,Mid or End" required class="form-control" type="text">
                                <label >Subject</label>
                                <input name="subject" placeholder="Subject" required class="form-control" type="text">
                                <label >Pin</label>
                                <input name="pin" placeholder="Your Pin" required class="form-control" type="text">
                                <label >Class/Form</label>
                                <input name="form" placeholder="Form what" required class="form-control" type="text">
                                <input name="fourtermupload" value="Submit" class="btn btn-info mt-2" type="submit">
                            </form>
                        </div>
                        </div>';
            }
        ?>
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
