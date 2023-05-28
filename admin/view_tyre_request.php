<?php
    session_start();
    $role = $_SESSION['role'];
    if(!isset($_SESSION['username']) || $role!="Chairman"){
      header('Location: /fleet');
    }

    include ('../conn.php');

    include 'head.php';
    include 'nav.php';
?>
    <section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">TYRE PURCHASE</h2>
                        </div>
                        <!-- Form Body starts -->
                        <div class="body">
                            <form id="form_validation" action="#" method="post" name="#">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="vehicle">Please Select a Vehicle</label>
                                        <input type="text" class="form-control" name="vehicle">                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="vendor">Please Select a Vendor</label>
                                        <input type="text" class="form-control" name="vendor">                                     
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="vendorContactphone">Enter Vendor Contact Person's Phone Number</label>
                                        <input type="text" class="form-control" name="vendorContactphone" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="tyre_quantity">TYRE QUANTITY</label>
                                        <input type="text" class="form-control" name="tyre_quantity">                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="rate">RATE</label>
                                        <input type="text" name="rate" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="vehicle_odometer">VEHICLE ODOMETER</label>
                                        <input type="text" name="vehicle_odometer" class="form-control">
                                    </div>
                                </div>                                 
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="date">Date</label>
                                        <input type="text" value="<?php date_default_timezone_set("Africa/Lagos"); echo date('d/m/y h:ia');?>"/ disabled>
                                    </div>
                                </div>
                                
                                <!-- <button class="btn btn-primary waves-effect pull-right" type="submit" name="user">SUBMIT</button> -->
                                <button class="btn btn-outline-primary " type="submit" name="user">SUBMIT</button>

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
