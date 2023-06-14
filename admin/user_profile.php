<?php

    include ('../conn.php');

    include 'head.php';
    include 'nav.php';


?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2> USER MANAGEMENT </h2>
            </div>

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>UPDATE USER</h2>
                        </div>

                            <?php
                                if(isset($error)){
                                    echo $error;
                                }
                            ?>

                        <div class="body">
                            <form id="form_validation" method="POST" action="" name="user_profile">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fname" value="<?php echo "$first_name";?>" required readonly disabled>
                                        <label class="form-label">First Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lname" value="<?php echo "$last_name";?>" required readonly disabled>
                                        <label class="form-label">Last Name</label>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <input type="radio" name="role" id="Admin" value="Chairman" <?php if($role == 'Chairman') {echo 'checked' ;} ?> class="with-gap" disabled>
                                    <label for="Admin">Administrator</label>

                                    <input type="radio" name="role" id="driver" value="driver" <?php if($role == 'driver') {echo 'checked' ;} ?> class="with-gap" readonly disabled>
                                    <label for="driver" class="m-l-20">Driver</label>


                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" value="<?php echo "$username";?>" required readonly disabled>
                                        <label class="form-label">Username / Staff ID</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="phone" min="0" value="<?php echo "$phone";?>" required readonly>
                                        <label class="form-label">Phone Number</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="pwd" >
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                
                                <button class="btn btn-block bg-green waves-effect" type="submit" name="user_profile" >Edit Profile</button>
                            </form>
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
