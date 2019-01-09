<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<!-- Mirrored from byrushan.com/projects/mae/1-0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Oct 2018 07:25:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Admin</title>

    <!-- Vendor CSS -->
    <link href="/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
    <link href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="/admin/css/app.min.1.css" rel="stylesheet">
    <link href="/admin/css/app.min.2.css" rel="stylesheet">
</head>

<body>
<div class="login" data-lbg="teal">
    <!-- Login -->
    <div class="l-block toggled" id="l-login">
        <div class="lb-header palette-Teal bg">
            <i class="zmdi zmdi-account-circle"></i>
            Hi there! Please Sign in
        </div>

        <form class="form-horizontal"
              role="form"
              method="POST"
              action="{{ url('login') }}">
            @csrf
            <div class="lb-body">
            <div class="form-group fg-float">
                <div class="fg-line">
                    <input type="email" name="email" class="input-sm form-control fg-input" value="{{ old('email') }}">
                    <label class="fg-label">Email Address</label>
                </div>
            </div>

            <div class="form-group fg-float">
                <div class="fg-line">
                    <input type="password" name="password" class="input-sm form-control fg-input">
                    <label class="fg-label">Password</label>
                </div>
            </div>
            @if ($errors->has('email'))
                <div class="form-group fg-float" style="color:red">{{ $errors->first('email') }}</div>
            @endif
            @if ($errors->has('password'))
                <div class="form-group fg-float" style="color:red">{{ $errors->first('password') }}</div>
            @endif
            <button type="submit" class="btn palette-Teal bg">Sign in</button>
        </form>
        <div class="m-t-20">
            <a data-block="#l-forget-password" data-bg="purple" href="#" class="palette-Teal text">Forgot password?</a>
        </div>
    </div>
</div>

<!-- Forgot Password -->
<div class="l-block" id="l-forget-password">
    <div class="lb-header palette-Purple bg">
        <i class="zmdi zmdi-account-circle"></i>
        Forgot Password?
    </div>

    <div class="lb-body">
        <p class="m-b-30">Enter your email regitered with our system</p>
        <form class="form-horizontal"
                          role="form" method="POST" action="{{ url('password/email') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group fg-float">
                <div class="fg-line">
                    <input type="text" name="email" class="input-sm form-control fg-input">
                    <label class="fg-label">Email Address</label>
                </div>
            </div>

            <button type="submit" class="btn palette-Purple bg">Create Account</button>

            <div class="m-t-30">
                <a data-block="#l-login" data-bg="teal" class="palette-Purple text d-block m-b-5" href="#">Already have an account?</a>
            </div>
        </form>
    </div>
</div>
</div>

<!-- Javascript Libraries -->
<script src="/admin/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/admin/vendors/bower_components/Waves/dist/waves.min.js"></script>

<script src="/admin/js/functions.js"></script>

</body>
</html>