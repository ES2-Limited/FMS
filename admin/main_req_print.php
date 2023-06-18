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

                        <div class="body">
                            
                            <div id="print"> 
                                <h4 align="center"> NCAA </h4>
                                <h5 align="center"> Head Office, Abuja </h5>
                                <h5 align="center" style="text-decoration: underline"> Job request Form </h5>
                                <h5 align="center"> </h5>
                                    

                                <div class="" align="right">
                                    <h5>TO: THE WORKSHOP MANAGER</h5>
                                    <h5>..........................</h5>
                                    <h5>..........................</h5>
                                    <h5>..........................</h5>
                                    <h5>Date: ....................</h5>
                                    <h5> </h5>
                                </div>

                                <div>
                                    <h5> </h5>
                                    <h5>FROM: HOD (TRANSPORT),</h5>
                                    <h5>NCAA,</h5>
                                    <h5>Head Office, Abuja</h5>
                                    <h5> </h5>
                                </div>

                                <div class="body-print">
                                    <h5 align="center" style="text-decoration: underline">REQUEST FOR MAINTENANCE </h5>
                                    <p>The vehicle with the registration Number 15632A is confirmed due for routine service and repair works as detailed below</p>

                                    <p>1. .........................................................</p>
                                    <p>2. .........................................................</p>
                                    <p>3. .........................................................</p>
                                    <p>4. .........................................................</p>
                                    <p>5. .........................................................</p>

                                    <p>Please arrange and carry out the service/repair accordingly <br> Thanks.</p>

                                    <p> </p>
                                    <p>HOD (Transport)</p>

                                </div>
                            </div>

                            <center>
                                <button>
                                <a href="javascript:void(0);" onclick="printPageArea('print')">Print</a>
                                </button>
                            </center>
                    
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


<script>
    function printPageArea(areaID){
        var printContent = document.getElementById(areaID).innerHTML;
        var originalContent = document.body.innerHTML;
        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContent;
    }
</script>

</body>

</html>
