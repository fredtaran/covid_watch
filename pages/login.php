<?php
session_start();

if(isset($_SESSION['is_loggin']) && !empty($_SESSION['is_loggin'])) {
    header('Location: ../index.php');
    die();
}
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
        <link rel="stylesheet" href="../resources/plugins/fontawesome-free/css/all.min.css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="../resources/css/adminlte.min.css" />
    </head>
    
    <body class="hold-transition login-page">
        <div class="login-box" style="margin: auto; padding: 10px;">
            <div class="card card-outline card-primary shadow">
                <div class="card-header text-center">
                    <a href="#" class="h1">Covid Watch | <strong>Group I</strong></a>
                </div>

                <div class="card-body">
                    <p class="login-box-msg">Sign in</p>

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
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../resources/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../resources/plugins/moment/moment.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../resources/js/adminlte.js"></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../js/global.js"></script>
        <script>
            $(function(){
                $('form').submit(function(e){
                    var $this = this;
                    e.preventDefault();
                    
                    let formdata = $(this).serializeArray();
                    
                    if($this.checkValidity() === false){
                        // 
                        //get inputs that is empty
                        $.each($('input',$this),function(i){
                            //clear error style
                            $(this).removeClass('is-invalid');
                            //if empty then style error and focus on the first invalid input
                            if($.trim($(this).val()) == ''){
                                $(this).addClass('is-invalid');
                                if(i == 0){
                                    $(this).focus();
                                }
                            }
                        });
                    }else{
                        e.stopPropagation();
                        //if everything is ok disable all buttons then check db
                        startLoading();
                        $.ajax({
                            url: GLOBAL.url+"api/parselogin.php",
                            data:formdata,
                            method:'POST',
                            success: function(data,textStatus,jqXHR){
                                window.location = GLOBAL.url+'index.php';
                            },
                            error: function(jqXHR,textStatus,errorThrown){console.log(jqXHR)
                                var response = jqXHR.responseJSON;
                                Swal.fire({
                                    icon: 'error',
                                    title: 'ERROR',
                                    text: response
                                });
                                stopLoading();
                            }
                        });
                    }

                });
            });

            $('body').keypress(function(e){
                var keycode = (e.keyCode ? e.keyCode : e.which);
                if(keycode == '13' && Swal.isVisible() === false){
                    $('button').click();
                }
            });

            function startLoading(){
                $('input,button').prop('disabled',false);
                $('button').html('<i class="fas fa-circle-notch fa-spin"></i>');
            }
            function stopLoading(){
                $('button').html('Sign In');
            }
        </script>
    </body>

</html>