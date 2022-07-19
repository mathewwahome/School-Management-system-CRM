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
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                    require_once "../connection_db.php";
                    $selectquery = "";
                    $select = mysqli_query($connection, $selectquery);

                    foreach($select as $std){
                        $id= $std['id'];
                        $name = $std['student_name'];
                        $admission = $std['admission'];
                        $form= $std['form'];
                        $paid= $std['amount_paid'];
                        $balance= $std['balans'];
                        $paymentday= $std['pament_day'];
                        $totalfee =$std['total_fee'];
                    }
                ?>
            </table>
        </div>
        <div>
            <h3>List of student with no fees balance.</h3>
        </div>
    </div>
    
</body>
</html>