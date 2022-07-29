<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
</head>

<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <input type="file" name="pdf" value="" required><br>
        <input type="submit" value="Upload" name="submit">
        <?php


        ?>
    </form>
</body>

</html>
<div class="card m-3" style="width: 400px;">
    <div class="card-header">
        <a href="">
            <h4>View merit</h4>
        </a>
    </div>
    <div class="card-body">
        <!--                merit form 1,2,3,4-->
        <a href="../results/merit.php"><button class="btn btn-info merit_results">View Merit</button></a>
        <a href="../results/results.php"><button class="btn btn-info merit_results">my Results</button></a>
    </div>
</div>

<div class="card m-3" style="width: 400px;">
    <div class="card-header">
        <a href="">
            <h4>Revision materials</h4>
        </a>
    </div>
    <div class="card-body">
        <a href="#"><button class="btn btn-info merit_results">Revison materials</button></a>
        <a href="assignment.php"><button class="btn btn-info merit_results">Assignments</button></a>
    </div>
</div>
<div class="card m-3" style="width: 400px;">
    <div class="card-header">
        <a href="">
            <h4>School activities</h4>
        </a>
    </div>
    <div class="card-body">
        <a href="#"><button class="btn btn-info merit_results">School Activities</button></a>
        <a href="merit.php"><button class="btn btn-info merit_results">List of students</button></a>
    </div>
</div>