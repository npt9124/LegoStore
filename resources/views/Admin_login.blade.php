<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('public/GD/css/bootstrap.min.css') }}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('public/GD/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/GD/css/style-responsive.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link href="{{ asset('public/Frontend/GD/fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic') }}" rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('public/GD/css/font.css') }}" type="text/css" />
    <link href="{{ asset('public/GD/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('public/GD/js/jquery2.0.3.min.j') }}"></script>
    <style>
        .w3layouts-main h3 {
            color: #fff;
            text-align: center;
        }

        .w3layouts-main h2 {
            color: #fff;
        }

        .w3layouts-main a {
            color: #fff;
        }

        .w3layouts-main a:hover {
            color: #ff0000;
        }

        .log-w3 input[type="submit"] {
            background-color: #ff69b4;
            color: #fff;
        }

        .log-w3 p {
            color: #fff;
        }

        .log-w3 p a {
            color: #fff;
        }

        .log-w3 p a:hover {
            color: #ff0000;
        }

        .log-w3 .or-login-with {
            color: #ffff;
        }
        /*.inline {*/
        /*    display: inline;*/
        /*    vertical-align: top;*/
        /*}*/

    </style>
</head>

<body>
<div class="log-w3" style="margin-bottom: 200px">
    <div class="w3layouts-main" style="background-image: url({{ asset('public/GD/images/login1.jpg') }});">
        <h3>Login Admin</h3>
        <h2 style="text-color: #d5504f">Sign In</h2>
        <form action="{{ URL::to('/dashboard') }}" method="post">
            {{ csrf_field() }}
            <input type="text" class="ggg" name="email" placeholder="Email" required="">
            <input type="password" class="ggg" name="password" placeholder="Password" required="">

            <span class="inline">
    <a href="#" class="white-text">Forgot Password?</a>
    <a href="#" class="red-text">Click here</a>
</span>

            <span class="inline">
    <a href="#">New user?Click here</a>

</span>

            <div class="clearfix"></div>
            <input type="submit"  value="Sign In" name="login">
        </form>

        <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
        <p class="or-login-with" style="text-size:50px">Or login with</p>
        <div class="social-icons" style="text-align:center">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
    </div>
</div>
<script src="{{ asset('public/GD/js/bootstrap.js') }}"></script>
<script src={{asset('public/GD/js/jquery.dcjqaccordion.2.7.js')}}></script>
<script src={{asset('public/GD/js/scripts.js')}}></script>
<script src={{asset('public/GD/js/jquery.slimscroll.js')}}></script>
<script src={{asset('public/GD/js/jquery.nicescroll.js')}}></script>
<script src={{asset('public/GD/js/jquery.scrollTo.js')}}></script>
