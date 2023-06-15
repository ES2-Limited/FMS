<?php

    include 'head1.php';
    include 'nav.php';


?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2> VEHICLE MAINTENANCE  </h2>
            </div>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>VEHICLE MAINTENANCE REQUEST REVIEW </h2>
                        </div>

                            <?php
                                if(isset($error)){
                                    echo $error;
                                }
                            ?>

                        <div class="body">
                            <form id="form_validation" method="POST" action="" name="req_review">
                            
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="service_ategory" required>
                                        <label class="form-label">Name of Officer</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="service_subcategory" required>
                                        <label class="form-label">Designation</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="service_title"  required>
                                        <label class="form-label">Department / Unit</label>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="vehicle_id"  required>
                                        <label class="form-label">Vehicle Number</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="last_odometer"  required>
                                        <label class="form-label">Last Service Millage</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="last_serv_date" >
                                        <label class="form-label">Last Service Date </label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="last_odometer"  required>
                                        <label class="form-label">Present Millage</label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="radio" name="role" id="routine" value="routine" class="with-gap">
                                    <label for="routine">Routine Maintenance</label>
                                    
                                    <input type="radio" name="role" id="repair" value="repair" class="with-gap">
                                    <label for="repair" class="m-l-20">Repair Works</label>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="repairs"  required>
                                        <label class="form-label">Repair / Maintenance Required</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line ">
                                        <input type="datetime" class="form-control" name="date" value="<?php echo($time) ?>" disabled="">
                                        <label class="form-label">Date </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" name="req_review">Process</button>
                                
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
