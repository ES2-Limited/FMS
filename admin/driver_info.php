<?php
    session_start();
    
    include 'head.php';
    include 'nav.php';
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2> DRIVER REPORT </h2>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DRIVER'S INFORMATION  </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dataTable " align="center">
                                    <thead>
                                        <tr>
                                            <th colspan="8"> PERSONAL INFORMATION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th align="center">Name:</th>
                                            <td align="left" colspan="2"> SaifurRahman</td>
                                            <th>Phone No.: </th>
                                            <td>09089752345</td>
                                            <th>Email : </th>
                                            <td>saif@ksl313.com</td>
                                            <th> </th>
                                        </tr>
                                        <tr>
                                            <th>Date of Birth: </th>
                                            <td>11-22-1973</td>
                                            <th>Driver's Licence Exipry Date:</th>
                                            <td>112233</td>
                                            <th>Driver's Licence:</th>
                                            <td>2345765</td>
                                            <th>Nationality: </th>
                                            <td>Nigerian</td>
                                        </tr>
                                        <tr>
                                            <th>Residential Address: </th>
                                            <td colspan="2"> wuse, zone 4</td>
                                            <td><b>Town:</b> Abuja</td>
                                            <th>LGA:</th>
                                            <td>AMAC</td>
                                            <th>State</th>
                                            <td>FCT </td>
                                        </tr>
                                        <tr>
                                            <th>Permanent Home Address: </th>
                                            <td colspan="2"> Lugbe </td>
                                            <td><b>Town:</b> Lugbe</td>
                                            <th>LGA:</th>
                                            <td>AMAC</td>
                                            <th>State</th>
                                            <td>FCT </td>
                                        </tr>
                                        <tr>
                                            <td> <p> </p></td>
                                        </tr>
                                        <tr>
                                            <th colspan="8">MEDICAL DETAIL</th>
                                        </tr>
                                        <tr>
                                            <th>Blood Group</th>
                                            <td> O- </td>
                                            <th>Genotype</th>
                                            <td> AA </td>
                                            <th>Allergies</th>
                                            <td> none </td>
                                            <th>Medical Challenges</th>
                                            <td> Asthma </td>
                                        </tr>
                                        <tr>
                                            <td> <p> </p></td>
                                        </tr>
                                        <tr>
                                            <th colspan="8">NEXT OF KIN DETAILS</th>
                                        </tr>
                                        <tr>
                                            <th>Name: </th>
                                            <td> Big brother </td>
                                            <th>Phone: </th>
                                            <td> 08098644567 </td>
                                            <th>Email: </th>
                                            <td colspan="2"> bro@mail.com </td>
                                            <td>  </td>
                                        </tr>
                                        <tr>
                                            <th>Residential Address: </th>
                                            <td colspan="2"> wuse, zone 4</td>
                                            <td><b>Town:</b> Abuja</td>
                                            <td><b>LGA:</b> AMAC</td>
                                            <td><b>State:</b> FCT </td>
                                            <th>Relationship</th>
                                            <td> Brother </td>
                                        </tr>
                                        <tr>
                                            <td> <p> </p></td>
                                        </tr>
                                        <tr>
                                            <th colspan="8">REFEREE 1</th>
                                        </tr>
                                        <tr>
                                            <th>Name: </th>
                                            <td> Big brother </td>
                                            <th>Phone: </th>
                                            <td> 08098644567 </td>
                                            <th>Email: </th>
                                            <td colspan="2"> bro@mail.com </td>
                                            <td>  </td>
                                        </tr>
                                        <tr>
                                            <th>Residential Address: </th>
                                            <td colspan="2"> wuse, zone 4</td>
                                            <td><b>Town:</b> Abuja</td>
                                            <td><b>LGA:</b> AMAC</td>
                                            <td><b>State:</b> FCT </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> <p> </p></td>
                                        </tr>
                                        <tr>
                                            <th colspan="8">REFEREE 2</th>
                                        </tr>
                                        <tr>
                                            <th>Name: </th>
                                            <td> Big brother </td>
                                            <th>Phone: </th>
                                            <td> 08098644567 </td>
                                            <th>Email: </th>
                                            <td colspan="2"> bro@mail.com </td>
                                            <td>  </td>
                                        </tr>
                                        <tr>
                                            <th>Residential Address: </th>
                                            <td colspan="2"> wuse, zone 4</td>
                                            <td><b>Town:</b> Abuja</td>
                                            <td><b>LGA:</b> AMAC</td>
                                            <td><b>State:</b> FCT </td>
                                            <td> </td>
                                            <td> </td>
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
