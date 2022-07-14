<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
    <!--the bootstrap links-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src ="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <h1 class="text-info text-center">All Users</h1>
<section>
    <!--  bootstrap table -->
    <table class="table table-dark table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <!--the php code to call outthe data that was saved inthe database and display it in a bootstrap form -->
        <?php
        //connect to the data base and get the data form it.
        require_once "db_connection.php";
        //prepare the db selsct query.
        $selectQuery = "SELECT * FROM `users` WHERE 1";
        //select the user by the use of mysqli_query method.
        $users = mysqli_query($connection, $selectQuery);
        //use a foreach loop to disply all the users in the database in a table.
        foreach ($users as $user){
            $name = $user["jina"];
            $email = $user["arafa"];
            $password = $user["siri"];
            $id = $user["id"];
            //echo the users in a table.
         echo "<tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td><a class='btn btn-danger' href='delete.php?u_id=$id'>Delete</a></td>
                        <td><a class='btn btn-info' href='update.php?u_id=$id&u_name=$name&u_mail=$email&u_pass=$password'>Update</a></td>
                </tr>";
        }
        ?>
    </table>
    <!--end of the table-->
</section>

</body>
</html>


