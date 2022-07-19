<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liblary_books_list</title>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js.map"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <nav>



        </nav>
    </header>
    <section>
        <div>
            <h4>List of books in the libraly</h4>
            <table class='table table-hover'>
                <tr>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Number</th>
                </tr>
               <?php
               require_once "../connection_db.php";
               $selectQ = "SELECT * FROM `liblary_books` WHERE 1";
               $select = mysqli_query($connection, $selectQ);
                foreach($select as $book){
                    $id = $book['id'];
                    $book_name = $book['book_name'];
                    $author = $book['author'];
                    $subject = $book['subject'];
                    $description = $book['description'];
                    $location = $book['location'];
                    $number = $book['number'];

                    echo"
                    <tr>
                        <td>$book_name</td>
                        <td>$author</td>
                        <td>$subject</td>
                        <td>$description</td>
                        <td>$location</td>
                    </tr>
                    ";
                }
               ?>
            </table>
        </div>
    </section>
    <footer>


    </footer>
</body>
</html>