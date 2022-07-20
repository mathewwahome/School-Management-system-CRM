<?php
// INSERT INTO `school_fees`(`id`, `admission`, `student_name`, `form`, `amount_paid`, `balans`, `pament_day`, `total_fee`)
//  VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <!-- two div one with the list of student with balans and the other one with no balance
        it should be an echo system.........
        it shoul be in a position to calculate the balance of the fees 

    -->
    <div class="row">
        <div>
            <h3>List of Students with fees balance.</h3>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Adm</th>
                    <th>Form</th>
                    <th>Balance</th>
                    <th></th>
                </tr>
                <?php
                    require_once "../connection_db.php";
                    $selectquery = "SELECT `id`, `admission`, `student_name`, `form`, `amount_paid`, `balans`, `pament_day`, `total_fee` FROM `school_fees` WHERE 1";
                    $select = mysqli_query($connection, $selectquery);

                    foreach($select as $std){
                        $id= $std['id'];
                        $name = $std['student_name'];
                        $admission = $std['admission'];
                        $form= $std['form'];
                        $paid= $std['amount_paid'];
                        $paymentday= $std['pament_day'];
                        $totalfee =$std['total_fee'];
                        $balance = ($totalfee - $paid);

                        if ($balance > 0){
                            echo "<tr>
                                        <td>$name</td>
                                        <td>$form</td>
                                        <td>$admission</td> 
                                        <td>$balance</td>
                                    </tr>";
                        }
                    }
                ?>
            </table>
        </div>
        <div>
            <h3>List of student with no fees balance.</h3>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Adm</th>
                    <th>Form</th>
                    <th>Prepaid</th>
                    <th></th>
                </tr>
                <?php
                    require_once "../connection_db.php";
                    $selectquery = "SELECT `id`, `admission`, `student_name`, `form`, `amount_paid`, `balans`, `pament_day`, `total_fee` FROM `school_fees` WHERE 1";
                    $select = mysqli_query($connection, $selectquery);

                    foreach($select as $std){
                        $id= $std['id'];
                        $name = $std['student_name'];
                        $admission = $std['admission'];
                        $form= $std['form'];
                        $paid= $std['amount_paid'];
                        $paymentday= $std['pament_day'];
                        $totalfee =$std['total_fee'];
                        $balance = ($totalfee - $paid);

                        if ($balance <= 0){
                            echo "<tr>
                                        <td>$name</td>
                                        <td>$admission</td> 
                                        <td>$form</td>
                                        <td>$balance</td>
                                    </tr>";
                        }
                    }
                ?>
            </table>
        </div>
    </div>
    
</body>
</html>