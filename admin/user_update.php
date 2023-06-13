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
                            <form id="form_validation" method="POST" action="#" name="update_user">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fname" value="<?php echo "$first_name1";?>" required>
                                        <label class="form-label">First Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lname" value="<?php echo "$last_name1";?>" required>
                                        <label class="form-label">Last Name</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="radio" name="role" id="Administrator" value="Chairman" <?php if($role1 == 'Chairman') {echo 'checked' ;} ?> class="with-gap">
                                    <label for="Administrator">Administrator</label>

                                    <input type="radio" name="role" id="head" value="Head" <?php if($role1 == 'Head') {echo 'checked' ;} ?> class="with-gap">
                                    <label for="head" class="m-l-20">Director</label>

                                    <input type="radio" name="role" id="capital" value="Capital" <?php if($role1 == 'Capital') {echo 'checked' ;} ?> class="with-gap">
                                    <label for="capital" class="m-l-20"> Capital</label>
                                    
                                    <input type="radio" name="role" id="other" value="Other-charges" <?php if($role1 == 'Other-charges') {echo 'checked' ;} ?> class="with-gap">
                                    <label for="other" class="m-l-20"> Other Charges</label>

                                    <input type="radio" name="role" id="advance" value="Advances" <?php if($role1 == 'Advances') {echo 'checked' ;} ?> class="with-gap">
                                    <label for="advance" class="m-l-20"> Advance</label>
                                    
                                    <input type="radio" name="role" id="revenue" value="Revenue" <?php if($role1 == 'Revenue') {echo 'checked' ;} ?> class="with-gap">
                                    <label for="revenue" class="m-l-20"> Revenue</label>

                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" value="<?php echo "$username1";?>" required>
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="phone" min="0" value="<?php echo "$phone1";?>"required>
                                        <label class="form-label">Phone Number</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="pwd" >
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                
                                <button class="btn btn-block bg-green waves-effect" type="submit" name="update_user">UPDATE USER </button>
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
