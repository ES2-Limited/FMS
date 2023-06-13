<?php
    session_start();

    include ('../conn.php');

    include 'head.php';
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
                            <h2 class="text-center">SPARE PART REQUEST APPROVAL</h2>
                        </div>

                            <?php
                                if(isset($error)){
                                    echo $error;
                                }
                            ?>
                        <!-- Form Body starts -->
                        <div class="body">
                            <div class="date text-right">
                                <p><?php date_default_timezone_set("Africa/Lagos"); echo date('d/m/y h:ia');?></p>
                            </div>
                            <form id="form_validation" action="approve_request_sparepart.php" method="post" name="approve_sparepart">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="vehicle_reg">Vehicle Registration No.</label>
                                        <input type="text" class="form-control" name="vehicle_reg_no">                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="driver_name">Driver Name</label>
                                        <input type="text" class="form-control" name="driver_name">                                     
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="sparepart_needed">Spare Part Needed</label>
                                        <input type="text" class="form-control" name="sparepart_needed" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="reason_change">Reason for Change</label>
                                        <input type="text" class="form-control" name="reason_change">                                        
                                    </div>
                                
                                
                                <!-- <button class="btn btn-primary waves-effect pull-right" type="submit" name="user">SUBMIT</button> -->
                                <button class="btn btn-outline-primary " type="submit" name="">Approve</button>
                                <button class="btn btn-outline-danger pull-right">Disapprove</button>

                            </form>
                            <!-- Form body ends -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            
        </div>
    </section>
<?php
    include 'foot.php';
?>
