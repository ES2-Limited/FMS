<?php
    session_start();
    $role = $_SESSION['role'];
    if(!isset($_SESSION['username']) || $role!="Chairman"){
      header('Location: /fleet');
    }

    include ('../conn.php');

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
                            <h2>ADD USER</h2>
                        </div>

                            <?php
                                if(isset($error)){
                                    echo $error;
                                }
                            ?>
                        <!-- Form Body starts -->
                        <div class="body">
                            <form id="form_validation" action="add_user.php" method="post" name="user">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="staff id">Enter Staff Id</label>
                                        <input type="text" class="form-control" name="staff_id">                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="fname">Enter Staff First Name</label>
                                        <input type="text" class="form-control" name="fname">                                     
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="mdname">Enter Staff Middle Name</label>
                                        <input type="text" class="form-control" name="mdname" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <label for="lname">Enter Staff Last Name</label>
                                        <input type="text" class="form-control" name="lname">                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="role" id="Administrator" value="Chairman" class="with-gap">
                                    <label for="Administrator" class="m-l-20">Administrator</label>
                                    
                                    <input type="radio" name="role" id="manager" value="Manager" class="with-gap">
                                    <label for="manager" class="m-l-20">Manager</label>

                                    <input type="radio" name="role" id="officer" value="officer" class="with-gap">
                                    <label for="officer" class="m-l-20">Transport Officer</label>

                                    <input type="radio" name="role" id="driver" value="driver" class="with-gap">
                                     <label for="driver" class="m-l-20"> Driver</label>
                                    
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="password" class="form-control">Password</label>
                                        <input type="password" class="form-control" name="pwd" required>

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
