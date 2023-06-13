<?php

if (isset($_POST['capital_budget'])) {
    //collecting form inputs using the specified method
    $deptal  = mysqli_real_escape_string($db, trim($_POST['deptal']));
    $station = mysqli_real_escape_string($db, trim($_POST['station']));
    $head = mysqli_real_escape_string($db, trim($_POST['head']));
    $shead = mysqli_real_escape_string($db, trim($_POST['shead']));
    $date = mysqli_real_escape_string($db, trim($_POST['date']));
    $amount = mysqli_real_escape_string($db, trim($_POST['amount']));

    //check for empty field
    if (!empty($depart) && !empty($name) && !empty($desc) && !empty($qty) && !empty($unit) && !empty($folio)) {


        //check for duplicate
        $check = "SELECT COUNT(*) FROM item WHERE depart = '" . $depart . "' && item_name = '" . $name . "' && quantity = '" . $qty . "' && unit = '" . $unit . "' && description = '" . $desc . "' && folio = '" . $folio . "'";


        $sql = mysqli_query($db, $check);

        $row = mysqli_fetch_assoc($sql);

        if ($row['COUNT(*)'] == 0) {

            //insert values 
            $query = "INSERT INTO item (depart, item_name, description, quantity, unit, folio, receive_date, status, user) VALUES('$depart', '$name', '$desc', '$qty', '$unit', '$folio', '$time', 'despatch', '$user')";

            $action = mysqli_query($db, $query);

            if ($action) {
                $error = "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
                       DISPATCHED ITEM IS SUCCESSFULLY RECORDED <br> 
                    </div> ";
            } else {
                $error = "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
                       Error in Data Entry <br>
                       Please Contact The Web Admin
                    </div>";
            }
        } else {
            $error = "<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                SORRY DUPLICATION IS NOT ALLOWED <br>
                </div>";
        }
    } else {

        $error = "<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            PLEASE KINDLY FILL ALL REQUIRED FIELDS
        </div>";
    }
}

?>