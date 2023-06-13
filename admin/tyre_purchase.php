<?php
    session_start();

    include ('../conn.php');

    include 'head1.php';
    include 'nav.php';

?>
    <section class="content">
        <div class="container-fluid">            
            <div class="block-header">
                <h2> SPARE PART REQUEST </h2>
            </div>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tyre Purchase</h2>
                        </div>

                            <?php
                                if(isset($error)){
                                    echo $error;
                                }
                            ?>

                        <div class="body">
                            <form id="form_validation" method="POST" action="receive_item.php" name="receive">
                                <div class="form-group form-float form-line">
                                   
                                    <select class="form-control show-tick" name="vehicle" required>
                                        <option >Please select a Vehicle</option>
                                        <option > SUV</option>
                                        <option > Salon</option>
                                        
                                    </select>
                                </div>

                                <div class="form-group form-float form-line">
                                   
                                    <select class="form-control show-tick" name="vendor" required>
                                        <option >Please select a Vendor</option>
                                        <option > AYM SHAFA </option>
                                        <option > Tronic Villa </option>
                                        <option > Total </option>
                                        
                                    </select>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="quantity" min="0" required>
                                        <label class="form-label">Tyre Quantity</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="rate" step="any" min="0" required>
                                        <label class="form-label">Rate</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="odometer" step="any" min="0" required>
                                        <label class="form-label">Vehicle Odometer</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line col-lg-6">
                                        <input type="datetime" class="form-control" name="date" value="<?php echo($time) ?>" disabled="">
                                        <label class="form-label">Date </label>
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit" name="tyre_puchase">SAVE</button>
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
