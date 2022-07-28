<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('location:index.php');
}
?>

<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/hod.css">
    <link rel="stylesheet" href="assets/css/hod.css">
</head>
<!--The TEACHER has the following abilities
1.
-->

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
                            <img class="avater" src="../assets/images/adrian-regeci-1Ad6gTbYAsM-unsplash.jpg" type="button" data-bs-toggle="dropdown">
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

        <h2>Menu</h2>
        <a href="javascript:void(0)" onclick="closeNav()">
            <h1 style="color: red;">X</h1>
        </a>
        <input type="text" id="mySearch" onkeyup="myFunction()" class="form-control" placeholder="Search.." title="Type in a category">
        <ul id="myMenu">

            <l><a href="#"><i class="fa fa-home"></i>Home</a></l>
            <button class="dropdown-btn pl-2"><i class="fa fa-fw fa-user"></i>Account
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <l><a href="#delition"><i class="fa fa-home"></i>Delete</a></l>
                <l><a href="#updating"><i class="fa fa-fw fa-wrench"></i>Update</a>
                </l>
                <l><a href="#info"><i class="fa fa-fw fa-user"></i>Info</a>
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
            </div>
            <button class="dropdown-btn pl-2"><i class="fa fa-fw fa-user"></i>Student
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
            </div>
            <l><a href="#addimission"><i class="fa fa-fw fa-user"></i>
                    <h5>Students Admission</h5>
                </a>
            </l>
        </ul>
        <button class="dropdown-btn pl-2">Pages
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="fa fa-fw fa-user"></i>Login</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>


    <div id="main">
        <h2>Collapsed Sidebar</h2>
        <p>Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p>
        <button class="openbtn" onclick="openNav()">☰</button>
        <div class="row m-4 ">
            <div class="card m-3">
                <div class="card-header">
                    <a href="">
                        <h4>Update my account</h4>
                    </a>
                </div>
                <div class="card-body">
                    <?php if (isset($_GET['update'])) { ?>
                        <p class="error" style="color: green"><?php echo $_GET['update']; ?></p>
                    <?php } ?>
                    <a href="del_teacher.php"><button class="btn btn-danger del_teacher merit_results">Delete My Account</button></a>
                    <a href="del_teacher.php"><button class="btn btn-info upd_teacher merit_results">Update My Account</button></a>
                </div>
            </div>
            <div class="card m-3">
                <div class="card-header">
                    <a href="">
                        <h4>Add/Delete Student</h4>
                    </a>
                </div>
                <div class="card-body">
                    <a href="../students/studentslist.php"><button class="btn btn-info merit_results">Add student</button></a>
                    <a href="../students/studentslist.php"><button class="btn btn-danger merit_results">Delete student</button></a>
                    <a href="../students/studentslist.php"><button class="btn btn-info merit_results">Update student</button></a>
                </div>
            </div>

            <div class="card m-3">
                <div class="card-header">
                    <a href="">
                        <h4>View merits</h4>
                    </a>
                </div>
                <div class="card-body">
                    <form action="teachers_merit_view.php" method="post">
                        <input type="submit" value="Form One Merits" name='one' class="btn btn-info one merit_results">
                        <input type="submit" value="Form two Merits" name='two' class="btn btn-info merit_results">
                        <input type="submit" value="Form three Merits" name='three' class="btn btn-info merit_results">
                        <input type="submit" value="Form four Merits" name='four' class="btn btn-info merit_results">
                    </form>
                </div>
            </div>
            <div class="card m-3">
                <div class="card-header">
                    <a href="">
                        <h4>Result of any student/(Exam Upload)</h4>
                    </a>
                </div>
                <div class="card-body">
                    <a href="examupload.php"><button class="btn btn-info merit_results" name="upload_btn">Upload Exam Results</button></a>
                    <a href="examupload.php"><button class="btn btn-info merit_results">Update student results</button></a>
                </div>
            </div>
            <div class="card m-3">
                <div class="card-header">
                    <a href="">
                        <h4>Exam calender</h4>
                    </a>
                </div>
                <div class="card-body">
                    <a href="merit.php"><button class="btn btn-info merit_results">View Exam calender</button></a>
                    <a href="merit.php"><button class="btn btn-info merit_results">View List of students</button></a>
                </div>
            </div>
            <div class="card m-3">
                <div class="card-header">
                    <a href="">
                        <h4>List of School activities</h4>
                    </a>
                </div>
                <div class="card-body">
                    <a href="merit.php"><button class="btn btn-info merit_results">View School activities</button></a>
                    <a href="merit.php"><button class="btn btn-info merit_results">View List of students</button></a>
                </div>
            </div>
            <div class="card m-3">
                <div class="card-header">
                    <a href="">
                        <h4>School Timetable</h4>
                    </a>
                </div>
                <div class="card-body">
                    <a href="merit.php"><button class="btn btn-info merit_results"> List of teachers timetable</button></a>
                    <a href="merit.php"><button class="btn btn-info merit_results"> List of students timetable</button></a>
                </div>
            </div>
        </div>
        </section>
        <section>
            <!-- addmission of new students 
        if its form one the form section can be left empty-->
            <div class="admission_form_section" id="addimission">
                <h3>ADDMISSION OF STUDENTS</h3>
                <form action="addmission_db.php">
                    <label for="">Student name</label>
                    <input type="text" required name="" placeholder="" class="form-control">
                    <label for="">student admission</label>
                    <input type="text" required name="" placeholder="" class="form-control">
                    <label for="">student upi</label>
                    <input type="text" required name="" placeholder="" class="form-control">
                    <label for="">form</label>
                    <input type="text" required name="" placeholder="" class="form-control">
                    <label for="">parent/guardian name</label>
                    <input type="text" required name="" placeholder="" class="form-control">
                    <label for="">parent phone number</label>
                    <input type="text" required name="" placeholder="" class="form-control">
                </form>
            </div>
        </section>
        <section>
            <div class="account_delition" id="delition">
                <h4>Delete Account</h4>
                <form action="del_teacher.php" class="form accountdelitionform" method="post">
                    <label>Full Name:</label>
                    <input type="text" placeholder="name" class="form-control" name="tname" required>
                    <label>Pin:</label>
                    <input type="password" placeholder="pin" class="form-control" name="pin" required>
                    <label>Password:</label>
                    <input type="password" placeholder="password" class="form-control" name="password" required>
                    <input type="submit" value="Delete" class="btn btn-danger mt-2" name="del_btnteacher">
                </form>


            </div>
        </section>

        <section class="mt-4">
            <div class="account_delition" id="updating">
                <h4>Update Account</h4>
                <form action="del_teacher.php" class="form accountdelitionform" method="post">
                    <input type="text" placeholder="name" class="form-control" name="tname" required>
                    <input type="text" placeholder="Old pin" class="form-control" required name="o_pin">
                    <input type="password" placeholder="New pin" class="form-control" name="n_pin" required>
                    <input type="password" placeholder="password" class="form-control" name="password" required>
                    <input type="password" placeholder="New password" class="form-control" name="npass" required>
                    <input type="submit" value="Update" class="btn btn-danger mt-2" name="upd_btnteacher">
                </form>
                <a href="teacherspage.php"><button class="btn btn-success m-2">Back</button></a>
            </div>
        </section>
        <footer>
            <!--    jumbotron section-->
            <div class="mt-4 p-5 rounded footer">
                <h1>
                    <font style="color: deeppink;font-family: 'Poppins', 'Montserrat', sans-serif">X</font>-school
                </h1>
                <p>The school to be in</p>
            </div>
        </footer>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <script>
        function myFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("mySearch");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myMenu");
            li = ul.getElementsByTagName("l");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>