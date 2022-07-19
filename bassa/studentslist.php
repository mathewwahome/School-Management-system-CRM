<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bassaaa student list</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<table class='table'>
            <tr>
                <th>Admission</th>
                <th>Name</th>
            </tr>

<?php

    require_once "../connection_db.php";

    $selectallstds = "SELECT * FROM `students_list` WHERE 1";
    $connectselectq = mysqli_query($connection,$selectallstds);

    foreach($connectselectq as $student){
        $id = $student['id'];
        $name = $student['name'];
        $admission = $student['admission'];
        $form = $student['form'];

        echo "
      
            <tr>
                <td>$admission</td>
                <td>$name</td>
                <td>$form</td>
            </tr>
        
        ";
       

    }
    ?>
    </table>
    </body>
</html>