<?php
require_once "config.php";
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
    </head>
    
    <body>
        <div class="login-box" style="margin: auto; padding: 10px;">
            <div class="card card-outline card-primary" style="margin-top: 55%;">
                <div class="card-header text-center">
                    <a href="#" class="h1">Covid Watch | <strong>Group I</strong></a>
                </div>

                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                                <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

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
        <!-- JQVMap -->
        <script src="resources/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="resources/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- AdminLTE App -->
        <script src="resources/js/adminlte.js"></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>

</html>




<!-- <script>
    $(function() {
        $("form").submit(function(event) {
            event.preventDefault();

            if($("input[name='username']").val() == 'admin' && $("input[name='password']").val() == '123') {
                // Redirect to admin page
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Incorrect username/password.',
                }).then((result) => {
                    $("input[name='password'").val("");
                })
            }
        })
    })
</script> -->