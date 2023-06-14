<?php
    session_start();
    
    include 'head.php';
    include 'nav.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2> VEHICLE MANAGEMENT </h2>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>VEHICLE'S INFORMATION  </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dataTable " align="center">
                                    
                                    <tbody>
                                        <tr>
                                            <th >Vehicle Make: </th>
                                            <td > Toyota</td>
                                            <th>Vehicle Type: </th>
                                            <td> Car</td>
                                            <th>Vehicle Model : </th>
                                            <td>2015</td>
                                        </tr>
                                        <tr>
                                            <td colspan="8"> </td>
                                        </tr>
                                        <tr>
                                            <th>Plate Number</th>
                                            <td>ABJ321XY</td>
                                            <th>Chasis Number: </th>
                                            <td>11221973</td>
                                            <th> Manufacturer:</th>
                                            <td>Toyota</td>
                                        </tr>
                                        <tr>
                                            <td colspan="8"> </td>
                                        </tr>
                                        <tr>
                                            <th>Vehicle Security Number:</th>
                                            <td>2345765</td>
                                            <th>Asset Number: </th>
                                            <td>Nigerian</td>
                                            <th>Date of Purchase: </th>
                                            <td>30-07-2023</td>

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
