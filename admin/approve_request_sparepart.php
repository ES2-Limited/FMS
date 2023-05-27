<?php
    session_start();
    $role = $_SESSION['role'];
    if(!isset($_SESSION['username']) || $role!="Chairman"){
      header('Location: /fleet');
    }

    include ('../conn.php');

    // include 'date.css';
    include 'head.php';
    include 'nav.php';

        if(isset($_POST['user'])){
    //collecting form inputs using the specified method
    $Fname  = mysqli_real_escape_string($db, trim($_POST['fname']));
    $Sname  = mysqli_real_escape_string($db, trim($_POST['lname']));
    $role = mysqli_real_escape_string($db, trim($_POST['role']));
    $user = mysqli_real_escape_string($db, trim($_POST['username']));
    $passw = mysqli_real_escape_string($db, trim($_POST['pwd']));
    $pass= md5($passw);

    //check for empty field
    if(!empty($Fname) && !empty($Sname) && !empty($role) && !empty($user) && !empty($pass)){

        
        //check for duplicate
        $check= "SELECT COUNT(*) FROM usr WHERE first_name = '".$Fname."' && last_name = '".$Sname."' && role = '".$role."' && user = '".$user."'";

        $sql = mysqli_query($db,$check);
            
        $row = mysqli_fetch_assoc($sql);  

        if($row['COUNT(*)'] == 0) {

            //insert values 
            $query="INSERT INTO usr (first_name, last_name, role, user, passwd) VALUES('$Fname', '$Sname', '$role', '$user', '$pass')";
            
            $action= mysqli_query($db, $query);

            if($action){
                $error="<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;</button>
                       DATA IS SUCCESSFULLY SUMBITED <br> 
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
    <section class="content">
        <div class="container-fluid">
            
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
