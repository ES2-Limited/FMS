<?php
    session_start();

    include ('../conn.php');

    include 'head1.php';
    include 'nav.php';

?>
    <section class="content">
        <div class="container-fluid">            
            <div class="block-header">
                <h2> DRIVER REGISTRATION </h2>
            </div>

            <!-- Data Entry -->
            <div class="row clearfix">
                <div class="card col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <?php
                        if(isset($error)){
                            echo $error;
                        }
                    ?>

                    <form id="form_validation" method="POST" action="" name="driver_reg">
                        <div class="body">
                            <div class="col-lg-6">
                                <div class="header">
                                    <h2>PERSONAL INFORMATION</h2>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sname"  required>
                                        <label class="form-label">Surname Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mname"  >
                                        <label class="form-label">Middle Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fname"  required>
                                        <label class="form-label">First Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="phone" step="any" min="0" required>
                                        <label class="form-label">Phone Number</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" >
                                        <label class="form-label">Email Address</label>
                                    </div>
                                </div>

                                <div class="form-group form-float form-line">
                                    <h6>Residential Address</h6>
                                </div>

                                <div class="form-group form-float form-line">
                                    <select class="form-control show-tick" name="rstate" required>
                                        <option >Please select a State</option>
                                        <option > FCT</option>
                                        <option > Abia</option>
                                        
                                    </select>
                                </div>

                                <div class="form-group form-float form-line">
                                    <select class="form-control show-tick" name="rlga" required>
                                        <option >Please select a LGA</option>
                                        <option > AMAC</option>
                                        <option > Kuje</option>
                                    </select>
                                </div>

                                <div class="form-group form-float form-line">
                                    <select class="form-control show-tick" name="rtown" required>
                                        <option >Please select a Town/City</option>
                                        <option > Lugbe</option>
                                        <option > CBD</option>
                                    </select>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="rstreet"  required>
                                        <label class="form-label">House number / Street</label>
                                    </div>
                                </div>

                                <div class="form-group form-float form-line">
                                    <h6>Permanent Address</h6>
                                </div>

                                <div class="form-group form-float form-line">
                                    <select class="form-control show-tick" name="nation" required>
                                        <option > Country of Origin </option>
                                        <option >Nigeria</option>
                                        <option > Biafra</option>
                                        
                                    </select>
                                </div>

                                <div class="form-group form-float form-line">
                                    <select class="form-control show-tick" name="pstate" required>
                                        <option >State of Origin</option>
                                        <option > FCT</option>
                                        <option > Abia</option>
                                        
                                    </select>
                                </div>

                                <div class="form-group form-float form-line">
                                    <select class="form-control show-tick" name="plga" required>
                                        <option >LGA of Origin</option>
                                        <option > AMAC</option>
                                        <option > Kuje</option>
                                    </select>
                                </div>

                                <div class="form-group form-float form-line">
                                    <select class="form-control show-tick" name="ptown" required>
                                        <option >Town/City of Origin </option>
                                        <option > Lugbe</option>
                                        <option > CBD</option>
                                    </select>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="phouse"  required>
                                        <label class="form-label">House number / Street</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line col-lg-6">
                                        <input type="date" class="form-control" name="dob" >
                                        <label class="form-label">Date of Birth (DOB) </label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line col-lg-6">
                                        <input type="text" class="form-control" name="license" >
                                        <label class="form-label">Driver's License Number </label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line col-lg-6">
                                        <input type="date" class="form-control" name="license_expire" >
                                        <label class="form-label">Driver's License Expiry Date </label>
                                    </div>
                                </div>

                                <div class="header">
                                    <h2>MEDICAL DETAILS</h2>
                                </div>

                                <div class="form-group form-float form-line">
                                    <select class="form-control show-tick" name="blood_gp" >
                                        <option >Blood Group</option>
                                        <option > O+ </option>
                                        <option > O- </option>
                                        <option > A+ </option>
                                    </select>
                                </div>

                                <div class="form-group form-float form-line">
                                    <select class="form-control show-tick" name="genotype" >
                                        <option >Genotype</option>
                                        <option > AA </option>
                                        <option > AC </option>
                                        <option > AS </option>
                                        <option > SC </option>
                                        <option > SS </option>
                                    </select>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="allegies" >
                                        <label class="form-label">Allegies</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="medical" >
                                        <label class="form-label">Medical Challenge</label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class=" col-lg-6">
                                <div class="header">
                                    <h2> NEXT OF KIN DETAILS</h2>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fname_kin" required>
                                        <label class="form-label">First Name </label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mname_kin" >
                                        <label class="form-label">Middle Name </label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lname_kin" required>
                                        <label class="form-label">Last Name </label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="phone_kin" min="0" required>
                                        <label class="form-label">Phone Number</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email_kin" >
                                        <label class="form-label">Email Address</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="address_kin" required>
                                        <label class="form-label">Residential Address</label>
                                    </div>
                                </div>

                                <div class="form-group form-float form-line">
                                    
                                    <select class="form-control show-tick" name="relationship" required>
                                        <option >Relationship</option>
                                        <option > Son</option>
                                        <option > Father</option>
                                        <option > Friend</option>
                                        <option > Brother</option>
                                        
                                    </select>
                                </div>
                                    
                                <div class="header">
                                    <h2> REFEREE 1</h2>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fname_referee" required>
                                        <label class="form-label">Referee First Name </label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mname_referee" >
                                        <label class="form-label">Referee Middle Name </label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lname_referee" required>
                                        <label class="form-label">Referee Last Name </label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="phone_referee" min="0" required>
                                        <label class="form-label">Referee Phone Number</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email_referee" >
                                        <label class="form-label">Referee Email Address</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="address_referee" required>
                                        <label class="form-label">Referee Residential Address</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="office_referee" required>
                                        <label class="form-label">Referee Office Address</label>
                                    </div>
                                </div>

 
                                <div class="header">
                                    <h2> REFEREE 2</h2>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fname_referee2" required>
                                        <label class="form-label">Referee First Name </label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mname_referee2" >
                                        <label class="form-label">Referee Middle Name </label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lname_referee2" required>
                                        <label class="form-label">Referee Last Name </label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="phone_referee2" min="0" required>
                                        <label class="form-label">Referee Phone Number</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email_referee2" >
                                        <label class="form-label">Referee Email Address</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="address_referee2" required>
                                        <label class="form-label">Referee Residential Address</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="office_referee2" required>
                                        <label class="form-label">Referee Office Address</label>
                                    </div>
                                </div>

                            </div>

                                <button class="btn btn-primary waves-effect" type="submit" name="driver_reg">SAVE</button>
                                
                        </div>
                    </form>
                    
                </div>
            </div>
            <!-- #END# Data entry  -->
            
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
