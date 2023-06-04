<?php
    session_start();
    // $role = $_SESSION['role'];
    // if(!isset($_SESSION['username']) || $role!="Chairman"){
    //     header('Location: /fleet');
    // }

    include 'head.php';
    include 'nav.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2> FUEL REQUEST </h2>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>FUEL REQUEST </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Vehicle Registration No.</th>
                                            <th>Driver Name</th>
                                            <th>Product</th>
                                            <th>Quantity/Litres</th>
                                            <th>Approved/Litres</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>112233</td>
                                            <td>Shad Decker</td>
                                            <td>PMS</td>
                                            <td>200</td>
                                            <td>20</td>
                                            <td>2008/11/13</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>112233</td>
                                            <td>Shad Decker</td>
                                            <td>PMS</td>
                                            <td>200</td>
                                            <td>20</td>
                                            <td>2008/11/13</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>112233</td>
                                            <td>Shad Decker</td>
                                            <td>PMS</td>
                                            <td>200</td>
                                            <td>20</td>
                                            <td>2008/11/13</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>
