<?php
include_once 'header.php';
?>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index.html" class="brand-link">
                    <img src="resources/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                        style="opacity: 0.8" />
                    <span class="brand-text font-weight-light">GROUP I</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a id="dashboard" href="pages/dashboard.php" class="nav-link">
                                    <i class="nav-icon fas fa-chart-bar"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="crudform" href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>CRUD Form</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a id="login" href="#" class="nav-link">
                                    <i class="nav-icon fas fa-sign-in-alt"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- content goes here.. -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                &copy; <em>Copyright 2023. DICT Training. Web Development for Web Developer (Training for Trainers).</em>
            </footer>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

<?php 
include_once 'footer.php';
?>