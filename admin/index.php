<?php
    session_start();
    $role = $_SESSION['role'];
    if(!isset($_SESSION['username']) || $role!="Chairman"){
      header('Location: /fleet');
    }


    include 'head.php';
    include 'nav.php';
    include '../count.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
          <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">directions_car</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL VEHICLES</div>
                            <div class="number count-to" data-from="0" data-to="120" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">group_add</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL DRIVERS </div>
                            <div class="number count-to" data-from="0" data-to="100" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">store</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL VENDORS</div>
                            <div class="number count-to" data-from="0" data-to="100" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">directions_car</i>
                        </div>
                        <div class="content">
                            <div class="text">ASSIGNED VEHICLES</div>
                            <div class="number count-to" data-from="0" data-to="100" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">settings</i>
                        </div>
                        <div class="content">
                            <div class="text">MAINTAINANCE REQUEST </div>
                            <div class="number count-to" data-from="0" data-to="100" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">settings</i>
                        </div>
                        <div class="content">
                            <div class="text">UPCOMING MAINTENANCE</div>
                            <div class="number count-to" data-from="0" data-to="100" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">local_gas_station</i>
                        </div>
                        <div class="content">
                            <div class="text">FUEL REQUEST</div>
                            <div class="number count-to" data-from="0" data-to="100" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">build</i>
                        </div>
                        <div class="content">
                            <div class="text">SPARE PART REQUEST </div>
                            <div class="number count-to" data-from="0" data-to="100" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">report</i>
                        </div>
                        <div class="content">
                            <div class="text">RESOLVED ISSUES</div>
                            <div class="number count-to" data-from="0" data-to="100" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">local_gas_station</i>
                        </div>
                        <div class="content">
                            <div class="text">RESOLVED FUEL REQUEST</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $user_count?>" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">build</i>
                        </div>
                        <div class="content">
                            <div class="text">RESOLVED SPAREPART REQUEST</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $user_count?>" data-speed="5" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

            <div class="row clearfix">
            </div>
        </div>
    </section>
<?php
    include 'foot.php';
?>