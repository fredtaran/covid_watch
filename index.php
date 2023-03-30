<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>COVID WATCH 2023 | WEB DEV TOT</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="resources/plugins/fontawesome-free/css/all.min.css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
        <!-- iCheck -->
        <link rel="stylesheet" href="resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
        <!-- JQVMap -->
        <link rel="stylesheet" href="resources/plugins/jqvmap/jqvmap.min.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="resources/css/adminlte.min.css" />
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
        <!-- Daterange picker -->
        <link rel="stylesheet" href="resources/plugins/daterangepicker/daterangepicker.css" />
        <!-- summernote -->
        <link rel="stylesheet" href="resources/plugins/summernote/summernote-bs4.min.css" />
    </head>
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
                                <a id="dashboard" href="#" class="nav-link">
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
        <!-- jQuery -->
        <script src="resources/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="resources/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge("uibutton", $.ui.button);
        </script>
        <!-- Bootstrap 4 -->
        <script src="resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="resources/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="resources/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="resources/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="resources/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="resources/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="resources/plugins/moment/moment.min.js"></script>
        <script src="resources/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="resources/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="resources/js/adminlte.js"></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Custom Script -->
        <script>
            $(function () {
                $('.content-wrapper').load('./pages/crud.php');

                $('#dashboard').click(function () {
                    $('.content-wrapper').load('./pages/dashboard.html');
                });

                $('#crudform').click(function () {
                    $('.content-wrapper').load('./pages/crud.php');
                });

                $('#login').click(function () {
                    $('.content-wrapper').load('./pages/login.php');
                });
            });
        </script>

        <?php
        // if(!isset($_SESSION['is_loggin']) && empty($_SESSION['is_loggin'])) {
        //     echo "
        //     <script>
        //         $(document).ready(function() {
        //             $('.content-wrapper').load('./pages/login.php');
        //         })
        //     </script>
        //     ";
        // }

        ?>

    </body>
</html>