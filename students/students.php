<?php
// session_start();
// if (!isset($_SESSION['name'])) {
//     header('location:../index.php');
// }
?>
<?php
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/studentspage.css">
</head>

<body>
    <header>
        <div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-size: 30px">
                        <font style="color: deeppink;font-family: 'Poppins', 'Montserrat', sans-serif">X-</font>School
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="collapsibleNavbar">
                        <ul class="navbar-nav navnavfloat">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="float-right mr-4">
                        <div class="btn-group dropdown dropstart text-end">
                            <!-- <img class="avater" src="../assets/images/adrian-regeci-1Ad6gTbYAsM-unsplash.jpg" type="button" data-bs-toggle="dropdown"> -->
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="myaccount.php">My Account</a></li>
                                <li><a class="dropdown-item active" href="../logout.php">Logout</a></li>
                                <li><a class="dropdown-item " href="#">Active</a></li>
                                <li><a class="dropdown-item " href="#">anotherpage</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div id="mySidebar" class="sidebar">
        <div class="student_profile_pic">
            <img src="assets/images/kelvin.jpg" alt="">
        </div>
        <a href="javascript:void(0)" onclick="closeNav()">
            <h1 class="closebtn">x</h1>
        </a>
        <input type="text" id="mySearch" onkeyup="myFunction()" class="form-control" placeholder="Search.." title="Type in a category">
        <ul id="myMenu">

            <l><a href="#"><i class="fa fa-home"></i>Home</a></l>
            <l><a href="#"><i class="fa fa-home"></i>Dashboard</a></l>
            <l><a href="#"><i class="fa fa-home"></i>My Account</a></l>
            <l><a href="#myresults_check_form"><i class="fa fa-home"></i>My Results</a></l>
            <l><a href="#merit_signup_form"><i class="fa fa-home"></i>Class Merit</a></l>
            <l><a href="#liblary_check"><i class="fa fa-home"></i>School Libraly</a></l>
            <l><a href="#revision_materials"><i class="fa fa-home"></i>Revision mat</a></l>
            <l><a href="#Assingment_ckeck"><i class="fa fa-home"></i>Assignment</a></l>
            <l><a href="#"><i class="fa fa-home"></i>Fees Info</a></l>
            <l><a href="#"><i class="fa fa-home"></i>Fun page</a></l>


            <!-- <button class="dropdown-btn pl-2"><i class="fa fa-fw fa-user"></i>Account
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <l><a href="#"><i class="fa fa-fw fa-wrench"></i>Student</a>
                </l>
                <l><a href="#"><i class="fa fa-fw fa-user"></i>Clients</a>
                </l>
                <l><a href="#"><i class="fa fa-home"></i>Delete</a></l>
                <l><a href="#"><i class="fa fa-fw fa-wrench"></i>Update</a>
                </l>
                <l><a href="#"><i class="fa fa-fw fa-user"></i>Info</a>
                </l>
            </div>
            <button class="dropdown-btn pl-2"><i class="fa fa-fw fa-user"></i>Results
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <l><a href="#"><i class="fa fa-fw fa-wrench"></i>Student</a>
                </l>
                <l><a href="#"><i class="fa fa-fw fa-user"></i>Merit</a>
                </l>
                <l><a href="#"><i class="fa fa-home"></i>Delete</a></l>
                <l><a href="#"><i class="fa fa-fw fa-wrench"></i>Update</a>
                </l>
                <l><a href="#"><i class="fa fa-fw fa-user"></i>Check</a>
                </l>
            </div> -->
        </ul>
        <button class="dropdown-btn pl-2"> More Pages
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="fa fa-fw fa-user"></i>Class Fun</a>
            <a href="#">Chart Box</a>
            <a href="#">Announcements</a>
        </div>
    </div>


    <div id="main">

        <button class="openbtn float-left" onclick="openNav()">☰</button>
        <div class="content_container_section">
            <h2>Collapsed Sidebar</h2>
            <p>Click on the hamburger menu/bar icon to open the sidebar, and
                push this conteick on the hamburger menu/bar icon to open the
                sidebar, and push this conteick on the hamburger menu/bar ic
                on to open the sidebar, and push this conteick on the hamburg
                er menu/bar icon to open the sidebar, and push this conteick on the hamburger menu/bar
                icon to open the sidebar, and push this conteick on the hamburg
                er menu/bar icon to open the sidebar, and push this conteick on
                the hamburger menu/bar icon to open the sidebar, and push this
                conteick on the hamburger menu/bar icon to open the sidebar, an
                d push this conteick on the hamburger menu/bar icon to open the
                sidebar, and push this content to the right.</p>

            <div id="merit_signup_form" class="form_styles_in_students">
                <h3>View the merit of the class</h3>
                <form method="post" action="../results/merit.php">
                    <!--        spesific_std_rslt.php-->
                    <label>Form:</label>
                    <input type="text" placeholder="Merit form" name="form" class="form-control">
                    <label>Year:</label>
                    <input type="text" placeholder="Exam Year." name="year" class="form-control">
                    <label>Term:</label>
                    <input type="text" placeholder="Term" name="term" class="form-control">
                    <label>Which Exam:</label>
                    <input type="text" placeholder="Which exam eg.endterm" name="examtime" class="form-control">
                    <input type="submit" class="btn btn-info" value="Search" name="serch_btn">
                </form>
            </div>
            <div id="myresults_check_form" class="form_styles_in_students">
                <h3>View my results </h3>
                <form method="post" action="../results/myresult.php">
                    <!--        spesific_std_rslt.php-->
                    <label>Full name:</label>
                    <input type="text" placeholder="Studentname" name="stdname" class="form-control">
                    <label>Addmission:</label>
                    <input type="text" placeholder="Admission No." name="stdadm" class="form-control">
                    <label>Password:</label>
                    <input type="password" placeholder="Password" name="stdpass" class="form-control">
                    <input type="submit" class="btn btn-info" value="Search" name="serch_btn">
                </form>
            </div>
            <div id="Assingment_ckeck" class="form_styles_in_students">
                <h3>Check assingment</h3>
                <form method="post" action="../results/merit.php">
                    <!--        spesific_std_rslt.php-->
                    <label>Form:</label>
                    <input type="text" placeholder="Merit form" name="form" class="form-control">
                    <label>Year:</label>
                    <input type="text" placeholder="Exam Year." name="year" class="form-control">
                    <label>Term:</label>
                    <input type="text" placeholder="Term" name="term" class="form-control">
                    <label>Which Exam:</label>
                    <input type="text" placeholder="Which exam eg.endterm" name="examtime" class="form-control">
                    <input type="submit" class="btn btn-info" value="Search" name="serch_btn">
                </form>
            </div>
            <div id="revision_materials" class="form_styles_in_students">
                <h3>Revision materials</h3>
                <p>the revision materials are arranged accoring to forms,
                    the there is the joint exams such as the mokes</p>
                <form method="post" action="../results/merit.php">
                    <!--        spesific_std_rslt.php-->
                    <label>Form:</label>
                    <input type="text" placeholder="Merit form" name="form" class="form-control">
                    <label>Year:</label>
                    <input type="text" placeholder="Exam Year." name="year" class="form-control">
                    <label>Term:</label>
                    <input type="text" placeholder="Term" name="term" class="form-control">
                    <label>Which Exam:</label>
                    <input type="text" placeholder="Which exam eg.endterm" name="examtime" class="form-control">
                    <input type="submit" class="btn btn-info" value="Search" name="serch_btn">
                </form>
            </div>
            <div id="liblary_check">
                <h3>consolt the school libraly </h3>
                <p>check the books available and also you can suggect the
                    books that you feel the can be added to the school libraly
                    but also you bave the ability to upload one of your own books in pdf form to the school liblary
                    the it should be pedding to await to be approved by the aschool liblarian.
                </p>
            </div>
        </div>

        </section>
    </div>
    <script src="assets/js/students.js"></script>
</body>

</html>