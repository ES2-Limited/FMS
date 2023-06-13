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
                            <h2>ADD NEW USER</h2>
                        </div>

                            <?php
                                if(isset($error)){
                                    echo $error;
                                }
                            ?>

                        <div class="body">
                            <form id="form_validation" method="POST" action="#" name="user">
                            
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fname" required>
                                        <label class="form-label">First Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lname" required>
                                        <label class="form-label">Last Name</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="radio" name="role" id="Admin" value="Chairman" class="with-gap">
                                    <label for="Admin">Administrator</label>

                                    <input type="radio" name="role" id="driver" value="driver" class="with-gap">
                                    <label for="driver" class="m-l-20">Driver</label>

                                </div>
                                
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="phone" min="0" required>
                                        <label class="form-label">Phone Number</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" required>
                                        <label class="form-label">Username / Staff ID</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="pwd" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit" name="add_user">SUBMIT</button>
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
