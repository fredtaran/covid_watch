<?php
session_start();

?>

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

<script>
    $(function() {
        $("form").submit(function(event) {
            event.preventDefault();

            if($("input[name='username']").val() == 'admin' && $("input[name='password']").val() == '123') {
                // Redirect to admin page
                $('.content-wrapper').load('./pages/dashboard.php');
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
</script>