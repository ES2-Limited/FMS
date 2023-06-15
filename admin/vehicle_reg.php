<?php
    session_start();

    include ('../conn.php');

    include 'head1.php';
    include 'nav.php';

?>
    <section class="content">
        <div class="container-fluid">            
            <div class="block-header">
                <h2> VEHICLE MANAGEMENT </h2>
            </div>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>VEHICLE REGISTRATION</h2>
                        </div>

                            <?php
                                if(isset($error)){
                                    echo $error;
                                }
                            ?>

                        <div class="body">
                            <form id="form_validation" method="POST" action="" name="vehicle_reg">
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="vehicle_name"  required>
                                        <label class="form-label">Vehicle Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float form-line">
                                   
                                    <select class="form-control show-tick" name="vehicle-type" required>
                                        <option >Please select Vehicle Type</option>
                                        <option > Car</option>
                                        <option > SUV</option>
                                        <option > Salon</option>
                                    </select>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="plate" style="text-transform: uppercase;" required>
                                        <label class="form-label">Plate Number</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="chasis" required>
                                        <label class="form-label">Vehicle Chasis Number</label>
                                    </div>
                                </div>
                                <div class="form-group form-float form-line">
                                   
                                    <select class="form-control show-tick" name="manufacturer" required>
                                        <option >Please select Vehicle Manufacturer</option>
                                        <option > Benz</option>
                                        <option > VW</option>
                                        <option > Toyota</option>
                                    </select>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sec_no" >
                                        <label class="form-label">Vehicle Security Number</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="asset_no"  >
                                        <label class="form-label">Asset Number</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line col-lg-6">
                                        <input type="date" class="form-control" name="date_of_purchase" >
                                        <label class="form-label">Date of Purchase </label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line col-lg-6">
                                        <input type="datetime" class="form-control" name="date" value="<?php echo($time) ?>" disabled="">
                                        <label class="form-label">Date </label>
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit" name="vehicle_reg">SAVE</button>
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
