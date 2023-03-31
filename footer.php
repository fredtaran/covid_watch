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
        <script src="<?php echo APP_PATH; ?>resources/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo APP_PATH; ?>resources/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge("uibutton", $.ui.button);
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo APP_PATH; ?>resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="<?php echo APP_PATH; ?>resources/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo APP_PATH; ?>resources/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="<?php echo APP_PATH; ?>resources/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?php echo APP_PATH; ?>resources/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo APP_PATH; ?>resources/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?php echo APP_PATH; ?>resources/plugins/moment/moment.min.js"></script>
        <script src="<?php echo APP_PATH; ?>resources/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?php echo APP_PATH; ?>resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="<?php echo APP_PATH; ?>resources/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?php echo APP_PATH; ?>resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo APP_PATH; ?>resources/js/adminlte.js"></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Custom Script -->
        <script src="<?php echo APP_PATH; ?>js/global.js"></script>
        <script src="<?php echo APP_PATH; ?>js/<?php echo $page; ?>.js"></script>

        <?php
        if(!isset($_SESSION['is_loggin']) || empty($_SESSION['is_loggin'])) {
            echo "
            <script>
            $('.content-wrapper').load('./pages/crud.php');
            $('#login').click(function () {
                $('.content-wrapper').load('./pages/login.php');
            });
            </script>
            ";
        }
        ?>

    </body>

</html>