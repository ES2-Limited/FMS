<?php
session_start();
$role = $_SESSION['role'];
$user = $_SESSION['username'];

if (!isset($_SESSION['username']) || $role != "Chairman") {
    header('Location: /fleet');
}

include('../conn.php');
include 'head.php';
include 'nav.php';

$time = date("Y-m-d h:i");

include 'model.php';

?>
<section class="content">
    <div class="container-fluid">

        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>CAPITAL EXPENDITURE FORM</h2>
                    </div>


                    <?php
                    if (isset($error)) {
                        echo $error;
                    }
                    ?>


                    <div class="body">
                        <form id="form_validation" method="POST" action="#">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="deptal" value="FMI/CAP/" required>
                                    <label class="form-label"> DEPTAL NO </label>
                                </div>
                            </div>
                            <div class="form-group form-float ">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="station" required>
                                    <label class="form-label">STATION</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="textarea" class="form-control" name="head" required>
                                    <label class="form-label"> HEAD </label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="shead" required>
                                    <label class="form-label"> S/HEAD </label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="date" class="form-control" name="date" required>
                                    <label class="form-label">  </label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="amount" required>
                                    <label class="form-label"> AMOUNT </label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="source">
                                    <label class="form-label"> SOURCE </label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="code" required>
                                    <label class="form-label"> CLASSIFICATION CODE </label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="payee" required>
                                    <label class="form-label"> PAYEE </label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="address" required>
                                    <label class="form-label"> ADDRESS </label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="chegue" required>
                                    <label class="form-label">CHEQUE NUMBER</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="date" class="form-control" name="date_des">
                                    <label class="form-label"></label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="textarea" class="form-control" name="description" required>
                                    <label class="form-label">DETAILED DESCRIPTION OF SERVICE OR ARTCILE</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="rate" required>
                                    <label class="form-label">RATE</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="amount" required>
                                    <label class="form-label">AMOUNT</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="fin_authority" value="AIE" required>
                                    <label class="form-label">FINANCIAL AUTHORITY</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="checkbox" name="check" id="check" value="checked" class="with-gap">
                                    <label for="check">I CERTIFY THAT the above account is correct and was incurred under the authority quoted and that the services have veen duly performed and that the rate/price charged is/are according to regulation/ contract or fair and reasonable and that the amount of <b> $amount Naira and $kobo Kobo </b> can be paid under the Classification quoted.</label>
                                </div>
                            </div>
                            
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="officer" required>
                                    <label class="form-label">SIGNATURE OF OFFICER CONTROLLING EXPENDITURE</label>
                                </div>
                            </div>
                            
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="rank" required>
                                    <label class="form-label">RANK OR OFFICE OF OFFICER</label>
                                </div>
                            </div>
                            
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="place" value="Abuja" required>
                                    <label class="form-label">PLACE</label>
                                </div>
                            </div>
                            
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="receiver" value="<?php echo $user ?>" required disabled>
                                    <label class="form-label">RECEIVER</label>
                                </div>
                            </div>
                            
                            <button class="btn btn-primary waves-effect" type="submit" name="capital_budget">SAVE</button>
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