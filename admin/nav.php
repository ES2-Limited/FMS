
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">Fleet Management App </a>
            </div>
            
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar" >
                        <!-- User Info -->
                        <div class="user-info">
                <div class="image">
                    <img src="../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "$user"; ?> Admin</div>
                    <div class="email"> admin<?php echo "$f_name $l_name"; ?> </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="user_profile.php"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>HOME</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group_add</i>
                            <span>DRIVER</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="driver_reg.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Driver Registration</span>
                                </a>
                            </li>
                            <li>
                                <a href="driver_report_list.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Driver Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">directions_car</i>
                            <span>VEHICLE</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="vehicle_reg.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Vehicle Registration</span>
                                </a>
                            </li>
                            <li>
                                <a href="vehicle_list.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Vehicle Report</span>
                                </a>
                            </li>
                            <li>
                                <a href="vehicle_assign.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Vehicle Assignment</span>
                                </a>
                            </li>
                            <li>
                                <a href="vehicle_assign_list.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Vehicle Assignment Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_gas_station</i>
                            <span>FUEL</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="fuel_request.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Fuel Request</span>
                                </a>
                            </li>
                            <li>
                                <a href="fuel_request_list.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Fuel Request Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>MAINTENANCE</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="main_req_list.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Vehicle Maintenance Request</span>
                                </a>
                            </li>
                            <li>
                                <a href="main_serv_req_add.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Add Vehicle Service</span>
                                </a>
                            </li>
                            <li>
                                <a href="main_serv_req.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Vehicle Service Request</span>
                                </a>
                            </li>
                            <li>
                                <a href="main_serv_req_list.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Vehicle Service Report</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">report</i>
                            <span>ISSUES</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="issue_add.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Issue Registration</span>
                                </a>
                            </li>
                            <li>
                                <a href="issue_view.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Issue Report</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">build</i>
                            <span>SPAREPART</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="sparepart_request_list.php">
                                    <i class="material-icons">assignment</i>
                                    <span>SparePart Request</span>
                                </a>
                            </li>
                            <li>
                                <a href="sparepart_report_list.php">
                                    <i class="material-icons">assignment</i>
                                    <span>SparePart Report</span>
                                </a>
                            </li>
                            <li>
                                <a href="sparepart_add.php">
                                    <i class="material-icons">assignment</i>
                                    <span>SparePart Create</span>
                                </a>
                            </li>
                            <li>
                                <a href="tyre_purchase.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Tyre Purchase</span>
                                </a>
                            </li>
                            <li>
                                <a href="tyre_report_view.php">
                                    <i class="material-icons">assignment</i>
                                    <span>Tyre Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">store</i>
                            <span>VENDOR</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="vendor_reg.php">
                                    <i class="material-icons">store</i>
                                    <span>Vendor Registration</span>
                                </a>
                            </li>
                            <li>
                                <a href="vendor_view.php">
                                    <i class="material-icons">store</i>
                                    <span>Vendor Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group_add</i>
                            <span>USER</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="user_add.php">
                                    <i class="material-icons">person_add</i>
                                    <span>User Management</span>
                                </a>
                            </li>
                            <li>
                                <a href="user_edit.php">
                                    <i class="material-icons">person</i>
                                    <span>User Report / Edit</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="../logout.php">
                            <i class="material-icons">input</i>
                            <span>LOGOUT</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
