<?php
    session_start();
    $role = $_SESSION['role'];
    if(!isset($_SESSION['username']) || $role!="Chairman"){
        header('Location: /fleet');
    }

    include '../conn.php';
    include 'head.php';
    include 'nav.php';
?>
    <section class="content">
        <div class="container-fluid">

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">VIEW VENDOR DATA</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        
                                        <tr>
                                            <th>VENDOR NAME</th>
                                            <th>VENDOR OFFICIAL ADDRESS</th>
                                             <th>CONTACT PERSON FULLNAME</th>
                                            
                                        </tr>
                                    </thead>
                                <tbody>
                                   
                                <thead class="mt-60">
                                        <tr>
                                            <th>CONTACT PERSON FULLNAME</th>
                                            <th>CONTACT PERSON PHONE NUMBER</th>
                                            <th>VENDOR OFFICIAL EMAIL</th>                                            
                                           
                                        </tr>
                                </thead>
                                



                            <?php
                                // $result = "SELECT * FROM usr ";

                                // $query = mysqli_query($db, $result);
                                //     $sn = 0;
                                // while($row = mysqli_fetch_array($query))
                                    // {
                                    //     $sn++;
                                    //     $fname=$row['first_name'];
                                    //     $Sname=$row['last_name'];
                                    //     $role=$row['role'];
                                    //     $username=$row['user'];

                                    //     echo "<tr>";
                                    //     echo "<td> $sn </td>";
                                    //     echo "<td> $vendorName </td>";
                                    //       echo "<td> $vendorAddress </td>";
                                    //     echo "<td> $vendorContactname</td>";
                                    //     echo "<td> $vendorContactphone </td>";
                                    //     echo "<td> $vendorOfficailemail </td>";
                                    //     echo "<td> $services </td>";
                                    //     echo "<td>$date</td>";
                                    //     echo  "<td><button type='button' class='btn btn-primary'><i class='far fa-eye'></i></button>
                                                //<button type='button' class='btn btn-success'><i class='fas fa-edit'></i></button>
                                                //<button type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></button>
                                                //</td>";
                                    //     echo "";
                                    
                                    //     echo "</tr>";
                                    // }
                            ?>                                        

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