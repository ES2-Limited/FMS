<?php

    session_start();
    $role = $_SESSION['role'];
    $user = $_SESSION['username'];
    if(!isset($_SESSION['username']) || $role!="Chairman"){
        header('Location: /fleet');
    }

    include 'head1.php';
    include 'nav.php';


    include ('../conn.php');

        $time=date("Y-m-d h:i") ;

        if(isset($_POST['receive'])){
    //collecting form inputs using the specified method
    $store  = mysqli_real_escape_string($db, trim($_POST['store']));
    $code  = mysqli_real_escape_string($db, trim($_POST['code']));
    $receive = mysqli_real_escape_string($db, trim($_POST['from']));
    $name = mysqli_real_escape_string($db, trim($_POST['name']));
    $desc = mysqli_real_escape_string($db, trim($_POST['desc']));
    $qty = mysqli_real_escape_string($db, trim($_POST['qty']));
    $unit = mysqli_real_escape_string($db, trim($_POST['unit']));
    $folio = mysqli_real_escape_string($db, trim($_POST['folio']));

    //check for empty field
    if(!empty($store) && !empty($code) && !empty($receive) && !empty($name) && !empty($desc) && !empty($qty) && !empty($unit) && !empty($folio)){

        
        //check for duplicate
        $check= "SELECT COUNT(*) FROM item WHERE store_code = '".$code."' && item_name = '".$name."' && quantity = '".$qty."' && unit = '".$unit."'";


        $sql = mysqli_query($db,$check);
            
        $row = mysqli_fetch_assoc($sql);  

        if($row['COUNT(*)'] == 0) {

            //insert values 
            $query="INSERT INTO item (store, store_code, received_from, item_name, description, quantity, unit, folio, receive_date, status, user) VALUES('$store', '$code', '$receive', '$name', '$desc', '$qty', '$unit', '$folio', '$time', 'receive', '$user')";
            
            $action= mysqli_query($db, $query);

            if($action){
                $error="<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
                       ITEM RECEIVED IS SUCCESSFULLY SUMBITED <br> 
                    </div> "; 
            }
            else{
                $error="<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
                       Error in Data Entry <br>
                       Please Contact The Web Admin
                    </div>";
                }
        }
        else{
            $error="<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                SORRY DUPLICATION IS NOT ALLOWED <br>
                </div>";
        }
    }
    else{
    
        $error="<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            PLEASE KINDLY FILL ALL REQUIRED FIELDS
        </div>";

        }
    }


?>
?>
    <section class="content">
        <div class="container-fluid">            

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>RECEIVE ITEM FORM</h2>
                        </div>

                            <?php
                                if(isset($error)){
                                    echo $error;
                                }
                            ?>

                        <div class="body">
                            <form id="form_validation" method="POST" action="receive_item.php" name="receive">
                                <div class="form-group form-float form-line">
                                   
                                    <select class="form-control show-tick" name="store" required>
                                        <option >Please select a store</option>
                                        <?php
                                            $store = mysqli_query($db, "SELECT store_name From store");  // Use select query here 

                                            while($data = mysqli_fetch_array($store))
                                            {
                                                echo "<option value='". $data['store_name'] ."'>" .$data['store_name'] ."</option>";  // displaying data in option menu
                                            }   
                                            ?>

                                    </select>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="code" required>
                                        <label class="form-label">Store Code</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="from" required>
                                        <label class="form-label">Received From</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Item Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="desc" required>
                                        <label class="form-label"> Description </label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line col-lg-6">
                                        <input type="number" class="form-control" name="qty" required>
                                        <label class="form-label">Quantity</label>
                                    </div>                                    
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line col-lg-6">
                                        <input type="text" class="form-control" name="unit" required>
                                        <label class="form-label">Unit of Measurement </label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line col-lg-6">
                                        <input type="text" class="form-control" name="folio" required>
                                        <label class="form-label">Folio </label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line col-lg-6">
                                        <input type="datetime" class="form-control" name="date" value="<?php echo($time) ?>" disabled="">
                                        <label class="form-label">Date </label>
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit" name="receive">SAVE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            
        </div>
    </section>
<?php mysqli_close($db);  // close connection ?>
    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="../plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>
