<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from bootstrap.gallery/arise/sport/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 03:30:10 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Arise Admin Panel">
    <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Themeforest, Bootstrap">
    <meta name="author" content="Ramji">
    @php
    $path = Config::get('constants.ADMIN_TEMPLATE_URL')
    @endphp
    <link rel="shortcut icon" href="{{$path}}/img/fav.png">
    <title>Arise Admin Panel, Arise Dashboard</title>
    <link href="{{$path}}/css/login.css" rel="stylesheet" media="screen">
    <link href="{{$path}}/css/animate.css" rel="stylesheet" media="screen">
    <link href="{{$path}}/fonts/icomoon/icomoon.css" rel="stylesheet">
</head>

<body>
    <form action="{{ route('login') }}" id="wrapper" method="POST">
        {{ csrf_field()}}
        <div id="box" class="animated bounceIn">
            <div id="top_header"><img src="{{$path}}/img/logo.png" alt="Arise Admin Dashboard Logo">
                <h5>Sign in to access to your<br>Arise control panel.</h5></div>
                {{-- @if(Session::has('loginFail')) --}}
                <div class="">
                    <h4 class="loginFail"><strong>{{Session::get('loginFail')}}</strong></h4>
                </div>
                {{-- @endif --}}
                <div id="inputs">
                    <div class="form-block">
                        <input type="text" placeholder="Email" name="email" autocomplete="off"> <i class="icon-user-check"></i>
                        @if ( $errors && $errors->has('email'))
                        <label class="error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </label>
                        @endif
                    </div>

                    <div class="form-block">
                        <input type="password" placeholder="Password" name="password" autocomplete="off"> <i class="icon-spell-check"></i>
                         @if ($errors && $errors->has('password'))
                        <label class="error">
                            <strong>{{ $errors->first('password') }}</strong>
                        </label>
                        @endif
                    </div>
                    <input type="submit" value="Sign In">
                </div>
                <div id="bottom" class="clearfix">
                    <div class="pull-right">
                        <label class="switch pull-right">
                            <input type="checkbox" class="switch-input" name="remember">
                            <span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
                        </label>
                    </div>
                    <div class="pull-right"><span class="cb-label">  @lang('auth.remember') </span></div>
                </div>
            </div>
        </form>
    </body>

    </html>
