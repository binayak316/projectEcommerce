<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blue Bird Admin | Log in</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<script src="https://kit.fontawesome.com/bc607b3e78.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">

<body class="hold-transition login-page">
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Blue Bird</b> | ADMIN</a>
        </div>

        <div class="card-body">
            <p class="login-box-msg text-secondary">Sign in to start your session</p>
            <form action="../../index3.html" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Enter your email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                <div class="input-group-append">
                    <span class="input-group-text" onclick="password_show_hide();">
                    <i class="fa-solid fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block mt-3">Sign In</button>
                </div>
            </div>
            </form>

            <p class="mb-1 text-center mt-2"> <a href="/admin/forgot-password">I forgot my password</a> </p>
            <p class="mb-0 text-center"> <a href="/signup" class="">Register a new membership</a> </p>
        </div>
    </div>
</div>

<script src=" {{asset('/js/login.js')}} "></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>